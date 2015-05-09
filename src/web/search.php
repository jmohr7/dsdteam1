<?php
/**
 * translate.php
 *
 * Module for translating text to other languages
 */
  require_once("rest.php");
  
  function getNumSearchResults($searchText){
    $searchURL = "https://xmlsearch.yandex.com/xmlsearch?user=moore-joe2015&key=03.315238186:752707d9797897ec371eb6d93fe3e941&query=". $searchText . "&l10n=en&sortby=tm.order%3Dascending&filter=strict&groupby=attr%3D%22%22.mode%3Dflat.groups-on-page%3D10.docs-in-group%3D1";
    $searchResponse= consumeRestService($searchURL);
    $searchXML = simplexml_load_string($searchResponse);
    $numSearchResults = $searchXML->response->found[2];
    if($numSearchResults === NULL){
      $numSearchResults = 0;
    } 
    return $numSearchResults;     
  }
?>
