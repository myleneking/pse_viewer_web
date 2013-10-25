<?php

class StockDatabase {

    public static function updateStockHistory() {
        $objXML = ApiPSE::getAll();

        $asOf = $objXML['as_of'];
        $asOfNew = substr($asOf , 0, 10) ." " . substr($asOf , 11, 8);

        foreach ($objXML->stock as $xml) {
            DB::table('stock_history')->insert(
                array(
                    'name' => $xml->name,
                    'symbol' => $xml['symbol'],
                    'percent_change' => $xml->percent_change,
                    'volume' => $xml->volume,
                    'currency' => $xml->price->currency,
                    'amount' => $xml->price->amount,
                    'as_of' => $asOfNew,
                )
            );
        }
    }

    public static function selectHistoryAll() {
        $rs = DB::table('stock_history')->get();
        return $rs;
    }

    public static function selectHistoryByCode($code) {
        $rs = DB::table('stock_history')
                ->where('symbol', $code)
                ->orderBy('as_of','desc')
                ->get();
        return $rs;
    }

    public static function selectHistoryByCodePerDay($code) {
        $rs = DB::table('stock_history')
                ->where('symbol', $code)
                ->whereRaw('date(as_of) = date(now())')
                ->orderBy('as_of', 'desc')
                ->get();
        return $rs;
    }

    public static function selectHistoryByCodePerWeek($code) {
        $rs = DB::table('stock_history')
                ->where('symbol', $code)
                ->whereRaw('week(as_of) = week(now())')
                ->orderBy('as_of', 'desc')
                ->get();
        return $rs;
    }

    public static function selectHistoryByCodePerMonth($code) {
        $rs = DB::table('stock_history')
                ->where('symbol', $code)
                ->whereRaw('month(as_of) = month(now())')
                ->orderBy('as_of', 'desc')
                ->get();
        return $rs;
    }

    public static function selectHistoryByCodePerYear($code) {
        $rs = DB::table('stock_history')
                ->where('symbol', $code)
                ->whereRaw('year(as_of) = year(now())')
                ->orderBy('as_of', 'desc')
                ->get();
        return $rs;
    }

}

?>