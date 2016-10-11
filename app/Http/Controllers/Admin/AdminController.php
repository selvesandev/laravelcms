<?php

namespace App\Http\Controllers\Admin;

use App\Http\Facades\Helper;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Route;
use League\Flysystem\Exception;


class AdminController extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        try {
            $this->data('title', 'Welcome To Dashboard');
        } catch (Exception $e) {
            die($e->getMessage());
        } finally {
            return view('admin.dashboard.index',$this->data);
        }
    }



}
