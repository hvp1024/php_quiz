<html>
<head>
</head>
<body>
      <center><h1>
      <b>Quiz Created by :<U> HARIJI VIVEK PANDEY</U></b>
      &emsp;<b>Roll No.-<U>A 02 </U></b>&emsp;Batch:<U>KE055</U><br>
      Under the able guidance of Faculty Shivani Sharma Ma'am for CA 2 of Course: INT301
    </h1></Center><br><br>
  <h1><center><b><u>Question 5 of 5</u></b></center></h1><br><br>
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quiz1');
 ?>
<form action="c5.php" method="post">
<h1>
<?php
        $q = "select * from questions where qid = 5";
        $query = mysqli_query($con, $q);
          while ($rows = mysqli_fetch_array($query))
            echo $rows['question']
 ?>
 <?php
         $q = "select * from answers where ans_id = 5";
         $query = mysqli_query($con, $q);
           while ($rows = mysqli_fetch_array($query)){
  ?><br>
        <input type = "radio" name ="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid']; ?>">
        <?php echo $rows['answer'];}?>
<center><h6>Click on "Next" button given below to continue:</h6></center>
<center><input type="submit" name="submit" value="Next"></center>
</form>
</h1>
</body>
</html>
