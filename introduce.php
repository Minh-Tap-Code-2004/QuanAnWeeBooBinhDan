<?php
include("header.html");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIỚI THIỆU</title>
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

    hr {
      width: 50%;
      height: 5px;
      background-color: #ef562c;
      border: none;
    }

    .body-p {
      font-family: "Roboto", "HelveticaNeue", "Helvetica Neue", sans-serif;
      font-size: 20px;
      margin: 10px;
      padding: 10px;
    }
    
  </style>
</head>

<body>
  <main>
    <div id="avatar-container">
      <img src="Pictures/Intoduction-Avatar.jpg" id="avatar">
    </div>
    <p id="intro-text">Giới thiệu</p>
    <hr>
    <div id="p-body">
      <p class="body-p">
        Quán ăn "Weeboo Bình Dân" là một điểm đến lý tưởng cho sinh viên. Nằm ở trung tâm thành phố, quán có không gian thoáng đãng, yên tĩnh, thích hợp cho việc học nhóm hoặc thư giãn sau những giờ học căng thẳng.
        Giữa lòng thành phố, “Weeboo Bình Dân” như một nơi trú ẩn, nơi sinh viên có thể tạm gác lại những lo toan của cuộc sống, tận hưởng không gian yên bình và thưởng thức những món ăn ngon.
      </p>
      <p class="body-p">
        Quán cung cấp một loạt các món ăn Việt Nam truyền thống như phở, bún chả, cơm rang... với giá cả phải chăng, phù hợp với túi tiền của sinh viên. Đặc biệt, quán còn có thực đơn đa dạng với các món chay cho những bạn theo chế độ ăn kiêng hoặc ăn chay.
        Quán không chỉ thu hút khách bằng chất lượng món ăn mà còn bởi không gian độc đáo. Tường quán được trang trí bằng những bức tranh anime đầy màu sắc, tạo nên một không gian vừa quen vừa lạ, vừa hiện đại vừa truyền thống.
      </p>
      <p class="body-p">
        "Weeboo Bình Dân" tự hào vì đã nhận được nhiều chứng nhận an toàn thực phẩm từ các cơ quan chức năng. Quán luôn đảm bảo nguồn gốc rõ ràng của nguyên liệu và tuân thủ nghiêm ngặt quy trình chế biến, từ khâu sơ chế đến khi món ăn được mang ra cho khách.
        “Weeboo Bình Dân” còn tổ chức nhiều sự kiện thú vị như đêm nhạc acoustic, buổi chiếu phim anime… tạo nên một cộng đồng văn hóa chung cho các bạn trẻ yêu thích ẩm thực và văn hóa Nhật Bản.
      </p>
      <p class="body-p">
        Đội ngũ nhân viên tại quán luôn tận tình và chu đáo, sẵn sàng phục vụ bạn với niềm vui và sự nhiệt tình. Hãy đến với "Weeboo Bình Dân" để trải nghiệm một không gian ấm cúng, thân thiện và thưởng thức những món ăn ngon miệng, bổ dưỡng!
        Quán còn có dịch vụ giao hàng tận nơi, giúp sinh viên có thể thưởng thức những món ăn ngon mà không cần phải ra khỏi nhà. Với ứng dụng đặt hàng online tiện lợi, chỉ cần vài cú click, bạn đã có thể có một bữa ăn ngon lành.
      </p>
      <p class="body-p">
        “Weeboo Bình Dân” không chỉ là một quán ăn, mà còn là một nơi gặp gỡ, giao lưu và chia sẻ niềm vui. Hãy đến với “Weeboo Bình Dân”, nơi ẩm thực và văn hóa gặp gỡ!
      </p>
    </div>
  </main>
</body>

</html>

<?php
include("footer.html");
?>