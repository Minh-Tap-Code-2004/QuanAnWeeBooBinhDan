<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <title>CHI TIẾT THỰC ĐƠN 2</title>
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
      <img src="Pictures/ThucDon/ThucDon2.jpeg" id="avatar">
    </div>
    <p id="intro-text">THỰC ĐƠN 2</p>
    <hr id="headline">
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
    </div>

    <div>
      <p class="thucdon-info">Thực đơn 2 là một lựa chọn hoàn hảo cho những ai yêu thích sự đơn giản nhưng không kém phần tinh tế của ẩm thực Việt Nam. Với giá chỉ <strong>120.000VND</strong>, bạn sẽ được thưởng thức một món ăn độc đáo và đầy màu sắc.</p>

      <p class="thucdon-info"><strong>Bánh tráng</strong>: Bánh tráng, một món ăn dân dã, gần gũi với cuộc sống hàng ngày của người Việt, có nguồn gốc từ miền Nam Việt Nam. Bánh tráng được làm từ bột gạo, có độ giòn, thơm và ngon không thể cưỡng lại. Bạn có thể thưởng thức bánh tráng với nhiều loại nước chấm khác nhau để tăng thêm hương vị.
        Bánh tráng đã trở thành một phần không thể thiếu của ẩm thực Việt Nam, từ nó đã sản sinh ra nhiều món ăn ngon, dù là ẩm thực truyền thống hay các món "hot trend" được giới trẻ yêu thích¹. Bánh tráng cũng là nguyên liệu chính để làm nem rán, một trong những món ăn tinh hoa nhất của ẩm thực Việt.
        Ngoài ra, bánh tráng còn được biến tấu thành nhiều món ăn khác như bánh tráng trộn, một món ăn phổ biến của giới trẻ Việt Nam³. Bánh tráng trộn đã trở thành một "hot trend" trong ẩm thực Việt Nam, thu hút sự quan tâm của nhiều người, không chỉ ở Việt Nam mà còn ở cả cộng đồng người Việt ở nước ngoài.
        Với sự đa dạng và phong phú, bánh tráng không chỉ là một món ăn, mà còn là một biểu tượng của ẩm thực Việt Nam, mang đậm dấu ấn văn hóa và lịch sử.</p>

      <p class="thucdon-info">Thực đơn này phù hợp cho <strong>2 người</strong> ăn và có thể dùng vào mọi mùa trong năm. Hãy thưởng thức và cảm nhận hương vị tuyệt vời của ẩm thực Việt Nam qua món bánh tráng!</p>
    </div>
    
  </main>
</body>

</html>

<?php
include("footer.html");
?>