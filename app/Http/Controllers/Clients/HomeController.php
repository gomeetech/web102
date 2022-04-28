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
    protected $module = 'home';

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
        return $this->cacheViewModule($request, 'index');
    }

    
    public function home(Request $request)
    {
        // return $this->repository->join('profiles', 'profiles.profile_id', '=', 'users.id')->first(['id' => get_owner_id()]);
    }

    public function index(Request $request)
    {
        return $this->cacheViewModule($request, 'index');
    }

    public function getCSRFToken(Request $request)
    {
        extract($this->apiDefaultData);
        if ($token = csrf_token()) {
            $status = true;
            $data = compact('token');
        }
        return $this->json(compact($this->apiSystemVars));
    }


    public function crawlData(Request $request){
        if($request->url){
            $res = $this->api->get($request->url);
            if($res) return $res->getBody()->getContents();
        }
        return null;
    }

    public function test()
    {
        // dd(get_menu(['id'=>172]));
    }

    public function viewLogs(Request $request)
    {
        $date = $request->date?$request->date: date('Y-m-d');
        $f = $this->filemanager->getContent(storage_path('logs/access/'.$date . '.txt'));
        return response($f, 200,  ['Content-Type'=>'text/pain']);
    }
}
