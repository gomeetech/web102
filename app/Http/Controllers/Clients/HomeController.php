<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Clients\ClientController;

use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\Users\UserRepository;
use Gomee\Laravel\Router;
use Illuminate\Support\Facades\Route;

class HomeController extends ClientController
{
    protected $module = 'homes';

    protected $moduleName = 'Home';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var UserRepository
     */
    public $repository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
        $this->init();
    }

    public function getIndexPage(Request $request)
    {
        return view('welcome');
    }

}
