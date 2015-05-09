<?php
/**
 * translate.php
 *
 * Module for translating text to other languages
 */
  require_once("rest.php");
  function translateSentence($text, $sourceLang, $targetLang){
    if($sourceLag == "English" && $targetLang == "Russian"){
      $langs = "en-ru";
    }
    else {
      $langs = "en-ru";
    }
  	$url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20150425T171008Z.77263fc46bfe0afc.6a32b1315ffb543be3e97ea94e3c6691ade23f35&lang=" . $langs . "&text=" . $text;
  	$translationJson = consumeRestService($url);
  	$decodedResult = json_decode($translationJson, true);
  	$translationText = $decodedResult["text"][0];
  	return $translationText;
  }
?>
