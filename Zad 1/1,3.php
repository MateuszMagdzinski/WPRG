<?php
function censorWords($sentence) {
    $censoredWords = array("niepożądane", "słowa", "do", "ocenzurowania");
    foreach($censoredWords as $word) {
        $replacement = str_repeat("*", strlen($word));
        $sentence = str_ireplace($word, $replacement, $sentence);
    }
    return $sentence; // zwrócenie ocenzurowanego zdania
}
$sentence = "To jest zdanie z niepożądanymi słowami do ocenzurowania.";
$censoredSentence = censorWords($sentence);
echo $censoredSentence;



?>