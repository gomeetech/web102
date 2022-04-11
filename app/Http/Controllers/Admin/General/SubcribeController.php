<?php

namespace App\Http\Controllers\Admin\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;

use App\Repositories\Subcribes\SubcribeRepository;

class SubcribeController extends AdminController
{
    protected $module = 'subcribes';

    protected $moduleName = 'Đăng ký theo dõi';

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SubcribeRepository $SubcribeRepository)
    {
        $this->repository = $SubcribeRepository;
        $this->init();
    }

}
