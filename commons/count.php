<?php
if (!function_exists('quantity')) {
    function quantity($tableName)
    {
        try {
            $sql = "SELECT COUNT(*) AS soluong FROM $tableName";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
