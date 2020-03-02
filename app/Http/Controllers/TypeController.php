<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "123";die;
        $type_name=request()->type_name??'';
        $where=[];
        if($type_name){
            $where[]=['type_name','like',"%$type_name%"];
        }
        $data=Type::where($where)->get();
        // dd($data);
        $data=$this->createTree($data);
        return view('type/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *添加页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=type::all();
        // dd($data);
        // $data=$this->createTree($data);
        $data=$this->createTree($data);
        return view('type/create',['data'=>$data]);
    }

    public function createTree($data,$pid=0,$level=1)
    {
        if(!$data){
            return;
        }
        static $newarray=[];
        foreach($data as $k=>$v){
            if($v->pid==$pid){
                $v->level=$level;
                $newarray[]=$v;

                //调用本身
                $this->createTree($data,$v->type_id,$level+1);
            }
        }
        return $newarray;
    }

    /**
     * Store a newly created resource in storage.
     *执行添加
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data=$request->except('_token');
        // dd($data);
        $res=type::create($data);
        if($res){
           return redirect('/type');
        }


    }


    /**
     * Display the specified resource.
     *预览详情页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *编辑页面
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arr=type::find($id);
        $data=type::get();
        $data=$this->createTree($data);
        // dd($arr);
        return view('type/edit',['arr'=>$arr,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *执行编辑
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('_token');
        // dd($data);
        $res=type::where('type_id',$id)->update($data);
        if($res){
            return redirect('/type');
        }
    }

    /**
     * Remove the specified resource from storage.
     *删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $where=[
            ['pid','=',$id]
        ];
        $count=type::where($where)->count();
        if($count>0){
            echo "<script>alert('此分类下有子分类，不能删除')</script>";die;
        }else{
           $res=type::destroy($id);
            if($res){
                return redirect('/type');
            }
        }

    }

}