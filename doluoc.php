<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MÓN ĐỖ LUỘC</title>
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
      <img src="Pictures/MonAn/DoLuoc.jpg" class="img">
      <div id="info-mon-an">
        <div id="ten-mon-an">
          <p>Đỗ luộc</p>
        </div>
        <p id="prices">Giá: 5.000 VNĐ</p>
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
    <p>Đỗ luộc, một món ăn dân dã của người Việt, đã trở thành một món ăn yêu thích của nhiều người. Dưới đây là một số thông tin về đỗ luộc và cách thưởng thức nó tại quán ăn Weeboo Bình Dân.</p><br>
      <p><strong>Nguyên liệu:</strong>
        Đỗ luộc được chế biến từ đỗ tươi, nước và muối. Đỗ được ngâm trong nước cho đến khi nở ra, sau đó được luộc trong nước sôi và muối cho đến khi chín mềm.</p><br>
      <p><strong>Cách làm:</strong>
        Đầu tiên, đỗ được ngâm trong nước cho đến khi nở ra. Sau đó, đỗ được luộc trong nước sôi và muối. Khi đỗ đã chín mềm, nó sẽ được vớt ra và để ráo nước. Cuối cùng, đỗ có thể được ăn kèm với đường hoặc muối.</p><br>
      <p><strong>Thưởng thức:</strong>
        Đỗ luộc thường được thưởng thức như một món ăn nhẹ hoặc như một món ăn phụ trong bữa cơm. Món ăn này có hương vị đặc trưng của đỗ luộc, tạo nên một hương vị độc đáo khó quên. Bạn cũng có thể thử đỗ luộc với đường hoặc muối để tăng thêm hương vị.</p><br>
      <p><strong>Địa điểm:</strong>
        Đỗ luộc có thể được tìm thấy ở hầu hết các quán ăn và nhà hàng trên khắp Việt Nam. Tuy nhiên, nếu bạn đang ở Thái Nguyên, hãy thử ghé quán Weeboo Bình Dân. Quán này nổi tiếng với món đỗ luộc, cùng với không gian thoáng đãng và giá cả phải chăng.
        Hy vọng bạn sẽ thích thú với trải nghiệm ẩm thực tại Weeboo Bình Dân và thưởng thức món đỗ luộc tuyệt vời!</p><br>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>