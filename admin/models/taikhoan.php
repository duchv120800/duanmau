<?php
    function getAllTaikhoan($current_page){
        try {
            $sql="SELECT * FROM taikhoan";

            $limit = 10;

            $offset = ($current_page - 1) * $limit;
    
            $sql .= " ORDER BY taikhoan.id DESC LIMIT " . $limit . " offset " . $offset;

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
           } catch (\Exception $e) {
                debug($e);
           }
    }
?>