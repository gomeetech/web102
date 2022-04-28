<?php

namespace App\Engines;

use App\Repositories\Dynamics\DynamicRepository;
use App\Repositories\Options\OptionRepository;
use Gomee\Core\System;
use Gomee\Engines\JsonData;

class MenuEngine
{

    /**
     * duong dan thu muc
     *
     * @var string
     */
    protected $path;

    /**
     * data engin
     *
     * @var JsonData
     */
    protected $dataEngine;

    /**
     * opt repo
     *
     * @var OptionRepository
     */
    protected $optionRepository;
    /**
     * tạo đối tượng
     *
     * @param string $path
     */
    public function __construct($path = null)
    {
        $this->path = trim($path, '/') . '/';
        $this->dataEngine = new JsonData();
        $this->optionRepository = app(OptionRepository::class);
    }

    /**
     * lấy thông tin dữ liệu
     * @param string $filename
     * @return array
     */
    public function getData(string $filename)
    {
        return $this->dataEngine->getJsonData($this->path . trim($filename, '/'));
    }

    /**
     * lấy thông tin kế thừa
     *
     * @param array $rawData
     * @param string $filename
     * @return array
     */
    public function checkExtends($rawData, string $filename): array
    {
        if (!$rawData) return [];
        $data = $rawData['data'] ?? [];
        // kiểm tra trong mảng gốc có yêu cầu kế thừa hay ko
        if (array_key_exists('extends', $rawData)) {
            // lấy dử liễu file cần thừa kế
            // tạm bỏ qua nó có kế thừa cái khác hay ko
            $baseData = $this->getData($rawData['extends']);
            if ($baseData && array_key_exists('data', $baseData)) {
                $newData = [];
                $hasYield = false;
                // duyệt mảng data để lấy ra các phần tử r ném vào new data
                foreach ($baseData['data'] as $key => $value) {
                    if (substr($key, 0, 1) == '@') {
                        // kiểm tra xem có tồn tại key @yield hay ko?
                        $keyFunc = substr($key, 1);
                        if ($keyFunc == 'yield') {
                            if (
                                (is_array($value) && (in_array($filename, $value) || in_array('all', $value) || in_array('*', $value)))
                                || (is_string($value) && in_array($value, [$filename, 'all', '*']))
                            ) {
                                // nếu có thì merge với data
                                // trùng nhau sẽ được merge, chưa có sẽ dược thêm mới
                                $hasYield = true;
                                $newData = array_merge($newData, $data);
                            }
                        } elseif (in_array($keyFunc, ['include', 'module', 'modules'])) {
                            // kiểm tra xem có yêu cầu include không?
                            // có thì duyệt mảng
                            if ($keyFunc == 'include') {
                                if (!is_array($value)) $values = [$value];
                                else $values = $value;
                            } elseif (in_array($keyFunc, ['modules', 'module'])) {
                                if (!is_array($value)) $vals = [$value];
                                else $vals = $value;
                                $values = array_map(function ($val) {
                                    return 'module-' . $val;
                                }, $vals);
                            }

                            if ($values) {
                                foreach ($values as $key => $file) {
                                    if ($menu = $this->getData($file)) {
                                        $newData = array_merge(
                                            $newData,
                                            $this->checkInclude(
                                                $this->checkExtends($menu ?? [], $file)
                                            )
                                        );
                                    }
                                }
                            }
                        }
                        else{
                            $newData[$key] = $value;
                        }
                    } else {
                        $newData[$key] = $value;
                    }
                }
                if ($hasYield) {
                    $data = $newData;
                } else {
                    // nếu không có yield thì sẽ merge data vào new data
                    $data = array_merge($newData, $data);
                }
            }
        }
        return $data;
    }

    /**
     * check include
     *
     * @param array $data
     * @return array
     */
    public function checkInclude($data)
    {
        if (!is_array($data)) return [];
        if (array_has_any($data, ['@include', '@module', '@modules'])) {
            // kiểm tra xem có yêu cầu include không?
            // có thì duyệt mảng
            $newData = [];
            foreach ($data as $key => $value) {
                if (substr($key, 0, 1) == '@') {
                    // kiểm tra từ khóa include
                    $keyFunc = substr($key, 1);
                    $values = [];
                    if ($keyFunc == 'include') {
                        if (!is_array($value)) $values = [$value];
                        else $values = $value;
                    } elseif (in_array($keyFunc, ['modules', 'module'])) {
                        if (!is_array($value)) $vals = [$value];
                        else $vals = $value;
                        $values = array_map(function ($val) {
                            return 'module-' . $val;
                        }, $vals);
                    }
                    else{
                        $newData[$key] = $value;
                    }

                    if ($values) {
                        foreach ($values as $key => $file) {
                            if ($menu = $this->getData($file)) {
                                $newData = array_merge(
                                    $newData,
                                    $this->checkInclude(
                                        $this->checkExtends($menu ?? [], $file)
                                    )
                                );
                            }
                        }
                    }
                } else {
                    $newData[$key] = $value;
                }
            }
            $data = $newData;
        }

        return $data;
    }

    /**
     * lấy menu
     *
     * @param string $filename
     * @return array
     */
    public function get(string $filename)
    {
        // DynamicPost::check($request);
        if (!$filename) $filename = 'admin';
        admin_check_dynamic();
        $webType = get_web_type();
        $webSetting = web_setting();
        $isDemo = $webSetting ? ($webSetting->package_type == 'demo') : false;
        $itemList = get_web_module_list($webType);
        $menuData = $this->getData($filename);
        $data = $this->checkInclude(
            $this->checkExtends($menuData ?? [], $filename)
        );
        $menuitems = isset($data['dashboard']) ? [$data['dashboard']] : [];
        $issetPost = false;
        // dd($data);
        if (count($itemList)) {
            foreach ($data as $key => $item) {
                $keyFunc = substr($key, 0, 1) == '@' ? substr($key, 1) : "";

                if (in_array($key, $itemList)) {
                    if (!isset($item['active_key']) || !$item['active_key']) {
                        $item['active_key'] = $key;
                    }
                    if ($key == 'themes' && $theme = get_active_theme()) {
                        if ($this->optionRepository->hasThemeOption($theme->id)) {
                            array_unshift($item['submenu']['data'], [
                                'text' => 'Tùy biến',
                                'title' => 'Tùy biến',
                                'active_key' => 'theme-option',
                                'route' => 'admin.themes.options',
                                'icon' => 'paint-brush'
                            ]);
                        }
                    } elseif ($key == 'settings') {
                        if ($webType == 'ecommerce') {
                            $item['submenu']['data'][] = [
                                'text' => 'Trang sản phẩm',
                                'title' => 'Trang sản phẩm',
                                'active_key' => 'settings.products',
                                'route' => 'admin.settings.group.form',
                                'params' => [
                                    'group' => 'products'
                                ],
                                'icon' => 'cubes'
                            ];
                            $item['submenu']['data'][] = [
                                'text' => 'Cửa hàng',
                                'title' => 'Cửa hàng',
                                'active_key' => 'settings.ecommerce',
                                'route' => 'admin.settings.group.form',
                                'params' => [
                                    'group' => 'ecommerce'
                                ],
                                'icon' => 'shopping-cart'
                            ];
                        }
                        if (!$isDemo) {
                            $item['submenu']['data'][] = [
                                'text' => 'Cấu hình',
                                'title' => 'Cấu hình',
                                'active_key' => 'webconfig',
                                'route' => 'admin.settings.webconfig',
                                'icon' => 'globe'
                            ];
                        }
                    }
                    $menuitems[] = $item;
                } elseif ($key == 'crawlers' && $webType == 'ecommerce') {
                    $menuitems[] = $item;
                } elseif ($key == 'custom') {
                    if (is_array($item)) {
                        foreach ($item as $custom) {
                            if ($custom == 'posts') {
                                $menuitems = array_merge($menuitems, $this->getPostMenuItems());
                                $issetPost = true;
                            } else {
                            }
                        }
                    } elseif ($item == 'posts') {
                        $menuitems = array_merge($menuitems, $this->getPostMenuItems());
                        $issetPost = true;
                    }
                } elseif ($keyFunc == 'package' || $keyFunc == 'packages') {
                    $packageMenus = System::getMenus($item);
                    if ($packageMenus) {
                        foreach ($packageMenus as $key => $value) {
                            $menuitems[] = $value;
                        }

                        // dd($newData);
                    }
                }
            }
            if (!$issetPost) {
                $menuitems = array_merge($menuitems, $this->getPostMenuItems());
            }
        }



        $sidebar_menu = [
            'type' => 'list',
            'data' => $menuitems
        ];

        return $sidebar_menu;
    }

    /**
     * lấy menu post
     *
     * @return array
     */
    public function getPostMenuItems(): array
    {
        $items = [];

        // dynamic
        $dynamicRepository = new DynamicRepository();
        if (count($dynamics = $dynamicRepository->notTrashed()->get())) {
            foreach ($dynamics as $item) {
                $m = [
                    'text' => $item->name,
                    'title' => $item->name,
                    'active_key' => $item->slug,
                    'url' => route('admin.posts', ['dynamic' => $item->slug]),
                    'icon' => 'folder-open'
                ];

                $sub_menu = [
                    [
                        'text' => "Danh sách",
                        'active_key' => 'list',
                        'url' => admin_dynamic_url('list', ['dynamic' => $item->slug]),
                        'icon' => 'list-ul'
                    ],
                    [
                        'text' => "Thêm " . $item->name,
                        'active_key' => 'create',
                        'url' => admin_dynamic_url('create', ['dynamic' => $item->slug]),
                        'icon' => 'plus-circle'
                    ]
                ];
                if ($item->use_category) {
                    $sub_menu[] = [
                        'text' => "Danh mục",
                        'active_key' => $item->slug . '.categories.list',
                        'url' => admin_dynamic_url('categories.list', ['dynamic' => $item->slug]),
                        'icon' => 'hashtag',
                        'data-active-key' => $item->slug . '.categories.list',
                    ];
                }

                $m['submenu'] = $sub_menu;

                $items[] = $m;
            }
        }


        return $items;
    }
}
