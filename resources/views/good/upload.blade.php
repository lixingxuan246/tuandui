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

<form action="{{url('good/update/'.$res->good_id)}}" method="post" class="form-horizontal"  role="form"  enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">商品名字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$res->good_name}}" id="firstname" name="good_name"
                   placeholder="请输入名字">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">商品价格</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$res->good_price}}" id="lastname" name="good_price"
                   placeholder="请输入年龄">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">商品库存</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$res->good_number}}" id="lastname" name="good_number"
                   placeholder="请输入身份证">
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">图片</label>
        <div class="col-sm-10">
        <img src="{{env('UPLOAD_URL')}}{{$res->good_img}}" width="40" height="40">
            <input type="file" class="form-control" id="lastname" name="good_img"
                   placeholder="请输入头像">
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <!-- <button type="submit" value="编辑"></button> -->
            <input type="submit" value="编辑">
        </div>
    </div>
</form>

</body>
</html>