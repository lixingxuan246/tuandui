<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap 实列 - 水平表单</title>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
    <script type="/static/js/jquery.min.js"></script>
    <script type="/static/js/bootstrap.min.js"></script>
</head>
<body>
<center><h1>管理员列表</h1></center><hr/>
<form>
  <input type="text" name="name" value="{{$name}}" placeholder="请输入用户名">
  <input type="submit" value="搜索">
</form>
<a href="{{url('/admin/create')}}">管理员添加</a>
<table class="table">
 
<thead>
  <tr>
    <th>ID</th>
    <th>用户名</th>
    <th>密码</th>
    <th>添加时间</th>
    <th>操作</th>
  </tr>
</thead>
<thead>
  @foreach($data as $k=>$v)
  <tr @if($k%2==0) class='active' @else class='success' @endif>
    <td>{{$v->p_id}}</td>
    <td>{{$v->name}}</td>
    <td>{{$v->pwd}}</td>
    <td>{{date('Y-m-d H:i:s',$v->add_time)}}</td>
        <td>
            <a href="{{url('admin/destroy/'.$v->id)}}" class='btn btn-danger'>删除</a>
        </td>
  </tr>
  @endforeach
  <tr><td colspan='7'>{{$data->appends(['name'=>$name])->links()}}</td></tr>
</thead>

</table>
</body>
</html>