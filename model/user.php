<?php
function insert_taikhoan($email,$user,$pass){
    $spl = "insert into taikhoan(email,user,pass) values ('$email','$user','$pass')";
    pdo_execute($spl);
}

function checkuserSV($user,$pass){
    $sql="select * from sinhvien where userSV='".$user."' and pass='".$pass."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function checkuserGV($user,$pass){
    $sql="select * from giaovien where userGV='".$user."' and pass='".$pass."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function dangnhap($checkuser,$check) {
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        if($check=="giaovien") {
            header('Location: index.php?act=giaovien');
        }
        else {
            header('Location: index.php?act=hocsinh');
        }
    } else {
        $thongbao = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí";
        echo $thongbao;
    }
}





function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_taikhoan($id,$user,$pass,$email,$addfess,$tel){

    $sql ='update taikhoan set user = "'.$user.'",pass = "'.$pass.'",email = "'.$email.'",addfess = "'.$addfess.'",tel = "'.$tel.'" where id = '.$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan ;
}
function delete_taikhoan($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql="select * from taikhoan where id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan_admin($id,$user,$pass,$email,$addfess,$tel,$role){

    $sql ='update taikhoan set user = "'.$user.'",pass = "'.$pass.'",email = "'.$email.'",addfess = "'.$addfess.'",tel = "'.$tel.'",role="'.$role.'" where id = '.$id;
    pdo_execute($sql);
}
?>
