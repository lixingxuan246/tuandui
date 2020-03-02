<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 水平表单</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3>管理员修改</h3></hr>
<form class="form-horizontal" role="form" action="{{url('/admin/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="firstname" name="admin" value="{{$data->name}}">
            <b style="color:blue">{{$errors->first('admin')}}</b>
        </div>
    </div>

    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="firstname" name="tel" value="{{$data->pwd}}" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>

</body>
</html>