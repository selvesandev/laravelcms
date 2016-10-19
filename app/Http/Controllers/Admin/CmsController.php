<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Url;
use Illuminate\Http\Request;

use Validator;
use Exception;


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
            'title' => 'required|min:2',
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
                return redirect()->route('manage-page')->with('success','Page was created successfully');
            }else{
                return redirect()->back()->with('error','There was a problem');
            }
        }else{
            return redirect()->back()->with('error','There was a problem');
        }
    }



    public function manage(){
        try{
            $pages=Page::all();
            $columns=['author'=>true,'tags'=>true,'comments'=>true,'date'=>true,'h1 title'=>false,'menu_title'=>false];
            $this->data('published',Page::where('status',1)->get());
            $this->data('pages',$pages);
            $this->data('columns',$columns);
            $this->data('title','Manage Pages');
        }catch(Exception $e){
            die ($e->getMessage());
        }finally{
            return view('admin.cms.manage',$this->data);
        }
    }
}
