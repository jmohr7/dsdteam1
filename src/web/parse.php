<?php
/**
 * parse.php
 *
 * Module for parsing sentences
 */
  function parseSentences($text){
    $noQuestion = str_replace("?", ".", $text);
    $sentenceArray = explode(".", $noQuestion);
  	return $sentenceArray;
  }
?>
