<?php
namespace App\DataBase;

use Illuminate\Database\Capsule\Manager as Capsule;

class DB {

    private $capsule;
    public function __construct(){

        require_once(__DIR__ . "../../Config/Config.php");

        $this->capsule = new Capsule;

        $this->capsule->addConnection([
            "driver" => $db_driver,
            "host" => $db_host,
            "database" => $db_name,
            "username" => $db_username,
            "password" => $db_password,
            "charset" => $db_charset,
        ]);

        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
        
    }


}

