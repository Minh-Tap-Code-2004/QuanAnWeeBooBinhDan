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
    main {
      display: flex;
      align-items: center;
      flex-direction: row;
      margin: 20px;
      border: 3px solid #FF5A09;
      border-radius: 10px;
      background-color: lightyellow;
    }

    #login-img {
      margin: 10px;
      width: 50%;
      height: 800px;
      border: 1px solid #FF5A09;
      border-radius: 10px;
    }

    #img {
      width: 100%;
      height: 100%;
      border-radius: 10px;
    }

    #login-input {
      font-family: Arial, Helvetica, sans-serif;
      height: 100%;
      margin: 10px;
      padding: 16px;
      width: 50%;
      background-color: #FFF8DC;
      border: 1px solid #FF5A09;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
    }

    input[type=text],
    input[type=password] {
      padding: 15px;
      margin: 20px;
      display: inline-block;
      border: none;
      background: #FFF0F5;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      margin: 20px;
      background-color: #FFDAB9;
      outline: none;
    }

    p{
      text-decoration: underline;
    }

    button {
      margin: 20px;
      padding: 15px;
      border-radius: 5px;
      background-color: #FFB6C1;
      color: white;
      border: none;
      cursor: pointer;
      transition: transform .2s;
    }

    #facebook {
      background-color: #3B5998;
    }

    #gmail {
      background-color: #dd4b39;
    }

    button:hover {
      background-color: #FF69B4;
    }

    button:active {
      transform: scale(0.95);
    }

    @media screen and (max-width: 600px) {
      #login-img {
        display: none;
      }

      #login-input {
        width:auto;
        border: none;
      }
    }
  </style>
</head>

<body>
  <main>
    <div id="login-img">
      <img src="Pictures/Login-picture.jpeg" id="img">
    </div>

    <div id="login-input">
      <label for="uname"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Tên đăng nhập" name="uname" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Mật khẩu" name="psw" required>

      <button type="submit">Đăng nhập</button>

      <p><a href="">Quên mật khẩu?</a></p>

      <p><a href="registration.php">Chưa có tài khoản?</a></p>

      <button type="button" onclick="location.href='https://www.facebook.com'" id="facebook">Đăng nhập bằng Facebook</button>
      <button type="button" onclick="location.href='https://www.google.com'" id="gmail">Đăng nhập bằng Gmail</button>
    </div>

  </main>
</body>

</html>

<?php
include("footer.html");
?>