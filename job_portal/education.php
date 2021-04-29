<?php
session_start();
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
if(isset($_SESSION['loggedin'])){
    $id=$_SESSION['loggedin'];
    if(isset($_POST['edu'])){
         $education=$_POST['education'];
         $institute=$_POST['institute'];
         $stream=$_POST['stream'];
         $passing_year=$_POST['passing_year'];
         $percentage=$_POST['percentage'];

        $query= mysqli_query($con, "INSERT INTO `education`(`user_id`,`education`,`institute`,`stream`,`passing_year`,`percentage`) VALUES ('$id','$education','$institute','$stream','$passing_year','$percentage')");
        header('location:candidate-dashboard-resume.php');
        
}
    if(isset($_POST['edit_edu'])){
        $newid=$_POST['edu_id'];
       

        $new_education=$_POST['new_education'];
         $new_institute=$_POST['new_institute'];
         $new_stream=$_POST['new_stream'];
         $new_passing_year=$_POST['new_passing_year'];
         $new_percentage=$_POST['new_percentage'];

        $query= mysqli_query($con, "UPDATE `education` SET `education`='$new_education', `institute`='$new_institute',`stream`='$new_stream',`passing_year`='$new_passing_year',`percentage`='$new_percentage' WHERE `id`='$newid'");
        header('location:candidate-dashboard-resume.php');
        
}
elseif(get_safe_value($con,$_GET['type']=='delete')){
    $e_id=get_safe_value($con,$_GET['id']);

    mysqli_query($con, "DELETE FROM `education`  WHERE id='$e_id'");
    header('location:candidate-dashboard-resume.php');
}
else{
    echo $newid;
    echo " bsdk";
}
}
?>
                                        