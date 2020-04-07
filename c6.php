<html>
<head>
</head>
<body>
      <center><h1>
      <b>Quiz Created by :<U> HARIJI VIVEK PANDEY</U></b>
      &emsp;<b>Roll No.-<U>A 02 </U></b>&emsp;Batch:<U>KE055</U><br>
      Under the able guidance of Faculty Shivani Sharma Ma'am for CA 2 of Course: INT301
    </h1></Center><br><br>
  <h1><center><b><u>WINNER'S LIST FROM OUR MYSQL DATABASE RECORD:</u></b></center></h1><br>
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quiz1');
 ?>

<h1><center>



<!--Processing begins here-->
<?php
if(isset($_POST['submit'])){
      if(!empty($_POST['name'])){
          $winner=$_POST['name'];

          $winner_entry = "insert into winners(winner) values ('$winner')";
          $winner_record = mysqli_query($con, $winner_entry);
            $fetch_winners = "select * from winners";
            $request_winners = mysqli_query($con, $fetch_winners);
            while($rows=mysqli_fetch_array($request_winners)){
              ?><br><?php
              echo $rows['winner'];
            }


                                          }
                              }

?>
</center></h1>
</body>
</html>
