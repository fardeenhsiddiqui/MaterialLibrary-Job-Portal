<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['port'])){
         $link=$_POST['port_link'];
         

        $query= mysqli_query($con, "INSERT INTO `portfolio_link`(`user_id`,`link`) VALUES ('$id','$link')");
        header('location:candidate-dashboard-resume.php');
        
}
    if(isset($_POST['edit_port'])){
        $newid=$_POST['port_id'];
       

        
        $new_link=$_POST['new_port_link'];
       
        $query= mysqli_query($con, "UPDATE `portfolio_link` SET  `link`=' $new_link' WHERE `id`='$newid'");
        header('location:candidate-dashboard-resume.php');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $pf_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `portfolio_link`  WHERE id='$pf_id'");
    header('location:candidate-dashboard-resume.php');
}
else{
    echo $newid;
    echo " bsdk";
}
}
?>
                                        