<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MÓN CANH THỊT</title>
  <style>
    #container-1 {
      display: flex;
      margin: 20px;
      background-color: lightyellow;
      border: 2px solid orange;
      border-radius: 10px;
    }

    #container-2 {
      background-color: lightyellow;
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      text-decoration: none;
      font-size: 25px;
      margin: 20px;
      border: 2px solid orange;
      border-radius: 10px;
    }

    .img {
      height: 200px;
      width: 200px;
      border-radius: 50%;
      border: 2px solid black;
      object-fit: cover;
      margin-left: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    #info-mon-an {
      display: flex;
      flex-direction: column;
      width: calc(100% - 200px);
    }

    #ten-mon-an {
      display: flex;
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      text-decoration: none;
      text-align: center;
      justify-content: center;
      align-items: center;
      font-weight: bold;
      font-size: 30px;
      height: 70px;
    }

    p {
      margin: 0;
      padding: 7px;
    }

    #order-info {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    #prices {
      text-align: center;
      text-decoration: underline;
      color: red;
      font-size: 30px;
    }

    button {
      margin: 10px;
      font-size: 30px;
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

    #count {
      margin: 0 10px;
      font-size: 30px;
    }
  </style>
</head>

<body>
  <main>
    <div id="container-1">
      <img src="Pictures/MonAn/Canh.jpg" class="img">
      <div id="info-mon-an">
        <div id="ten-mon-an">
          <p>Canh thịt</p>
        </div>
        <p id="prices">Giá: 30.000 VNĐ</p>
        <div id="order-info">
          <div id="quantity">
            <button id="decrease">-</button>
            <span id="count">0</span>
            <button id="increase">+</button>
            <script>
              var count = 0;
              var countElement = document.getElementById("count");

              document.getElementById("increase").addEventListener("click", function() {
                count++;
                countElement.innerText = count;
              });

              document.getElementById("decrease").addEventListener("click", function() {
                if (count > 0) {
                  count--;
                  countElement.innerText = count;
                }
              });
            </script>
          </div>

          <div id="order">
            <button>Gọi món</button>
          </div>

        </div>
      </div>
    </div>
    <div id="container-2">
    <p>Canh xương thịt, một món ăn quen thuộc của người Việt, đã trở thành một phần không thể thiếu của bữa cơm hàng ngày. Dưới đây là một số thông tin về canh xương thịt và cách thưởng thức nó tại quán ăn Weeboo Bình Dân.</p><br>
      <p><strong>Nguyên liệu:</strong>
        Canh xương thịt được chế biến từ xương heo, thịt heo, và các loại rau củ. Xương và thịt heo được luộc sơ qua rồi cho vào nồi nước lạnh, đun sôi và nấu chậm cho đến khi thịt mềm và nước dùng đậm đà.</p><br>
      <p><strong>Cách làm:</strong>
        Đầu tiên, xương và thịt heo được luộc sơ qua, sau đó cho vào nồi nước lạnh và đun sôi. Khi nước sôi, hạ lửa và nấu chậm cho đến khi thịt mềm và nước dùng đậm đà. Cuối cùng, cho rau củ vào nấu chung cho đến khi chín tới.</p><br>
      <p><strong>Thưởng thức:</strong>
        Canh xương thịt thường được thưởng thức cùng với cơm trắng nóng hổi. Món ăn này có hương vị đặc trưng của xương heo, thịt heo và các loại rau củ, tạo nên một hương vị độc đáo khó quên. Bạn cũng có thể thử canh xương thịt với mì hoặc bún để tăng thêm hương vị.</p><br>
      <p><strong>Địa điểm:</strong>
        Canh xương thịt có thể được tìm thấy ở hầu hết các quán ăn và nhà hàng trên khắp Việt Nam. Tuy nhiên, nếu bạn đang ở Thái Nguyên, hãy thử ghé quán Weeboo Bình Dân. Quán này nổi tiếng với món canh xương thịt, cùng với không gian thoáng đãng và giá cả phải chăng.
        Hy vọng bạn sẽ thích thú với trải nghiệm ẩm thực tại Weeboo Bình Dân và thưởng thức món canh xương thịt tuyệt vời!</p><br>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>