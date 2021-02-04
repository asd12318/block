<?php
$conn = mysqli_connect('localhost','suyeong0913','q1w2e3r41!','suyeong0913');

$id = $_POST['id'];

$sql = "SELECT id FROM user"

if ($id == $sql){
  echo '<script>alert('이미 존재하는 아이디입니다.');</script>';
}
else {
  echo '<script>alert('사용 가능한 아이디입니다.');</script>';
}
 ?>
<?php 

 $id_check = mq("select * from member where id='$userid'");
 	$id_check = $id_check->fetch_array();
 	if($id_check >= 1){
 		echo "<script>alert('이미 존재하는 아이디입니다.')</script>";
 	}else{
         "<script>alert('사용 가능한 아이디입니다.')</script>"
 ?>
