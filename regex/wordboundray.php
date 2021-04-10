<?php
/*
\b는 단어의 경계를 의미한다.
그렇기 때문에 \b로 감싸진 web은 web이라는 독립된 단어를 의미한다.
website는 web과 site가 결합된 단어이기 때문에 이 조건에 해당하지 않는다.
*/
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
 
if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>