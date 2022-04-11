<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;

use App\Repositories\Pages\PageRepository;
use App\Repositories\Tags\TagRefRepository;
use App\Repositories\Metadatas\MetadataRepository;
use App\Repositories\Files\FileRepository;
use Gomee\Helpers\Arr;

class PageController extends AdminController
{
    protected $module = 'pages';

    protected $moduleName = 'Trang';
    

    /**
     * @var PageRepository $repository
     */
    public $repository;
    
    /**
     * @var TagRefRepository $tagRefs
     * @quản lý liên kết thẻ
     */
    protected $tagRefs;

    /**
     * @var FileRepository $fileRepository
     * Quản lý file upload
     */
    protected $fileRepository;

    /**
     * @var string $formLayout
    */
    // protected $formLayout = 'forms.grid';
    
    
    protected $makeThumbnail = true;

    protected $flashMode = true;
    
    /**
     * @var string $formLayout
    */
    // protected $formLayout = 'forms.grid';
    
    public $featureImageWidth = 400;
    public $featureImageHeight = 300;
    
    public $socialImageWidth = 600;
    public $socialImageHeight = 315;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PageRepository $pageRepository, MetadataRepository $MetadataRepository, TagRefRepository $tagRefRepository, FileRepository $fileRepository)
    {
        $this->repository = $pageRepository;

        $this->metadatas = $MetadataRepository;

        $this->tagRefs = $tagRefRepository;

        $this->fileRepository = $fileRepository;

        $this->init();
        
    }

    
    /**
     * can thiệp trước khi luu
     * @param Request $request
     * @param Arr $data dũ liệu đã được validate
     * @return void
     */
    protected function beforeSave(Request $request, Arr $data)
    {
        if(!$request->id){
            $data->author_id = $request->user()->id;
        }
        $data->slug = $this->repository->getSlug(
            $request->custom_slug? $request->slug : $request->title,
            $request->id
        );
        $this->uploadImageAttachFile($request, $data, 'featured_image', get_content_path('pages'), 400, 300);

        $this->makeSocialImage($data, $this->module);
    }

    
    /**
     * can thiệp sau khi luu
     * @param Request $request
     * @param Model $result dũ liệu đã được luu
     * @param Arr $data 
     * @return void
     */
    public function afterSave(Request $request, $result, $data)
    {
        $this->tagRefs->updateTagRef('page', $result->id, $data->tags??[]);
        $meta = $data->copy(
            [
                'custom_slug',
                'meta_title',
                'meta_description',
                'featured_image_keep_original'
            ]
        );
        
        $meta['og_image_width'] = $this->featureImageWidth;
        $meta['og_image_height'] = $this->featureImageHeight;
        $metas = $this->metadatas->saveMany('page', $result->id, $meta);

    }





    /**
     * tim kiếm thông tin người dùng 
     * @param Request $request
     * @return json
     */
    public function getPageSelectOptions(Request $request)
    {
        extract($this->apiDefaultData);

        if($options = $this->repository->searchOptions($request)){
            $data = $options;
            $status = true;
        }else{
            $message = 'Không có kết quả phù hợp';
        }

        return $this->json(compact(...$this->apiSystemVars));
    }

}
