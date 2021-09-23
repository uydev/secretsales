<?php
declare(strict_types=1);

//require './vendor/autoload.php';
require ('vendor/autoload.php');

use PHPUnit\Framework\TestCase;


require_once 'WordCounter.php';


final class WordCounterTest extends TestCase
{
    private $ba;

    public function setup()
    {
        $wordCounter = new WordCounter('https://s3-eu-west-1.amazonaws.com/secretsales-dev-test/interview/flatland.txt');
    }

    public function testFileLoads()
    {
        $fileUrl = 'https://s3-eu-west-1.amazonaws.com/secretsales-dev-test/interview/flatland.txt';
        $this->ba = new WordCounter($fileUrl);

        $this->assertEquals('200', $this->ba->get_http_response_code($fileUrl));

    }

}
