<?php

function calculateOffer($ticketWant,$ticketPricePer){

//offer rule
$offerBuy = 7;
$offerGet = 3;

//check for offer is applicable or not
if($offerBuy > $ticketWant){
    return 'Error: Offer Not applicable';
}

//check buy tickets not greater than offered tickets
if($offerBuy < $offerGet){
    return 'Error: Offer tickets should not greater than Buy tickets';
}

$s = 0;
$k = 0;
for ($i = 1; $i <= $ticketWant; $i++)
    {
       $s++;
       if($s == $offerBuy){
          $k = $k + $offerGet;
          $s = 0;
        }
       
    }
    //free tickets counts
    $freeTickets = $k;
 
    $calPaidTicketsCount = $ticketWant - $freeTickets;
    $calPaidTickets = $ticketPricePer * $calPaidTicketsCount;
   
    return 'Congratulation, You got '.$freeTickets.' free tickets on buying '.$ticketWant.' tickets of worth Rs.'.$calPaidTickets;
}

$ticketWant = 10;
$ticketPricePer = 300;
echo calculateOffer($ticketWant, $ticketPricePer);
?>