<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>CHI TIẾT THỰC ĐƠN 5</title>
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
      <img src="Pictures/ThucDon/ThucDon5.jpg" id="avatar">
    </div>
    <p id="intro-text">THỰC ĐƠN 5</p>
    <hr id="headline">
    <div id="container-box">
      <div id="box12" class="box">
        <img src="Pictures/MonAn/CaRan.jpg" class="img">
        <p class="text-in-box">Cá rán mắm</p>
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

      <div id="box15" class="box">
        <img src="Pictures/MonAn/CaiLuoc.jpg" class="img">
        <p class="text-in-box">Cải luộc</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='cailuoc.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>
    </div>

    <div>

      <p class="thucdon-info">Thực đơn 5 là một lựa chọn hoàn hảo cho những ai muốn thưởng thức sự đa dạng của ẩm thực Việt Nam. Với giá chỉ <strong>130.000VND</strong>, bạn sẽ được thưởng thức một bữa ăn ngon miệng và đầy đủ dinh dưỡng.</p>

      <p class="thucdon-info"><strong>Rau thập cẩm</strong>: Món rau thập cẩm với nhiều loại rau tươi ngon, kết hợp với sốt mayonnaise hoặc sốt dầu giấm, tạo nên một món ăn vừa ngon miệng vừa bổ dưỡng.</p>
      <p class="thucdon-info"><strong>Trứng luộc</strong>: Một món ăn tươi mát, giúp cân bằng hương vị cho bữa ăn. Trứng luộc, vị ngọt tự nhiên, giúp kích thích vị giác và làm dậy lên hương vị của các món ăn khác.</p>
      <p class="thucdon-info"><strong>Cá rán mắm</strong>: Cá tươi ngon được chiên giòn, thêm một chút muối tiêu để tăng thêm hương vị. Món ăn này không chỉ ngon miệng mà còn rất bổ dưỡng.</p>
      <p class="thucdon-info"><strong>Cải luộc</strong>: Cải xanh được luộc chín tới, thêm một chút muối tiêu để tăng thêm hương vị. Món ăn này không chỉ giúp bạn bổ sung vitamin và khoáng chất mà còn mang lại hương vị thơm ngon khó cưỡng.</p>

      <p class="thucdon-info">Thực đơn này phù hợp cho <strong>4 người</strong> ăn và có thể dùng vào mọi mùa trong năm. Hãy thưởng thức và cảm nhận hương vị tuyệt vời của ẩm thực Việt Nam!</p>

    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>