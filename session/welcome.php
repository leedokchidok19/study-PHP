<?php
# session_start() 로직 맨 위에 위치
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./login.html');
}
?>
<html>
    <body>
        <?php echo $_SESSION['nickname'];?>님 환영합니다<br />
        <a href="./logout.php">로그아웃</a>    
    </body>
</html>