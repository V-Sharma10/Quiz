<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel=stylesheet href="login.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>

<body>
  <div class="navb" style="background-color:#00000087;padding:15px;">
  <a href="intro.php"><img class="logo" src="VS-logo_copy.png" width="120" height="100" alt="intro" style="margin-top:10px;margin-left:30px;"></a>
  </div>
  <div class="container">
    <div class="login-box">
        <form method="post" action="validation.php">
        <div class="box"><h2>LogIn</h2>

        <div class="textbook">
          <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="username" placeholder="UserName" class="form-control" required/>
        </div>
        <div class="textbook">
           <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="password" placeholder="Password" class="form-control" required/>
        </div>
        <input type="submit" name="submit" value="Sign In" class="btn btn-info"/>

     </div>
  </form>
    </div>
    <hr>
    <br><br>
    <br>

</div>
</body>

</html>
