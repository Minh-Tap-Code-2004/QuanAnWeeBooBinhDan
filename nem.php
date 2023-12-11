<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MÓN NEM RÁN</title>
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
      <img src="Pictures/MonAn/Nem.jpg" class="img">
      <div id="info-mon-an">
        <div id="ten-mon-an">
          <p>Nem rán</p>
        </div>
        <p id="prices">Giá: 15.000 VNĐ</p>
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
      <p>Nem rán, một món ăn truyền thống của Việt Nam, đã trở thành một món ăn yêu thích của nhiều người. Dưới đây là một số thông tin về nem rán và cách thưởng thức nó tại quán ăn Weeboo Bình Dân.</p><br>
      <p><strong>Nguyên liệu:</strong>
        Nem rán được chế biến từ thịt lợn, tôm, nấm, bún tươi, trứng và các loại rau sống. Tất cả các nguyên liệu được xay nhuyễn và trộn đều, sau đó được gói trong bánh tráng và chiên trong dầu nóng cho đến khi vàng giòn.</p><br>
      <p><strong>Cách làm:</strong>
        Đầu tiên, tất cả các nguyên liệu được xay nhuyễn và trộn đều. Sau đó, hỗn hợp được gói trong bánh tráng. Khi nem đã được gói xong, chúng sẽ được chiên trong dầu nóng. Khi nem đã vàng giòn, chúng sẽ được vớt ra và để ráo dầu.</p><br>
      <p><strong>Thưởng thức:</strong>
        Nem rán thường được thưởng thức cùng với nước mắm pha chua ngọt hoặc tương ớt. Món ăn này có hương vị đặc trưng của thịt lợn, tôm, nấm và các loại rau sống, tạo nên một hương vị độc đáo khó quên. Bạn cũng có thể thử nem rán với rau sống và bún tươi để tăng thêm hương vị.</p><br>
      <p><strong>Địa điểm:</strong>
        Nem rán có thể được tìm thấy ở hầu hết các quán ăn và nhà hàng trên khắp Việt Nam. Tuy nhiên, nếu bạn đang ở Thái Nguyên, hãy thử ghé quán Weeboo Bình Dân. Quán này nổi tiếng với món nem rán, cùng với không gian thoáng đãng và giá cả phải chăng.
        Hy vọng bạn sẽ thích thú với trải nghiệm ẩm thực tại Weeboo Bình Dân và thưởng thức món nem rán tuyệt vời!</p><br>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>