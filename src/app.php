<?php
namespace App;

require_once(__DIR__ . "/../vendor/autoload.php");

use App\DataBase\DB;
use App\Models\Meter;

//Database connection
$db = new DB();

$meds = Meter::all();

foreach ($meds as $med) {

    echo "SERIAL NO: " . $med->serial_number . " DESCRIPTION: " . $med->description . PHP_EOL;

}