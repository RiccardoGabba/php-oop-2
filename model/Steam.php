<?php 

class Steam 
{
    public $appid;
    public $name;
    public $img_icon_url;
    

    function __construct($appid, $name, $img_icon_url)
    {
        $this->appid = $appid;
        $this->name = $name;
        $this->img_icon_url = $img_icon_url;
    }

    public function printSteam()
    {
        $idapp = $this->appid;
        $prefix = 'https://cdn.cloudflare.steamstatic.com/steam/apps/';
        $sufix = '/header.jpg';
        $image = $prefix . $idapp . $sufix;
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
        foreach ($steamList as $item){
            $steam[] = new Steam($item['appid'], $item['name'], $item['img_icon_url']);
        }
        return $steam;
    }
}
?>