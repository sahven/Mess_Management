<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
      <link rel="stylesheet" href="/css/register.css">

  
</head>

<body>
  <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Login, Please!</h2>

  <form class="login-container" method="post" action="/login">

	   {{ csrf_field() }}

    <p><input type="email" placeholder="Email" name="email" required></p>
    <p><input type="password" placeholder="Password" name="password" required></p>
    <p><input type="submit" value="Login"></p>

  </form>

  @include('errors.error')
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
