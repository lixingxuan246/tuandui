<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
    <form action="{{url('good/insert')}}" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
    @csrf
        <table>
          <tr>
              <td>商品名称</td>
              <td><input type="text" name="good_name"/></td>
          </tr>
          <tr>
              <td>商品价格</td>
              <td><input type="text" name="good_price"/></td>
          </tr>
          <tr>
              <td>商品库存</td>
              <td><input type="text" name="good_number"/></td>
          </tr>
          <tr>
              <td>商品图片</td>
              <td><input type="file" name="good_img"/></td>
          </tr>
           <tr>
              <td></td>
              <td><input type="submit" value="添加"></td>
          </tr>
        </table>

    </form>
</body>
</html>