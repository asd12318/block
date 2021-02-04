<?php
    session_start();

    // mysql 접속
    $conn = mysqli_connect('localhost','suyeong0913','q1w2e3r41!','suyeong0913');

    // 값 가져오기
    $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
    $pw = mysqli_real_escape_string($conn, $_REQUEST['password']);

    $sql = "
        SELECT * FROM user WHERE id='$id'
    ";

    $result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($result);
    if($id === 'admin' && $pw === '1234'){
        ?>
        <script>
            alert('Hi Administrator!');
        </script>
        <?php
        header("Location: ../admin/admin.php?id=".$id);
    }else{
        if($result === null){

            ?>
            <script>
                alert('Wrong! Error!');
                history.back();
            </script>
            <?php
            }else if($result != null){
                if($result['password'] == $pw){
                    ?>
                    <script>
                        alert('Login Success!');
                    <?php
                        $_SESSION['id'] = $result['id'];
                        header("location: ./index.php?id=".$id);
                    ?>
                    </script>
                    <?php
                }else{
                    ?>
                <script>
                    alert('Wrong! Error!');
                    history.back();
                </script>
                <?php
                }
            }
    }
?>
