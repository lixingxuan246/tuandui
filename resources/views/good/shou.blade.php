<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
   <form action="{{url('/admin/index/')}}" method="get" accept-charset="utf-8">
    @csrf
       <input type="submit" value="管理员">

   </form>
      <form action="{{url('/type')}}" method="get" accept-charset="utf-8">
       @csrf
       <input type="submit" value="分类">

   </form>
   <form action="{{url('/good/index')}}" method="get" accept-charset="utf-8">
   @csrf
       <input type="submit" value="商品">

   </form>   <form action="{{url('/brand/index')}}" method="get" accept-charset="utf-8">
    @csrf
       <input type="submit" value="品牌">

   </form>
</body>
</html>