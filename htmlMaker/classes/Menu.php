<?php
class Menu
{
private $arrs;
public function __construct(array $arrs){ $this->arrs = $arrs; }
public function takeHM()
{
    $result = "<ul>";
    foreach($this->arrs as $arr){
        $result.="<li><a href=".$arr['link'].">".$arr['title']."</a></li>";
    }
    $result.="</ul>";
    return $result;
}
}


?>