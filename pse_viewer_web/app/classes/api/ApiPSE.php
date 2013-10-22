<?php

class ApiPSE {

    private static $urlXML = "http://phisix-api.appspot.com/stocks.xml";

    public static function getAll() {
        //$objXML = new SimpleXMLElement(ApiPSE::$urlXML);
        $objXML = simplexml_load_file(ApiPSE::$urlXML);
        return $objXML;
    }

}

?>