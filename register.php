<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>btnToRegister Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="bg">
    <div class="kotak">
      <div class="halamanLogin">
        <h1>Register</h1>
        <form action="" method="post" class="forms">
          <label for="fullName">Full Name</label>
          <input type="text" name="fullName" id="fullName" size="50">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" size="50">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <label for="confPassword">Confirm Password</label>
          <input type="password" name="confPassword" id="confPassword">
          <button type="submit" name="submit" class="btn loginBtn">Register</button>
        </form>
      </div>
      <div class="tanda">
        <h1 class="judulTanda">Already Have an Account?</h1>
        <a href="login.php"><button class="btn btnToRegister">Login</button></a>
      </div>
    </div>

  </div>


</body>

</html>