<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  
      <link rel="stylesheet" href="/css/register.css">

  
</head>

<body>
  <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Register, Please!</h2>

  <form class="login-container" method="post" action="/registration/registercaterer">

	{{ csrf_field() }}

    <p><input type="text" placeholder="Caterer Name" name="caterername" required></p>
    <p><input type="email" placeholder="Email" name="emailid" required></p>
    <p><input type="password" placeholder="Password" name="password" required></p>
    <p><input type="password" placeholder="Password Confirmation" name="password_confirmation" required></p>
    <p><input type="submit" value="Register"></p>

  </form>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
