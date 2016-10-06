<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(empty($_SESSION['guess_date'])){
$_SESSION['guess_date'] = array();}

$setdate = array($year = '2016',
    $month = 'september',
    $day = 1);


// to performe action

$action = filter_input(INPUT_POST, 'action');
if($action ===NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action ===NULL){
        $action = 'hint';
        
    }
}
if($action == guessdate){
    date_date_set($object, $year, $month, $day);
    $year = '2016';
    $month = 'september';
    $day =1;
    include('dateguess.php');
    
} else if ($action == hint){
    $days_away = date_diff($guessdate, $setdate)
            
            if($_SESSION['dat'])

    

    
     date_diff($guessdate, $setdate);
    
    return $interval->format($differenceFormat);
    
}        
            
}

