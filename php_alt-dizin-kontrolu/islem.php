<?php
include("baglan.php");

if(isset($_POST["login"])){
    if(empty($_POST["tc_no"]) || empty($_POST["password"])){
        $message = '<label>All field is required</label>';
    }else{
        $query = "SELECT * FROM user WHERE tc_no = :tc_no AND password = :password";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'tc_no' => $_POST["tc_no"],
                'password' => $_POST["password"],
                )
        );
        $count = $statement->rowCount();
        if($count > 0){
            $_SESSION["tc_no"] = $_POST["tc_no"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["oturum"] = true;
            header("location:user.php");
        }else{
            $message = '<label>Username or Password is wrong</label>';
        }
    }
}

if(isset($_POST["info_giris"])){
    $tc_no = $_SESSION["tc_no"];
    $password = $_SESSION["password"];
    $adi = $_POST["adi"];
    $soyadi = $_POST["soyadi"];
    $sql = "UPDATE user SET adi =? , soyadi =? WHERE tc_no = '$tc_no' AND password = '$password'";
    $stmt= $connect->prepare($sql);
    $stmt->execute([$adi, $soyadi]);
    header("location:user.php");
    
}

if(isset($_POST["sm_giris"])){
    $tc_no = $_SESSION["tc_no"];
    $sosyalmedya_id = $_POST["sosyalmedya_id"];
    $link = $_POST["link"];
    $sql = "INSERT INTO user_sosyal SET tc_no =?, sosyalmedya_id =?, link =?";
    $stmt= $connect->prepare($sql);
    $stmt->execute([$tc_no, $sosyalmedya_id, $link]);
    header("location:user.php");
    
}

?>