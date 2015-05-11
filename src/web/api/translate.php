<?php
  require_once("../translate.php");
  require_once("../search.php");
  $translation = translateSentence($_GET("text"), "English", $_GET("targetLanguage"]);
  $translationLength = strlen($translation);
  $numSearchResults = getNumSearchResults($translation);
  shell_exec("java -jar ../../rn.jar ".$_POST['targetLanguage']." ".$translationLength." ".$numSearchResults)
?>