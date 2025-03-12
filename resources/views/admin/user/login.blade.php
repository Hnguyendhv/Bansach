<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!---Custom CSS File--->
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('admin_css/style.css') }}">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Đăng nhập</header>
      @include('admin.alert')
      <form action="login/store" method="post">
        <input type="text" name="email" placeholder="Nhập email">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <div style="display: flex; margin: -30px 0;">
        <input type="checkbox" name="remember" style="width: 14px;">
        <label for="checkbox" style="padding-top: 15px;">lưu mật khẩu</label>
        </div>
        <a href="#">Quên mật khẩu?</a>
        <input type="submit" class="button" value="Đăng nhập">
        @csrf
      </form>


      <div class="signup">
        <span class="signup">Đăng ký tài khoản?
         <label for="check">Đăng ký</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Create a password">
        <input type="password" placeholder="Confirm your password">
        <input type="button" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
