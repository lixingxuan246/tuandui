<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>分类编辑表</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
</head>
<body>


<form action="{{url('/type/update/'.$arr->type_id)}}" method="post"  class="form-horizontal" role="form">
@csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="firstname"
                   placeholder="请输入分类名称" name="type_name" value="{{$arr->type_name}}">

        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">分类</label>
        <div class="col-sm-7">
            <select name="pid">
                <option value="0">顶级分类</option>
                @foreach($data as $k=>$v)
                <option value="{{$v->type_id}}" {{$arr->pid==$v->type_id?'selected':''}}>{{str_repeat('|——',$v->level)}}{{$v->type_name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
            <button type="submit" class="btn btn-default">编辑</button>
        </div>
    </div>
</form>

</body>
</html>