<?php
/* 
 * @author:Sathish
 * @copyright:nil
 * @time:05-06-2016
 */

spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    $file = str_replace('\\',DIRECTORY_SEPARATOR,$className);
    require_once $file . '.php'; 
    //Make your own path, Might need to use Magics like ___DIR___
}

use lib as Jour;

$obj = new Jour\Journey(basename("/journey.json"));
$obj->journeySummary();
$JourneyRoutes = $obj->getJourneyPaths();

foreach( $JourneyRoutes as $index => $path ){
    echo ($index + 1). ") from ". $path['departure'].  " To ". $path['arrival'] . " , Transport seat".  $path['seat'] . ", ".$path['text']."<br>";
}