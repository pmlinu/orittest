<?php
include('db.class'); // call db.class.php
$DB = new db(); // create a new object, class db()

$file = $argv[1];
//$file = 'D:\wamp64\www\phpcmd\smallFile.txt';
$getFile = file_get_contents($file);
$uniquevalue = explode(' ', $getFile);
$keyword = array_unique($uniquevalue);
$field = array('keyword');
$DB->saveRecord('keywords',$field,$keyword);
$DB->saveRecord('watchlist',$field,$keyword);

$uniqueWordcount = $DB->getWordscount('keywords');
echo 'Distinct unique words: '.$uniqueWordcount."<br>";

$keywords = $uniqueWordcount = $DB->getWords('watchlist');
echo "Watchlist words: <br>".$keywords;
?>