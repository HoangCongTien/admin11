<?php
function insert_sv($name,$dress,$age,$tell,$img,$gioitinh,$idlophoc){
    $spl = "insert into sinhvien values (null,'$name','$dress','$age','$tell','$img','$gioitinh','$idlophoc')";
    pdo_execute($spl);
}
function loadall_sv(){
    $result = "select * from sinhvien order by idsinhvien ";
    $sinhvien=pdo_query($result);
 return $sinhvien;
}
function loadone_sv($idsinhvien){
    $sql = "select * from sinhvien where idsinhvien = ".$idsinhvien;
    $suasv = pdo_query_one($sql);
    return $suasv;
}
function delete_sv($idsinhvien){
    $sql = "delete from sinhvien where idsinhvien =".$idsinhvien;
    pdo_execute($sql);
}
function update_sv($idsinhvien,$name,$dress,$age,$tell,$img,$gioitinh){
    if($img !=" "){
        $sql ='update sinhvien set idsinhvien = "'.$idsinhvien.'",  name = "'.$name.'",dress = "'.$dress.'",age = "'.$age.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'" where idsinhvien = '.$idsinhvien;
    }else{
        $sql ='update sinhvien set idsinhvien = "'.$idsinhvien.'",  name = "'.$name.'",dress = "'.$dress.'",age = "'.$age.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'" where idsinhvien = '.$idsinhvien;
    }
    pdo_execute($sql);
}
function loadsv_by_idlophoc($idlophoc){
    $sql = "select * from sinhvien where idlophoc = ".$idlophoc;
    $sv = pdo_query($sql);
    return $sv;
}
?>   