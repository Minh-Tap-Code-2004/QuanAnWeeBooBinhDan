<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ĐĂNG NHẬP</title>
  <style>
    body {
      background-color: #fff5e6;
    }

    #register-input {
      background-color: #fff;
      border-radius: 15px;
      width: 300px;
      padding: 20px;
      margin: 0 auto;
      box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
      margin-bottom: 20px;
    }

    #register-input label {
      color: #ff7f50;
      font-weight: bold;
    }

    #register-input input[type="text"],
    #register-input input[type="email"],
    #register-input input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    #register-input button[type="submit"] {
      width: 100%;
      background-color: #ff7f50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    #register-input button[type="submit"]:hover {
      background-color: #ff6347;
    }
  </style>
</head>

<body>
  <main>
    <div id="register-input">
      <h2>Đăng ký</h2>

      <label for="uname"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Tên đăng nhập" name="uname" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Email" name="email" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Mật khẩu" name="psw" required>

      <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
      <input type="password" placeholder="Nhập lại mật khẩu" name="psw-repeat" required>

      <button type="submit">Đăng ký</button>
    </div>
  </main>
</body>



</html>

<?php
include("footer.html");
?>