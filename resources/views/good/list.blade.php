<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 上下文类</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <style>
        ul li{
            float: left;
            margin-left: 20px;
            list-style: none;
            color: orange;
        }
    </style>
</head>
<body>
<!-- <form action="{{url('article/create')}}" method="get" accept-charset="utf-8">
    <input type="text" name="title" placeholder="请输入搜索内容" />
    <input type="text" name="type" placeholder="请搜索"/>
    <input type="submit" value="搜索"/>
</form> -->
<table class="table" border=1>
    <tr>
        <td>id</td>
        <td>商品名称</td>
        <td>商品价格</td>

        <td>商品库存</td>

        <td>商品图片</td>




        <td>操作</td>

    </tr>
    @foreach($res as $k=>$v)
    <tr>
        <td>{{$v->good_id}}</td>

        <td>{{$v->good_name}}</td>
        <td>{{$v->good_price}}</td>
        <td>{{$v->good_number}}</td>




        <td><img src="{{env('UPLOAD_URL')}}{{$v->good_img}}"  width="40" height="40"></td>
        <td>
        <a href="{{url('good/edit/'.$v->good_id)}}">编辑</a>
<a href="{{url('good/destroy/'.$v->good_id)}}" >删除</a>
        </td>
    </tr>
    @endforeach




</table>
<!-- <script src="static/js/jquery.min.js"></script> -->






</body>

<!-- ->appends(['title'=>$title,'type'=>$type]) -->

</html>