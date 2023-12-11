<?php
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIÊN HỆ</title>
  <style>
    body {
      background-color: #f7f7f7;
    }

    main {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    }

    #map {
      width: 95%;
      height: 300px;
      margin: 10px;
    }

    iframe {
      width: 100%;
      height: 100%;
    }

    #info-input {
      width: 60%;
      height: auto;
      margin-top: 10px;
      margin-bottom: 10px;
      display: flex;
      flex-direction: column;
      border: 3px solid #FF5A09;
      border-radius: 10px;
      background-color: lightyellow;
    }

    #info-text {
      padding: 10px;
    }

    #contact-big-text {
      width: 100%;
      font-size: xx-large;
      font-weight: bold;
      text-align: center;
      margin: 0px;
    }

    #contact-small-text {
      margin: 0px;
      font-size: large;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 100%;
      align-items: center;
      height: auto;
      font-family: Arial, sans-serif;
    }

    input,
    textarea {
      width: 70%;
      margin: 10px;
      padding: 10px;
      font-size: 16px;
    }

    button {
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
      margin: 20px;
    }

    @media screen and (max-width: 600px) {
      #info-input {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <main>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118727.02084731444!2d105.72108707485727!3d21.577357335434225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313526e41a2f48ff%3A0x9af085049fb0466f!2zVHAuIFRow6FpIE5ndXnDqm4sIFRow6FpIE5ndXnDqm4sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1701833414343!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <div id="info-input">
      <div id="info-text">
        <p id="contact-big-text">Liên hệ với chúng tôi</p><br>
        <p id="contact-small-text">Để liên hệ và nhận các thông in khuyến mại sớm nhất, xin vui lòng điền đầy đủ thông tin của bạn vào form dưới đây. Chúng tôi sẽ liên lạc lại với bạn trong thời gian sớm nhất</p>
      </div>

      <div id="input-table">
        <form>
          <input type="text" placeholder="Họ tên" required>
          <input type="tel" placeholder="Số điện thoại" required>
          <input type="email" placeholder="Email" required>
          <textarea rows="10" placeholder="Nội dung" required></textarea>
          <button type="submit">Gửi</button>
        </form>
      </div>
    </div>
  </main>


</body>

</html>