<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}

var_dump(get_members());
# array(3) { [0]=> string(6) "egoing" [1]=> string(5) "k8805" [2]=> string(8) "sorialgi" }

$tmp =  get_members();
echo $tmp[1];
# PHP의 버전이 5.4 이상이라면 아래와 같은 방법으로도 가져올 수 있다
echo get_members()[1];
?>