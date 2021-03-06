<?php
/* 1 - write a function getNumMatches that searches for a word in an array of words and returns 
the number of matches (repetitions). */
$arr=['hema','tarek','salah','hema','mo','hema'];
function getNumMatches($text)
{
    $match=[];
    global $arr;
    foreach ($arr as $value) {
        if ($value===$text) {
            $match[]=$value;
        }
    }
    return $match;
}
$matches=getNumMatches('hema');
echo count($matches) ." ". "Matches" . "<hr>";
/* 1 - write a function getNumMatches that searches for a word in an array of words and returns 
the number of matches (repetitions). */


/*2- write a function getPriceWithDiscount that takes the price and returns the price after discount. */

function getPriceWithDiscount($price)
{
    if ($price<1000) {
        $discount=$price*.1; //discount is 10% for prices less than 1000
        $priceAfterDiscount=$price-$discount;
        return $priceAfterDiscount;
    } elseif ($price>=1000) {
        $discount=$price*.05; //discount is 5% for prices greater than or equal 1000
        $priceAfterDiscount=$price-$discount;
        return $priceAfterDiscount;
    }
}

// $x=getPriceWithDiscount(1000);
// echo $x;

/*2- write a function getPriceWithDiscount that takes the price and returns the price after discount. */
