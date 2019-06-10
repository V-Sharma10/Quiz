<?php

  session_start();
  if( !isset($_SESSION['name']) ){
    header("location:login.php");
  }

  $con=mysqli_connect('localhost','root','','quiz');

 ?>



<!doctype html>
<html>
<head>
  <meta charset="utf-8">
<title>Quiz_page</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


    <div class="navb" style="background-color:#00000087;padding:15px;">
    <a href="intro.php"><img class="logo" src="VS-logo_copy.png" width="120" height="100" alt="intro" style="margin-top:10px;margin-left:30px;"></a>
    </div>
    <div class="col-lg-8 m-auto d-block">
    <br>  <h3 class="text-center"> WELCOME <?php echo $_SESSION['name'];?></h3><br>
    <p class="text-center"> You have to select one out of the four options. </p><br>
    <p class="text-center"> BEST OF LUCK. :) </p>

    <br><br>
    <form action="check.php" method="post">

    <?php
    for($i=3,$j=1;$i<=8;$i++,$j++){

    $q="select * from questions where qid=$i";
    $query=mysqli_query($con,$q);

    while($rows=mysqli_fetch_array($query)){
     ?>
     <br>
        <div class="card">
          <h5 class="card-header">  <?php  echo $j.". ".$rows['questions'];   ?> </h5>

          <?php

          $q="select * from answers where ans_id=$i";
          $query=mysqli_query($con,$q);

          while($rows=mysqli_fetch_array($query)){
          ?>
          <div class="card-body">

           <input type="radio" name="quizcheck[<?php echo $rows['ans_id'] ;?>]" value="<?php echo $rows['aid']; ?>" >
            <?php echo $rows['answer'] ?>
          </div>
          <hr>




<?php
  }
}
}
 ?>
 <br><br><br>
<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">


  </form>

  </div> </div>
<br><br><br><br><br>

<!--><footer>
  <a class="btn" href="#">
    <i class="fa fa-facebook" aria-hidden="true"></i>
  </a>
  <a class="btn" href="#">
    <i class="fa fa-twitter" aria-hidden="true"></i>
  </a>
  <a class="btn"  href="#">
    <i class="fa fa-google" aria-hidden="true"></i>
  </a>
  <a class="btn" href="#">
    <i class="fa fa-instagram" aria-hidden="true"></i>
  </a>
  <a class="btn" href="#">
    <i class="fa fa-youtube" aria-hidden="true"></i>
  </a>
</footer><!-->

</body>
</html>
