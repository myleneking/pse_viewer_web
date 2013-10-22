<?php

class StockDatabase {

    public static function insertSampleStock() {
        DB::table('stock_history')->insert(
            array(
                'name' => 'Banco de Oro',
                'symbol' => 'BDO',
                'percent_change' => -0.25,
                'volume' => 2738530,
                'price' => 80.8,
                'as_of' => '2013-10-21 15:46:00',
            )
        );
    }

    public static function updateStockHistory() {
        $objXML = ApiPSE::getAll();

        $asOf = $objXML['as_of'];
        $asOfNew = substr($asOf , 0, 10) . " " . substr($asOf , 11, 8);

        foreach ($objXML->stock as $xml) {
            DB::table('stock_history')->insert(
                array(
                    'name' => $xml->name,
                    'symbol' => $xml['symbol'],
                    'percent_change' => $xml->percent_change,
                    'volume' => $xml->volume,
                    'price' => $xml->price->amount,
                    'as_of' => $asOfNew,
                )
            );
        }
    }
}

?>