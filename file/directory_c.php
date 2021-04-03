<?php
# 디렉토리 생성하는 내장함수
# 첫번째 : 디렉토리의 이름
# 두번째 : 디렉토리의 권한을 지정
# 세번째 : true를 지정하면 첫번째 인자로 주어진 경로가 여러개의 디렉토리로 이루어져 있을 때 해당 디렉토리를 한번에 생성하는 기능을 제공한다 
mkdir("1/2/3/4", 0700, true);
?>