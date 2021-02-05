

<?php
$conn = mysqli_connect('localhost','suyeong0913','q1w2e3r41!','suyeong0913');

$id = $_POST['id'];
$id_check = "SELECT * FORM user WHERE id='$id'";

mysqli_query($conn,$id_check)
$id_check = mysqli_fetch_array($id_check);


 	if($id_check >= 1){
 		echo "이미 존재하는 아이디입니다.";
 	}else{
    echo "사용 가능한 아이디입니다.";
	 }

?>
