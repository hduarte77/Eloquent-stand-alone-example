<?php
namespace App\Migrations;

require_once(__DIR__ . "/../../vendor/autoload.php");


use App\DataBase\DB;
use Illuminate\Database\QueryException;
use Illuminate\Database\Capsule\Manager as Capsule;


$db = new DB();

try {

    Capsule::schema()->create('meters', function ($table) {
        $table->increments('id');
        $table->string('serial_number')->unique();
        $table->string('description');
        $table->timestamps();
    });

} catch (QueryException $e) {
    echo $e->getMessage();
}