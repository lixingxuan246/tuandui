<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 水平表单</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</head>
<body>
<<<<<<< HEAD
=======
    <a href="{{url('/brand/create')}}">品牌添加</a>
>>>>>>> eaf7fadbfec4bf69b2a3d7341d6e1276c68a4930
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>品牌名称</th>
            <th>品牌LOGO</th>
            <th>品牌网址</th>
            <th>品牌介绍</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $k=>$v)
        <tr @if($k%2==0) class="active" @else class="success" @endif >
            <th>{{$v->b_id}}</th>
            <th>{{$v->b_name}}</th>
            <th><img src="{{env('UPLOAD_URL')}}{{$v->b_logo}}" width='40' height='40'></th>
            <th>{{$v->b_wz}}</th>
            <th>{{$v->b_content}}</th>
            <th>
                <a href="{{url('brand/edit/'.$v->b_id)}}" class="btn btn-info">编辑</a>
                <a href="{{url('brand/destroy/'.$v->b_id)}}" class="btn btn-danger">删除</a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>