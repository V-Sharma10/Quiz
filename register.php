
<<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel=stylesheet href="register.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>

    <div class="navb">
    <a href="intro.php"><img class="d-inline-block align-top logo" src="VS-logo_copy.png" width="170" height="100" alt=""></a>

        <a href="login.php" class="btn btn-info">LogIn</a>
</div>
<div class="container">
<div class="info-box">
    <form action="connection.php" method="post">

      <div class="box"><h1 style="border-bottom: 6px solid #4caf50;width:160px;padding-bottom:15px;">Register</h1>

      <div class="textbook">
        <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" name="username" placeholder="UserName" class="form-control" required>
      </div>
      <div class="textbook">
         <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" name="password" placeholder="Password" class="form-control" required>
      </div>
      <div class="textbook">
        <i class="fa fa-mobile" aria-hidden="true"></i>
      <input type="text" name="mobile" placeholder="Mobile Number" class="form-control" required>
      </div>
      <div class="textbook">
        <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" name="email" placeholder="Email Id" class="form-control">
      </div>
      <div class="textbook2">
      <input type="checkbox" name="confirmation" id="checkme" value=""><p class=confirm>I accept all the terms and conditions.<br></p>
      </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" id="submit" disabled="disabled" value="Sign Up" class="btn btn-success"/>

   </div>
   <script>
      var checker=document.getElementById('checkme');
      var snd=document.getElementById('submit');
      checker.onchange=function(){
        if(this.checked){
          snd.disabled=false;
        }
        else{
          snd.disabled=true;
        }
      }

   </script>

    </form>


</div>
</div>
<footer>
</footer>

  </body>
</html>
