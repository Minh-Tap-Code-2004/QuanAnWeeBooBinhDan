<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>CHI TIẾT THỰC ĐƠN 4</title>
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
      <img src="Pictures/ThucDon/ThucDon4.jpg" id="avatar">
    </div>
    <p id="intro-text">THỰC ĐƠN 4</p>
    <hr id="headline">
    <div id="container-box">
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

      <div id="box3" class="box">
        <img src="Pictures/MonAn/Canh.jpg" class="img">
        <p class="text-in-box">Canh thịt</p>
        <hr>
        <div class="button-container">
          <button class="Xem-chi-tiet" onclick="window.location.href='canhthit.php'">Xem chi tiết</button>
          <button class="Order">Gọi món</button>
        </div>
      </div>

      <div>
        <p class="thucdon-info">Thực đơn 4 là một lựa chọn hoàn hảo cho những ai muốn thưởng thức sự đa dạng của ẩm thực Việt Nam. Với giá chỉ <strong>170.000VND</strong>, bạn sẽ được thưởng thức một bữa ăn ngon miệng và đầy đủ dinh dưỡng.</p>

        <p class="thucdon-info"><strong>Xà lát</strong>: Món xà lát với nhiều loại rau tươi ngon, kết hợp với sốt mayonnaise hoặc sốt dầu giấm, tạo nên một món ăn vừa ngon miệng vừa bổ dưỡng.</p>
        <p class="thucdon-info"><strong>Xoài</strong>: Một món ăn tươi mát, giúp cân bằng hương vị cho bữa ăn. Xoài tươi ngon, vị chua ngọt tự nhiên, giúp kích thích vị giác và làm dậy lên hương vị của các món ăn khác.</p>
        <p class="thucdon-info"><strong>Cá rán</strong>: Cá tươi ngon được chiên giòn, thêm một chút muối tiêu để tăng thêm hương vị. Món ăn này không chỉ ngon miệng mà còn rất bổ dưỡng.</p>
        <p class="thucdon-info"><strong>Canh xương</strong>: Canh xương nấu chín tới với nước dùng đậm đà, thêm một chút rau củ để tăng thêm hương vị. Món ăn này không chỉ giúp bạn bổ sung vitamin và khoáng chất mà còn mang lại hương vị thơm ngon khó cưỡng.</p>

        <p class="thucdon-info">Thực đơn này phù hợp cho <strong>4 người</strong> ăn và có thể dùng vào mọi mùa trong năm. Hãy thưởng thức và cảm nhận hương vị tuyệt vời của ẩm thực Việt Nam!</p>
      </div>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>