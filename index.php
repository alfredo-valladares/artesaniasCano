
    <?php

    require __DIR__."/vendor/autoload.php";
    use Carbon\Carbon;

    $now = Carbon::now();
    #echo $now->year."/"; 
    #echo $now->day;
    echo $now->hour;
    echo $now->minute;


?>