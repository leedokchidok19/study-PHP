<?php
# 함수 정의
function numbering(){
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i += 1;
    }
}
# 함수 호출
numbering();
?>