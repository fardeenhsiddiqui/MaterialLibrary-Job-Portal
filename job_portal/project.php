<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['pro'])){
         $pro_title=$_POST['pro_title'];
         $pro_link=$_POST['pro_link'];
         $pro_start_date=$_POST['pro_start_date'];
         $pro_end_date=$_POST['pro_end_date'];
         $pro_desc=$_POST['pro_desc'];

        $query= mysqli_query($con, "INSERT INTO `project`(`user_id`,`title`,`link`,`start_date`,`end_date`,`description`) VALUES ('$id','$pro_title','$pro_link','$pro_start_date','$pro_end_date','$pro_desc')");
        header('location:candidate-dashboard-resume.php');
        
}
    if(isset($_POST['edit_pro'])){
        $newid=$_POST['pro_id'];
       

        $new_pro_title=$_POST['new_pro_title'];
        $new_pro_link=$_POST['new_pro_link'];
        $new_pro_start_date=$_POST['new_pro_start_date'];
        $new_pro_end_date=$_POST['new_pro_end_date'];
        $new_pro_desc=$_POST['new_pro_desc'];

        $query= mysqli_query($con, "UPDATE `project` SET `title`='$new_pro_title', `link`=' $new_pro_link',`start_date`='$new_pro_start_date',`end_date`='$new_pro_end_date',`description`='$new_pro_desc' WHERE `id`='$newid'");
        header('location:candidate-dashboard-resume.php');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $p_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `project`  WHERE id='$p_id'");
    header('location:candidate-dashboard-resume.php');
}
else{
    echo $newid;
    echo " bsdk";
}
}
?>
                                        