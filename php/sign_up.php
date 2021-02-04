<?php
    $conn = mysqli_connect('localhost','suyeong0913','q1w2e3r41!','suyeong0913');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];

    $sql = "INSERT INTO `user`(`id`, `password`, `email`, `birth`) VALUES ('$id','$password','$email','$birth')";
    $res = $conn->query($sql);

?>
<script>
    alert('회원가입이 완료되었습니다!! 로그인 해주세요!!');
</script>
<?php
    header("location: ../html/login.html");
  ?>
