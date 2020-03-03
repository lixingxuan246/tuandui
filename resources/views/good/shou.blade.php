<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
   <form action="" method="post" accept-charset="utf-8">
    @csrf
       <input type="submit" value="管理员">

   </form>
      <form action="" method="post" accept-charset="utf-8">
       @csrf
       <input type="submit" value="分类">

   </form>
   <form action="{{url('good/')}}" method="post" accept-charset="utf-8">
   @csrf
       <input type="submit" value="商品">

   </form>   <form action="" method="post" accept-charset="utf-8">
    @csrf
       <input type="submit" value="品牌">

   </form>
</body>
</html>