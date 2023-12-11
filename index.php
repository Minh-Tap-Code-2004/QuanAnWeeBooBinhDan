<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANG CHỦ</title>
  <style>
    body {
      background-color: lightyellow;
    }

    #headerline {
      /* Gạch lớn dòng */
      width: 50%;
      height: 5px;
      background-color: #ef562c;
      border: none;
    }

    #headline {
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      font-weight: 700;
      font-size: 12px;
      color: #fff;
      display: inline-block;
      text-align: center;
      padding: 0 30px;
      background: #ef562c;
      line-height: 63px;
      border-top-left-radius: 30px;
      border-bottom-right-radius: 30px;
    }

    #textunder {
      text-align: center;
      font-size: large;
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

    hr {
      width: 75%;
    }

    #container-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      flex-wrap: wrap;
    }

    #box-contain-headline {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 5px;
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
  </style>
</head>

<body>
  <main>
    <div id="box-contain-headline">
      <span id="headline">
        <h1>MÓN ĂN NỔI BẬT</h1>
      </span>
    </div>

    <hr id="headerline">
    <p id="textunder">Cơm bình dân,thấp cẩm,các món ăn cho sinh viên</p>
    <div id="container-box">
      <div id="box1" class="box">
        <img src="Pictures/MonAn/BanhDa.jpg" class="img">
        <p class="text-in-box">Bánh tráng</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='banhtrang.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box2" class="box">
        <img src="Pictures/MonAn/CaKho.jpg" class="img">
        <p class="text-in-box">Cá kho</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='cakho.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box3" class="box">
        <img src="Pictures/MonAn/Canh.jpg" class="img">
        <p class="text-in-box">Canh thịt</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='canhthit.php'">Xem chi tiết</button>
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

      <div id="box5" class="box">
        <img src="Pictures/MonAn/DoLuoc.jpg" class="img">
        <p class="text-in-box">Đỗ luộc</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='doluoc.php'">Xem chi tiết</button>
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

      <div id="box8" class="box">
        <img src="Pictures/MonAn/ThapCAm.jpg" class="img">
        <p class="text-in-box">Thập cẩm</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='thapcam.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box9" class="box">
        <img src="Pictures/MonAn/ThitKho.jpg" class="img">
        <p class="text-in-box">Thịt kho</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='thitkho.php'">Xem chi tiết</button>
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

      <div id="box11" class="box">
        <img src="Pictures/MonAn/XaLat.jpg" class="img">
        <p class="text-in-box">Xa lát</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='xalat.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box12" class="box">
        <img src="Pictures/MonAn/CaRan.jpg" class="img">
        <p class="text-in-box">Cá rán</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='caran.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box13" class="box">
        <img src="Pictures/MonAn/TrungLuoc.jpg" class="img">
        <p class="text-in-box">Trứng luộc</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='trungluoc.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div id="box14" class="box">
        <img src="Pictures/MonAn/RauThapCam.jpg" class="img">
        <p class="text-in-box">Rau thập cẩm</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='rauthapcam.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>