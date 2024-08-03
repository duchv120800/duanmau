<?php
    function getAllDanhmuc(){
        $listDanhmuc=getAll('danhmuc');
        return $listDanhmuc;
    }

    function getTenDanhmuc($id){
        {
            try {
                $sql = "SELECT ten FROM danhmuc WHERE id=:id LIMIT 1";
        
                $stmt = $GLOBALS['conn']->prepare($sql);

                $stmt->bindParam(':id', $id);
        
                $stmt->execute();
        
                return $stmt->fetch();
            } catch (\Exception $e) {
                debug($e);
            }
        }
    }