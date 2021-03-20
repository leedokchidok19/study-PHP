<html>
<body>
<?php
# 변수에 담긴 데이터 형을 검사하고 변경하기
$a = 100;
echo gettype($a);
settype($a, 'double');# 데이터 형식 변경
echo '<br />';
echo gettype($a);# 데이터 형식 출력
?>
</body>
</html>