<?php

namespace App\Http\Controllers;
use App\Good;
use Illuminate\Http\Request; 

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('good/create');
    }


public function upload($filename){
        //判断上传过程有无错误
        if (request()->file($filename)->isValid()){
            //接收值
            $photo = request()->file($filename);
            //上传   移动到指定目录下
            $store_result = $photo->store('uploads');
            return $store_result;
        }
        exit("未获取到上传文件或获取失败");
    }


    public function store(){
        $data = request()->except('_token');
        if (request()->hasFile('good_img')){
            $data['good_img']=$this->upload('good_img');
            // dd($img);

          }
        $res = Good::create($data);
        // dd($res);
        if($res){
            return redirect('good/index');
        }
    }

    //展示试图
    public function index(){
        $res = good::get();
        return view('good/index',['res'=>$res]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $res = good::where('good_id',$id)->first();
        return view('good/upload',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $user=$request->except('_token');
        if ($request->hasFile('good_img')) {
            $user['good_img'] = $this->upload('good_img');
            // dd($img);

          }
        // $res = DB::table("people")->where('p_id',$id)->update($user);
        $res=good::where('good_id',$id)->update($user);
        // dd($res);
        if($res!==false){
            return redirect("good/list");

    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $res=good::destroy($id);
        if($res){
           return redirect('good/index');
        }
    }
}
