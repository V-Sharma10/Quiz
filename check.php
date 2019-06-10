<?php

  session_start();
  if( !isset($_SESSION['name']) ){
    header("location:login.php");
  }

  $con=mysqli_connect('localhost','root','','quiz');

    if(isset($_POST['submit'])){

      if(!empty($_POST['quizcheck'])){

        $count=count($_POST['quizcheck']);

        echo "Out of 3 questions, you have attempted ".$count." questions.";
        $result=0;
        $i=3;
        $selected=$_POST['quizcheck'];

          $q="select * from questions";
          $query=mysqli_query($con,$q);

          while($rows=mysqli_fetch_array($query)){

          $checked= $rows['ans_id'] == $selected[$i];
          if($checked)
          {
            $result++;
          }
          $i++;
        }

        echo "<br><br> your score $result.";
      }


    }




        $name=$_SESSION['name'];
        $finalresult="insert into user (username,totalques,answercorrect) values ('$name','5','$result')";
        $queryresult=mysqli_query($con,$finalresult);





 ?>
