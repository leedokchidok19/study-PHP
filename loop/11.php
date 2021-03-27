<html>
<body>
<?php
# 실행을 즉시 중단 하면서 반복은 지속한다
for($i = 0; $i < 10; $i++){
    if($i === 5){
        continue;
    }
    echo "coding everybody{$i}<br />";
}
?>
</body>
</html>