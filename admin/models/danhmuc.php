<?php
    function getAllDanhmuc(){
        $listDanhmuc=getAll('danhmuc');
        return $listDanhmuc;
    }

    // function insertTaikhoan(){
        
    //     insert('taikhoan',$data);
    // }

    function getDanhMucLienQuan($tableName, $id_danhmuc){
        try {
            $sql="SELECT * FROM $tableName WHERE id_danhmuc = :id_danhmuc limit 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':id_danhmuc',$id_danhmuc);

            $stmt->execute();

            return $stmt->fetch();
           } catch (\Exception $e) {
                debug($e);
           }
    }
?>