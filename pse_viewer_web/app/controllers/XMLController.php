<?php

class XMLController extends BaseController {

    public function loadHistoryAllJSON() {
        header('Content-Type: application/json');

        $rs = StockDatabase::selectHistoryAll();
        $json = JSONConverter::objectToJSON($rs);

        print ($json);
    }

    public function loadHistoryByCodeJSON($code) {
        header('Content-Type: application/json');

        $rs = StockDatabase::selectHistoryByCode($code);
        $json = JSONConverter::objectToJSON($rs);

        print ($json);
    }

}