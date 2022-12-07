<?php

Class Reader 
{
    const FILE = 'data.txt';
    private $data = [];
    public function __construct()
    {
        $file = fopen(self::FILE , 'r') or die("he he");
        
        while(!feof($file))
        {
            $line = htmlentities(fgets($file));
            $spliter = new Split($line);
            $this->data[] = new Record($spliter->getName(), $spliter->getPrice());
        }
        fclose($file);
    }

    public function data()
    {
        return $this->data;
    }
}