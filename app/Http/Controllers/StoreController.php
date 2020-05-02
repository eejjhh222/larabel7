<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\StoreModel;

class StoreController extends Controller
{
    //
    protected $storeModel;

    public function test()
    {
        $view = view('store');
        $store = new StoreModel;
//        $store->setTestTable();
        $users = $store->getTestTable();
        $view->users = $users;
        return $view;
    }

    public function nMap()
    {
        $mapKey = env('NAVER_MAP_CLIENT_ID');
        $view = view('nMap',[
            'mapKey' => $mapKey
        ]);
        return $view;
    }

    public function getData()
    {
        $store = new StoreModel;
//        $store->setTestTable();
        $users = $store->getTestTable();
        return json_decode($users);
    }


}
