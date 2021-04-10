<?php
# php 글자 찾기, i는 대소문자 구분 안 함
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>