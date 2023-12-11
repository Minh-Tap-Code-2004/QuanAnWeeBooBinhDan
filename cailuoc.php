<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MÓN CẢI LUỘC</title>
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
      <img src="Pictures/MonAn/CaiLuoc.jpg" class="img">
      <div id="info-mon-an">
        <div id="ten-mon-an">
          <p>Cải luộc</p>
        </div>
        <p id="prices">Giá: 3.000 VNĐ</p>
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
    <p>Cải luộc, một món rau đơn giản nhưng bổ dưỡng, là một lựa chọn tốt cho những người muốn ăn chay hoặc giảm cân. Dưới đây là một số thông tin về cải luộc và cách thưởng thức nó tại quán ăn Weeboo Bình Dân.</p><br>
      <p><strong>Nguyên liệu:</strong>
        Cải luộc được làm từ rau cải tươi, gừng, muối, bột canh và bột ngọt. Rau cải được rửa sạch, cắt bỏ phần gốc và bẹ già, sau đó được luộc trong nước sôi có gừng cho đến khi rau chín mềm và xanh mướt.</p><br>
      <p><strong>Cách làm:</strong>
        Đầu tiên, rau cải được sơ chế, ngâm trong nước muối loãng và rửa sạch. Gừng được nạo vỏ, đập dập hoặc thái lát. Sau đó, cho nước vào nồi, thả gừng vào và đun sôi. Khi nước sôi, cho rau cải vào luộc cùng với một ít muối, bột canh và bột ngọt. Để rau cải luộc xanh, không nên đậy nắp nồi. Thời gian luộc rau cải khoảng 4-5 phút tính từ lúc nước sôi trở lại. Khi rau cải chín, vớt ra đĩa, để ráo nước.</p><br>
      <p><strong>Thưởng thức:</strong>
        Cải luộc thường được thưởng thức cùng với nước chấm như kho quẹt, xì dầu tỏi ớt, nước mắm tỏi ớt hoặc nước mắm dầm trứng gà luộc. Món ăn này có hương vị thanh đạm, giòn ngọt của rau cải và thơm nồng của gừng, rất tốt cho sức khỏe và tiêu hóa. Bạn cũng có thể thử cải luộc với cơm, canh hoặc món chay khác để tăng thêm độ phong phú cho bữa ăn.</p><br>
      <p><strong>Địa điểm:</strong>
        Cải luộc có thể được tìm thấy ở hầu hết các quán ăn và nhà hàng trên khắp Việt Nam. Tuy nhiên, nếu bạn đang ở Thái Nguyên, hãy thử ghé quán Weeboo Bình Dân. Quán này nổi tiếng với món cải luộc chấm trứng gà luộc, cùng với không gian thoáng đãng và giá cả phải chăng.
        Hy vọng bạn sẽ thích thú với trải nghiệm ẩm thực tại Weeboo Bình Dân và thưởng thức món cải luộc ngon lành!</p><br>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>