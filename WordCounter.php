<?php

//namespace Secretsales;

/**
 * Class WordCounter
 */
class WordCounter {

    /**
     * @var
     */
    private $file;

    /**
     * WordCounter constructor.
     * @param $file
     */
    public function __construct($file) {

        $this->file = $file;
        $this->fileContent = file_get_contents($this->file);

        echo 'Object was just instantiated';
    }

    public function displayFileContent()
    {
        echo $this->fileContent;
    }

    /**
     * @param $max_count
     */
    public function getMostFrequentWords($max_count)
    {
        $string = $this->fileContent;
        $word_count = str_word_count( $string, 2);
        $frequency = array_count_values($word_count);
        $keywords = array_slice($frequency, 0, $max_count);

        foreach($keywords as $index => $value)
        {
            echo $index . ', ' .$value;
            echo "\n";
        }
    }

    /**
     * @param $url
     * @return bool|string
     */
    public function get_http_response_code($url) {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }


}



?>
