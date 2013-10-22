<?php

class StockDatabase {

    public static function insertSampleStock() {
        DB::table('api_stocks')->insert(
            array(
                'name' => 'Banco de Oro',
                'symbol' => 'BDO',
                'percent_change' => -0.25,
                'volume' => 2738530,
                'price' => 80.8,
                'as_of' => '2013-10-21 15:46:00',
                'watch_flg' => 0,
            )
        );
    }

}

?>