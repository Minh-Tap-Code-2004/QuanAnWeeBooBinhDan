<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>CHI TIẾT THỰC ĐƠN 1</title>
  <style>
    body {
      background-color: lightyellow;
    }

    #avatar-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      width: 100%;
      margin: 5px;
    }

    #avatar {
      height: 100%;
      width: 200px;
      border-radius: 50%;
      border: 2px solid black;
      object-fit: cover;
    }

    #intro-text {
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 40px;
      margin: 10px;
    }

    .box {
      width: 150px;
      height: 300px;
      margin: 5px;
      border: 2px solid orange;
    }

    .img {
      width: 150px;
      height: 150px;

    }

    .text-in-box {
      text-align: center;
      margin: 5px;
      font-weight: bold;
    }

    #headline {
      width: 50%;
      height: 5px;
      background-color: #ef562c;
      border: none;
    }

    #container-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      flex-wrap: wrap;
    }

    hr {
      width: 75%;
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    button {
      margin: 10px;
      font-size: 20px;
      background-color: #FFFFE0;
      border-radius: 5px;
      border: 2px solid rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }


    button:hover {
      background-color: #ef562c;
    }

    button:active {
      transform: scale(0.95);
    }

    .thucdon-info {
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      padding: 7px;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <main>
    <div id="avatar-container">
      <img src="Pictures/ThucDon/ThucDon1.jpeg" id="avatar">
    </div>
    <p id="intro-text">THỰC ĐƠN 1</p>
    <hr id="headline">

    <div id="container-box">
      <div id="box2" class="box">
        <img src="Pictures/MonAn/CaKho.jpg" class="img">
        <p class="text-in-box">Cá kho</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='cakho.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box4" class="box">
        <img src="Pictures/MonAn/DauRan.jpg" class="img">
        <p class="text-in-box">Đậu rán</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='dauran.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box6" class="box">
        <img src="Pictures/MonAn/Nem.jpg" class="img">
        <p class="text-in-box">Nem</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='nem.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box7" class="box">
        <img src="Pictures/MonAn/TomRan.jpg" class="img">
        <p class="text-in-box">Tôm rang</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='tomrang.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box10" class="box">
        <img src="Pictures/MonAn/ThitLon.jpg" class="img">
        <p class="text-in-box">Thịt lợn</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='thitlon.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

    </div>
    <div>
      <p class="thucdon-info">Thực đơn 1 là một lựa chọn tuyệt vời cho những ai muốn thưởng thức hương vị đặc trưng của ẩm thực Việt Nam. Với giá chỉ <strong>100.000VND</strong> bạn sẽ có cơ hội thưởng thức một bữa ăn ngon miệng và đầy đủ dinh dưỡng.</p>

      <p class="thucdon-info"><strong>Cơm tấm</strong>: Một món ăn truyền thống của người Việt, cơm tấm mang lại hương vị đặc biệt từ gạo tấm với hạt cơm dẻo thơm.</p>
      <p class="thucdon-info"><strong>Đỗ xào</strong>: Đậu hũ được xào cùng với các loại rau củ, tạo nên một món ăn vừa bổ dưỡng vừa ngon miệng.</p>
      <p class="thucdon-info"><strong>Cá kho</strong>: Cá được kho cùng với nước mắm, đường, tỏi và ớt, tạo nên một món ăn thơm ngon, đậm đà.</p>
      <p class="thucdon-info"><strong>Đậu rán</strong>: Đậu hũ được chiên giòn, thêm một chút muối tiêu để tăng thêm hương vị.</p>
      <p class="thucdon-info"><strong>Nem rán</strong>: Một món ăn không thể thiếu trong bữa cơm gia đình, nem rán thơm ngon, giòn rụm.</p>
      <p class="thucdon-info"><strong>Tôm rang khế</strong>: Tôm tươi ngon được rang cùng với khế, tạo nên một món ăn chua ngọt hấp dẫn.</p>
      <p class="thucdon-info"><strong>Thịt lợn luộc</strong>: Thịt lợn được luộc chín tới, thêm một chút muối tiêu để tăng thêm hương vị.</p>

      <p class="thucdon-info">Thực đơn này phù hợp cho <strong>4 người</strong> ăn và có thể dùng vào mọi mùa trong năm. Hãy thưởng thức và cảm nhận hương vị tuyệt vời của ẩm thực Việt Nam!</p>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>