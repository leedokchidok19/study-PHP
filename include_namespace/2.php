<?php
# include
# include_once - 파일을 로드 할 때 단 한번만 로드
# require
# require_once - 파일을 로드 할 때 단 한번만 로드
# include와 require의 차이점은 존재하지 않는 파일의 로드를 시도했을 때
# include - warning / require - fatal error
include 'greeting.php';
echo welcome();
?>