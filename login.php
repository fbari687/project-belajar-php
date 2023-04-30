<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .bg {
      background-color: #6d9ac4;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100vw;
      height: 100vh;
    }

    .kotak {
      background-color: white;
      width: 45vw;
      height: 50vh;
      display: flex;
      border-radius: 50px 50px;
      overflow-x: hidden;
    }

    .tanda {
      background-color: aqua;
      width: 45%;
    }

    .halamanLogin {
      padding: 35px;
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    .forms {
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 6px 12px;
      border: 1px solid #dedede;
      background-color: white;
      border-radius: 10px 10px;
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      font-size: medium;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      border: 2px solid #dedede;
      outline: none;
    }

    .btnLogin {
      outline: none;
      border: 0px;
      width: 165px;
      height: 50px;
      background-color: #ee6584;
      color: white;
      border-radius: 20px 20px;
      align-self: center;
      cursor: pointer;
      transition: .2s all;
    }

    .btnLogin:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <div class="bg">
    <div class="kotak">
      <div class="tanda"></div>
      <div class="halamanLogin">
        <h1>Login</h1>
        <form action="" method="post" class="forms">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" size="50">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <button type="submit" name="submit" class="btnLogin">LOGIN</button>
        </form>
      </div>
    </div>

  </div>


</body>

</html>