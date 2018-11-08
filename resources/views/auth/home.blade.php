<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trang chủ</title>
  <style>
    .container{
      max-width:1170px;
      margin:0 auto;
    }
    h2{
      color: green;
      text-align:center;
      text-transform:uppercase;
    }
  </style>
</head>
<body>
  <div class="container"> 

    <h2>Chào Mừng {{Session::get('user')}} Đã Đến Với Trang Chủ</h2>
    <table>
      <tr>
        <td><a href="{{route('getUpdate')}}">Cập nhật thông tin cá nhân</a></td>
      </tr>
      <tr>
        <td><a href="{{route('changePassword')}}">Đổi Mật Khẩu</a></td>
      </tr>
      <tr>
        <td><a href="">Đăng Xuất</a></td>
      </tr>
    </table>
  </div>
</body>
</html>