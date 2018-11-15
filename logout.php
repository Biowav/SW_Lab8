<?php
/**
 * Created by PhpStorm.
 * User: cerve
 * Date: 15/11/2018
 * Time: 18:10
 */

if (file_exists('contador.xml')) {
    $contador = simplexml_load_file('contador.xml');
} else {
    exit('Error abriendo contador.xml.');
}
$contador->usuariosOnline=$contador->usuariosOnline - 1;
$contador->asXML('contador.xml');
header("Location: layout.php");
?>