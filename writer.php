<?php


class Writer
{

    private Record $record;
    public static $arr_temp = '';
    /**
     * append - to end add data:
     * change - for change data:
    */
    public function __construct(Record $record, $mode)
    {
        $this->record = $record;
        if($mode == 'change')
        {
             Writer::$arr_temp .= Split::merge($record);
             $this->flag = true;
        }
        else
        {
            $this->append();
        }
    }
    public static function save()
    {
        file_put_contents(Reader::FILE , Writer::$arr_temp);
        Writer::$arr_temp = '';
    }

    private function append()
    {
        $file = fopen(Reader::FILE , "a+");
        fwrite($file, Split::merge($this->record));
        fclose($file);
    }
}