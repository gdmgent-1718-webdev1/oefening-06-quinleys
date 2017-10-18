<?php
// dag in cijfers
$currentDay = date('d');
// datum in cijfers
$currentMonth=date("m");

// testwaarde
// $currentMonth = "10";
// $currentDay = "18";

// season functie 
function season ($month , $day){
// if loops die maanden vergelijkt met $month
if ($month >="03" && $month <="05"){
    if($day <= "20" && $month = "03"){
        $season = "winter"; 
        return $season;

    }elseif ($day >="21" && $month == "05") {
        $season = "zomer";
        return $season;
    } else {
        $season = "lente";
        return $season;
    }
}
elseif ($month>="06" && $month<="08"){
    if($day <= "20" && $month == "06"){
        $season = "lente";
        return $season;

    }elseif ($day >="21" && $month == "08") {
        $season = "herst";
        return $season;
    } else {
        $season = "zomer";
        return $season;
    }

}
elseif ($month>="09" && $month<="11"){
    if($day <= "20" && $month == "09"){
        $season = "zomer";
        return $season;

    }elseif ($day >="21" && $month == "11") {
        $season = "winter";
        return $season;
    } else {
        $season = "herfst";
        return $season;
    }
}
elseif ($month >= "12" && $month<="03"){
    if($day <= "20" && $month == "12"){
        $season = "herfst";

    }elseif ($day >="21" && $month == "03") {
        $season = "lente";
    } else {
        $season = "winter";
    } 
}
}
// echo de function season en geef een waarde mee 

echo "De datum van vandaag is: ${currentDay}/${currentMonth}", PHP_EOL;
echo "Het huidige seizoen is:";
echo season($currentMonth,$currentDay), PHP_EOL;

?>

