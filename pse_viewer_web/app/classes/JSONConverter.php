<?php

class JSONConverter {

    public static function objectToJSON($data) {
        $content_array = array();

        foreach ($data as $stock) {
            $stockJson = json_encode($stock);
            array_push($content_array, $stockJson);
        }

        $content = implode(",", $content_array);
        $result = '{"stock":['.$content.']}';

        return $result;
    }
}

?>