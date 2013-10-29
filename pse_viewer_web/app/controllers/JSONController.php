<?php

class JSONController extends BaseController {

    public function loadHistoryAllJSON() {
        header('Content-Type: application/json');

        $rs = StockDatabase::selectHistoryAll();
        $json = JSONConverter::objectToJSON($rs);

        return ($json);
    }

    public function loadHistoryByCodeJSON($code) {
        header('Content-Type: application/json');

        $rs = StockDatabase::selectHistoryByCode($code);
        $json = JSONConverter::objectToJSON($rs);

        if ($json) {
            return ($json);
        }

        return '"' . $code . '" code not found.';
    }

    public function loadHistoryByPeriodByCodeJSON($period, $code) {
        header('Content-Type: application/json');

        switch (strtolower($period)) {
            case 'day':
                $rs = StockDatabase::selectHistoryByCodePerDay($code);
            break;
            case 'week':
                $rs = StockDatabase::selectHistoryByCodePerWeek($code);
            break;
            case 'month':
                $rs = StockDatabase::selectHistoryByCodePerMonth($code);
            break;
            case 'year':
                $rs = StockDatabase::selectHistoryByCodePerYear($code);
            break;
            default:
                return "Incorrect path supplied.";
            break;
        }

        $json = JSONConverter::objectToJSON($rs);

        if ($json) {
            return $json;
        }

        return 'No available data yet for "' . $code . '".';
    }

}