<?php

require_once("class/Database.php");
require_once("template/header.php");
require_once("class/Form.php");

class Main
{
    private $warga = [];
    public function __construct($human)
    {
        $this->warga = $human;
    }
    public function x($link)
    {
        if (array_key_exists($link, $this->warga)) {
            require($this->warga[$link]);
        } else {
            require($this->warga["home"]);
        }
    }
}

$qt = [
    "home" => "modul/home.php",
    "add" => "modul/artikel/add.php",
    "update" => "modul/artikel/update.php",
    "delete" => "modul/artikel/delete.php"
];
$main = new Main($qt);
$main->x(@$_REQUEST["mod"]);
require_once("template/footer.php");
