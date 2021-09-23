<?php
/**
 * Created by PhpStorm.
 * User: yilmaz
 * Date: 05/08/17
 * Time: 03:35
 */

include_once 'WordCounter.php';

$fileUrl = 'https://s3-eu-west-1.amazonaws.com/secretsales-dev-test/interview/flatland.txt';

$countWords = new WordCounter($fileUrl);

if($countWords->get_http_response_code($fileUrl) == "200"){

    $countWords->displayFileContent();

    $countWords->getMostFrequentWords(100);

} else{

    echo 'File does not exist';
}