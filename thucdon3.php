<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>CHI TIẾT THỰC ĐƠN 3</title>
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
      <img src="Pictures/ThucDon/ThucDon3.jpeg" id="avatar">
    </div>
    <p id="intro-text">THỰC ĐƠN 3</p>
    <hr id="headline">
    <div id="container-box">

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

      <div id="box5" class="box">
        <img src="Pictures/MonAn/DoLuoc.jpg" class="img">
        <p class="text-in-box">Đỗ luộc</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='doluoc.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>
      <div>
        <p class="thucdon-info">Thực đơn 3 là một lựa chọn hoàn hảo cho những ai muốn thưởng thức sự đa dạng của ẩm thực Việt Nam. Với giá chỉ <strong>150.000VND</strong>, bạn sẽ được thưởng thức một bữa ăn ngon miệng và đầy đủ dinh dưỡng.</p>

        <p class="thucdon-info"><strong>Thập cẩm chả cá</strong>: Một món ăn phong phú với sự kết hợp của nhiều loại hải sản khác nhau như cá, tôm, mực... được chế biến thành chả cá, mang lại hương vị độc đáo và thú vị.</p>
        <p class="thucdon-info"><strong>Thịt kho</strong>: Thịt heo được kho cùng với nước mắm, đường, tỏi và ớt, tạo nên một món ăn thơm ngon, đậm đà, rất phù hợp với cơm trắng.</p>
        <p class="thucdon-info"><strong>Đỗ luộc</strong>: Đậu hũ được luộc chín tới, thêm một chút muối tiêu để tăng thêm hương vị. Món ăn này không chỉ ngon miệng mà còn rất bổ dưỡng.</p>
        <p class="thucdon-info"><strong>Bí xào</strong>: Bí ngòi tươi ngon được xào cùng với tỏi và hành, tạo nên món ăn vừa ngon miệng vừa bổ dưỡng. Món ăn này không chỉ giúp bạn bổ sung vitamin và khoáng chất mà còn mang lại hương vị thơm ngon khó cưỡng.</p>

        <p class="thucdon-info">Thực đơn này phù hợp cho <strong>4 người</strong> ăn và có thể dùng vào mọi mùa trong năm. Hãy thưởng thức và cảm nhận hương vị tuyệt vời của ẩm thực Việt Nam!</p>
      </div>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>