<html>
<body>
<?php
# 반복작업을 중간에 중단시키고 싶다면 break를 사용하면 된다
for($i = 0; $i < 10; $i++){
    if($i === 5){
        break;
    }
    echo "coding everybody{$i}<br />";
}
?>
</body>
</html>