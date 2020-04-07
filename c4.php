Welcome to c4 <br><br>
<?php
$con = mysqli_connect('localhost','root');
if($con){
  echo "Connection to database was Successful";
}
mysqli_select_db($con, 'quiz1');
 ?>
<br>
<br>
<!--Processing begins here-->
<?php
if(isset($_POST['submit'])){
      if(!empty($_POST['quizcheck'])){
          $selected=$_POST['quizcheck'];


          $q = "select * from questions where qid = 4";
          $query = mysqli_query($con, $q);
          $rows = mysqli_fetch_array($query);
          if($selected[4]==$rows['ans_id']){
          header("Location: q5.php");
          exit;
          }
          else {
              header("Location: lost.html");
              exit;
          }

                                      }
                              }

?>
