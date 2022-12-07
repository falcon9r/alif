<?php



class Split 
{
    private $price;
    private $name;
    public function __construct(string $line)
    {
        $n = strlen($line);   
        $flag = false;
        for($i = 0; $i < $n; $i++)
        {
            if($line[$i] == "-"){
                $flag = true;
                continue;
            };
            if($flag)
            {
                $this->price .= $line[$i];
            }
            else
            {
                $this->name  .= $line[$i];
            }
        }
        $this->price = (int)trim($this->price);
        $this->name = (string)trim($this->name);     
    }

    public function getName() : string
    {
        return $this->name;
    }
    
    public function getPrice() : int
    {
        return $this->price;
    }

    public static function merge(Record $record) : string
    {
        return $record->name()." - ".$record->price()."\n";
    }

}