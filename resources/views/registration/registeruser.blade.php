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

  <form class="login-container" method="post" action="/registration/registeruser">

	{{ csrf_field() }}

    <p><input type="text" placeholder="First Name" name="firstname" required></p>
    <p><input type="text" placeholder="Last Name" name="lastname" required></p>
    <p><input type="number" placeholder="Roll Number" name="rollno" required></p>
    <p><input type="email" placeholder="Email" name="emailid" required></p>
    <p><input type="number" placeholder="Phone Number" name="phone" required></p>
    <p><input type="date" placeholder="Date Of Birth" name="dob" required></p>
    <p><input type="number" placeholder="Year Of Study" name="year" required></p>
    <p><input type="text" placeholder="Course" name="course" required></p>
    <p><input type="password" placeholder="Password" name="password" required></p>
    <p><input type="password" placeholder="Password Confirmation" name="password_confirmation" required></p>
    <p><input type="submit" value="Register"></p>

  </form>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
