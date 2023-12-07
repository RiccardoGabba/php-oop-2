<?php 

class Steam 
{
    public $appid;
    public $name;
    public $img_icon_url;
    

    function __construct($appid, $name, $img_icon_url)
    {
        $this->id = $appid;
        $this->name = $name;
        $this->image = $img_icon_url;
    }

    public function printSteam()
    {
        $image = $this->img_icon_url;
        $title = $this->name;
        $custom = '';
        $content = '';
        
        include __DIR__ ."/../views/card.php";
    }

    public static function fetchAll()
    {
        $steamString = file_get_contents(__DIR__ ."/steam_db.json");
        $steamList = json_decode($steamString, true);

        $steam = [];
        foreach ($steamList as $steam){
            $steam[] = new Steam($steam['_id'], $steam['$name'], $steam['$image']);
        }
        return $steam;
    }
}
?>