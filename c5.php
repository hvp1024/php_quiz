Welcome to c5 <br><br>
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
          

          $q = "select * from questions where qid = 5";
          $query = mysqli_query($con, $q);
          $rows = mysqli_fetch_array($query);
          if($selected[5]==$rows['ans_id']){
          header("Location: final.php");
          exit;
          }
          else {
              header("Location: lost.html");
              exit;
          }


                                      }
                              }

?>
