<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Url;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;
use Validator;


class CmsController extends MainController
{

    public function create()
    {
        try {
            $this->data('title', 'Create Page');
            return view('admin.cms.create', $this->data);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function createAction(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'h1title' => 'required',
            'menutitle' => 'required',
            'status' => 'required',
            'tag_keywords' => 'required',
            'desc' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $data = [
            'parent_id' => (int)$request->parent_id,
            'title' => $request->title,
            'h1_title' => $request->h1title,
            'menu_title' => $request->menutitle,
            'slug'=>$this->seoUrl($request->title,'-'),
            'status' => $request->status,
            'meta_keywords' => $request->tag_keywords,
            'meta_description' => $request->desc,
            'content' => htmlspecialchars($request->tinyContent)
        ];
        $pageCreate=Page::create($data);
        if($pageCreate){
            $dataUrl=[
                'table_name'=>'pages',
                'table_id'=>$pageCreate->id,
                'url'=>$this->seoUrl($request->title,'-')
            ];
            if(Url::create($dataUrl)){
                return redirect()->route('pages')->with('success','Page was created successfully');
            }else{
                return redirect()->back()->with('error','There was a problem');
            }
        }else{
            return redirect()->back()->with('error','There was a problem');
        }

    }
}
