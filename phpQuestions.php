<?php

class PHPQuestions
{

    // xml data to more readable json
    function xmlToJson( $xmlLink )
    {
       $resp = simplexml_load_file( $xmlLink );
       return json_encode($resp);

    }

    // return list having more than a provided price
    function filterItemWithPrice( $thresHoldPrice )
    {   
        $ids    = [ 1, 2, 3 ];
        $prices = [ 200 , 500 , 100 ];
        $resp   = ['item' => "", 'sumTotal' => ""];

        $filteredIDS         = [];
        $filteredPriceArray  = [];

        foreach( $prices as $key => $price ):
            if( $price > $thresHoldPrice  ):
                array_push( $filteredIDS, $ids[$key] );
                array_push( $filteredPriceArray, $price );
            endif;
        endforeach;

        $resp['item']       = $filteredIDS;
        $resp['sumTotal']   = $this->totalSumofPrices( $filteredPriceArray );

        return (object) $resp;

    }

    // total sum of prices from list
    function totalSumofPrices( $filteredPriceArray )
    {   
        return array_sum($filteredPriceArray);
    }
}



