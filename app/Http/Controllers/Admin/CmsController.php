<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;

class CmsController extends MainController
{

    public function create(){
        try{
            $this->data('title','Create Page');
            return view('admin.cms.create',$this->data);
        }catch(Exception $e){
            die($e->getMessage());
        }finally{

        }

    }
}
