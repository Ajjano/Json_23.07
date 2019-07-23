<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 23.07.2019
 * Time: 10:01
 */

if(isset($_POST['login'])){
    $login=$_POST['login'];
    $action=$_POST['action'];
}else{
    $login=$_GET['login'];
    $action=$_GET['action'];
}

$reg_users=['serega', 'dimon', 'Ajjano', 'nick_usov', 'lisopas','djan'];

if(in_array($login, $reg_users)){
    if($action=='players'){
        echo getPlayers();
    }
    elseif($action=='countries'){
        echo getCountries();
    }
    elseif($action=='languages'){
        echo getLanguages();
    }
    elseif($action=='cars'){
        echo getCars();
    }
    else {
        echo 'false';
    }
}else{
    echo 'false';
}

function getPlayers(){
    $array=['1'=>'Roger Federer',
        '2'=>'Rafael Nadal',
        '3'=>'Pit Sumpras'];
    return json_encode($array);
}

function getCountries(){
    $array=['1'=>'Ukraine',
        '2'=>'France',
        '3'=>'Great Britain'];
    return json_encode($array);
}

function getLanguages(){
    $array=['1'=>'Java Script',
        '2'=>'C#',
        '3'=>'php'];
    return json_encode($array);
}

function getCars(){
    $array=['1'=>'Lada Sedan',
        '2'=>'Audi A8',
        '3'=>'BMW x5'];
    return json_encode($array);
}