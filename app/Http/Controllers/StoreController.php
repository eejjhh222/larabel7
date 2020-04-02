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
        $store->setTestTable();
        $users = $store->getTestTable();
        $view->users = $users;
        return $view;
    }
}
