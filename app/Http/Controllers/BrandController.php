<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //DB 操作
        // $data=DB::table('brand')->get();

        //ORM 操作
        $data=brand::get();

        // dd($data);
        return view('brand.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *添加页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand/create');
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
        //判断有没有文件上传
        if($request->hasFile('b_logo')){
            $data['b_logo']=$this->upload('b_logo');
        }

        // dd($data);

        // DB 操作
        // $res=DB::table('brand')->insert($data);

        //ORM 操作
        // $res=Brand::insert($data);
        $res=Brand::create($data);

        if($res){
            return redirect('/brand');
        }
    }

    public function upload($filename){
        //判断文件上传中是否出错
        if(request()->file($filename)->isValid()){
            //接收
            $photo=request()->file($filename);
            //上传
            $store_result=$photo->store('uploads');
            return $store_result;
        }
        exit('未获取到上传文件');
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
        //DB 操作
        // $user=DB::table('brand')->where('p_id',$id)->first();

        //ORM 操作
        //$user=Brand::where('p_id',$id)->first();
        $user=Brand::find($id);

        // dd($user);
        return view('brand.edit',['user'=>$user]);
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
        //echo $id;
        $user=$request->except('_token');
        //判断有没有文件上传
        if($request->hasFile('b_logo')){
            $user['b_logo']=$this->upload('b_logo');
        }
        //DB 操作
        // $res=DB::table('brand')->where('p_id',$id)->update($user);
        //ORM操作
        $res=Brand::where('b_id',$id)->update($user);

        if($res!==false){
            return redirect('/brand');
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
        //echo $id
        //DB操作
        // $res=DB::table('brand')->Where('p_id',$id)->delete();
        //ORM操作
        $res=Brand::destroy($id);
        if($res){
            return redirect('/brand');
        }
    }
}
