<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THỰC ĐƠN</title>
  <style>
    body {
      background-color: #f7f7f7;
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
      font-size: 10px;
      color: #fff;
      display: inline-block;
      text-align: center;
      padding: 0 30px;
      background: #ef562c;
      line-height: 63px;
      border-top-left-radius: 30px;
      border-bottom-right-radius: 30px;
    }

    #box-contain-headline {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 5px;
    }

    #contain-box-menu {
      /*Khung đựng các hộp menu*/
      height: auto;
      margin: 5px;
    }

    #box-menu {
      /*Hộp menu*/
      display: flex;
      border: 3px solid #FF5A09;
      margin: 5px;
      border-radius: 10px;
      background-color: lightyellow;
      margin-top: 10px;
    }

    .img {
      align-self: center;
      width: 150px;
      height: 150px;
      margin: 5px;
      border: 3px solid #ec7f37;
      float: left;
    }

    .menu-info {
      /*khung đựng thông tin*/
      display: flex;
      flex-direction: column;
      /* Căn giữa chữ theo chiều ngang */
      width: calc(100% - 175px);
      /* Chiều dài của div cha sau khi đã trừ đi độ dài ảnh */
    }

    .Name-menu {
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      text-decoration: none;
      text-align: center;
      margin: 5px;
      font-weight: bold;
    }

    .inbox-line {
      width: 50%;
      margin-top: 1px;
      margin-bottom: 1px;
    }

    .Price-menu {
      padding: 1px;
      text-align: center;
      margin: 1px;
      text-decoration: underline;
      color:#ef562c;
    }

    .text-menu {
      margin: 5px;
      font-size: larger;
    }

    .button-contain {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      height: auto;
      margin-top: 20px;
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
        <h1>THỰC ĐƠN HÔM NAY</h1>
      </span>
    </div>

    <hr id="headerline">

    <div id="contain-box-menu">
      <div id="box-menu">
        <img src="Pictures/ThucDon/ThucDon1.jpeg" class="img">
        <div class="menu-info">
          <p class="Name-menu">THỰC ĐƠN 1</p>
          <hr class="inbox-line">
          <p class="Price-menu">Giá : 100.000 VND</p>
          <p class="text-menu">Bao gồm:Cơm tấm, cá kho, thịt lợn, đậu rán, đỗ xào, nem rán, tôm rang khế, canh bí.</p>
          <div class="button-contain">
            <button class="xem-chi-tiet" onclick="window.location.href='thucdon1.php'">
              Xem chi tiết
            </button>
            <button class="order">
              Gọi món
            </button>
          </div>
        </div>
      </div>

      <div id="box-menu">
        <img src="Pictures/ThucDon/ThucDon2.jpeg" class="img">
        <div class="menu-info">
          <p class="Name-menu">THỰC ĐƠN 2</p>
          <hr class="inbox-line">
          <p class="Price-menu">Giá : 120.000 VND</p>
          <p class="text-menu">Bao gồm:Bánh tráng,xa lát.</p>
          <div class="button-contain">
            <button class="xem-chi-tiet" onclick="window.location.href='thucdon2.php'">
              Xem chi tiết
            </button>
            <button class="order">
              Gọi món
            </button>
          </div>
        </div>
      </div>

      <div id="box-menu">
        <img src="Pictures/ThucDon/ThucDon3.jpeg" class="img">
        <div class="menu-info">
          <p class="Name-menu">THỰC ĐƠN 3</p>
          <hr class="inbox-line">
          <p class="Price-menu">Giá : 150.000 VND</p>
          <p class="text-menu">Bao gồm:Thịt kho, đỗ luộc, thập cẩm, bí xào, nước chấm.</p>
          <div class="button-contain">
            <button class="xem-chi-tiet" onclick="window.location.href='thucdon3.php'">
              Xem chi tiết
            </button>
            <button class="order">
              Gọi món
            </button>
          </div>
        </div>
      </div>

      <div id="box-menu">
        <img src="Pictures/ThucDon/ThucDon4.jpg" class="img">
        <div class="menu-info">
          <p class="Name-menu">THỰC ĐƠN 4</p>
          <hr class="inbox-line">
          <p class="Price-menu">Giá : 170.000 VND</p>
          <p class="text-menu">Bao gồm:Xa lát, xoài, cá rán, canh xương.</p>
          <div class="button-contain">
            <button class="xem-chi-tiet" onclick="window.location.href='thucdon4.php'">
              Xem chi tiết
            </button>
            <button class="order">
              Gọi món
            </button>
          </div>
        </div>
      </div>

      <div id="box-menu">
        <img src="Pictures/ThucDon/ThucDon5.jpg" class="img">
        <div class="menu-info">
          <p class="Name-menu">THỰC ĐƠN 5</p>
          <hr class="inbox-line">
          <p class="Price-menu">Giá : 130.000 VND</p>
          <p class="text-menu">Bao gồm:Trứng luộc, cá rán mắm, cải luộc, rau thập cẩm.</p>
          <div class="button-contain">
            <button class="xem-chi-tiet" onclick="window.location.href='thucdon5.php'">
              Xem chi tiết
            </button>
            <button class="order">
              Gọi món
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>