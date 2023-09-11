<?php
if($_GET){
    print_r($_GET);

}
    $dueDate = $_GET["expiration"];
    $invoiceDate = $_GET["invoice"];
    date_default_timezone_set('America/Chicago');
    $todaysDate = date('m-d-Y h:i');
    Determination($dueDate, $invoiceDate);
    $expiration = date('m-d-Y h:i   ');

    function displayDate(){
        global $todaysDate;
        echo("Today's Date is: $todaysDate");
    }

    function Calculate($date1, $date2){
        global $dueDate;
        global $invoiceDate;
        $timeRemaining = strtotime($dueDate) - strtotime($invoiceDate);
        $timeRemaining = date('m-d-Y');
        echo("Time Remaining: $timeRemaining");
        return $timeRemaining;
    }

    function Determination($date1, $date2){
        global $dueDate;
        global $invoiceDate;
        $timeRemaining = strtotime($dueDate) - strtotime($invoiceDate);
        echo("Time Remaining: " . $timeRemaining);
        return $timeRemaining;
    }


    

?>