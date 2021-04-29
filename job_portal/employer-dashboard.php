<?php
session_start();
ob_start();
include 'include/header-log.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';
$msg = '';
$employer = '';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:' . $SITEURL . 'job_portal/admin/signin.php');
    exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}


//check wether the id is set or not
if (isset($_SESSION['loggedin'])) {
    // get the id & all othr details
    $id = $_SESSION['loggedin'];
    //create sql query
    $query = "SELECT * FROM  job_company WHERE user_id='$id'";

    //execute the query
    $res = mysqli_query($con, $query);

    //count the roe to check wether id is valid or not
    $num = mysqli_num_rows($res);
    $res1 = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
        
        $industry_type_id = $_POST['industry_type_id'];
        $job_func_area_id = $_POST['job_func_area_id'];
        $company_name = $_POST['company_name'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $website = $_POST['website'];
        $email = $_POST['email'];
        $team_size = $_POST['team_size'];
        $about_us = $_POST['about_us'];
        $logo = $_POST['logo'];
        $status = $_POST['status'];
        $images = $_POST['images'];
        $facebook_url = $_POST['facebook_url'];
        $instagram_url = $_POST['instagram_url'];
        $twiter_url = $_POST['twiter_url'];
        $linkdin_url = $_POST['linkdin_url'];
        $company_fondation_date = $_POST['company_fondation_date'];


        if ($num==1) {
            $update = "UPDATE `job_company` SET `industry_type_id`='$industry_type_id',`job_func_area_id`='$job_func_area_id',`company_name`='$company_name',`country`='$country',`city`='$city',`state`='$state',`pincode`='$pincode',`address`='$address',`contact_number`='$contact_number',`website`='$website',`email`='$email',`team_size`='$team_size',`about_us`='$about_us',`logo`='$logo',`status`='$status',`facebook_url`='$facebook_url',`instagram_url`='$instagram_url',`twiter_url`='$facetwiter_urlbook_url',`linkdin_url`='$linkdin_url',`company_fondation_date`='$company_fondation_date' WHERE user_id='$id'";
            // $update = "UPDATE `job_company` SET `company_name`='$company_name' WHERE user_id='$id'";
            mysqli_query($con, $update);
            header('location:employer-dashboard.php');
        }
        else{
            echo '<div class="alert alert-primary" role="alert">
        Can not update information!
         </div>';
        }
}

?>
<!-- Header -->

<!-- SubHeader -->
<div class="careerfy-subheader careerfy-subheader-without-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="careerfy-page-title">
                    <h1>Companies</h1>
                    <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="careerfy-breadcrumb">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="employer-dashboard.php">Pages</a></li>
            <li>Companies</li>
        </ul>
    </div>
</div>
<!-- SubHeader -->

<!-- Main Content -->
<div class="careerfy-main-content">

    <!-- Main Section -->
    <div class="careerfy-main-section careerfy-dashboard-fulltwo">
        <div class="container">
            <div class="row">

                <aside class="careerfy-column-3">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dashboard-nav">
                            <figure>
                                <a href="#" class="employer-dashboard-thumb"><img
                                        src="extra-images/<?php echo $res1['logo']; ?>" alt=""></a>
                                <figcaption>
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                        <!-- <span id="i_id" class="hidden"><?php echo $id ?></span> -->
                                        <input type="file" class="careerfy-upload" name="file" id="file"/>
                                        <!-- <span id="uploaded_image" class="hidden"></span>
                                        <script>
                                            $(document).ready(function(){
                                                $(document).on('change','#file',function(){
                                                    var id = document.getElementById("i_id");
                                                    var property = document.getElementById("file").files[0];
                                                    var image_name = property.name;
                                                    var image_extension = image_name.split('.').pop().toLowerCase();
                                                    if(jQuery.inArray(image_extension,['gif','png','jpg','jpeg'])== -1){
                                                        alert("Invalid Image File");
                                                    }
                                                    else{
                                                        var action = 'fetch_data';
                                                        var form_data = new FormData();
                                                        formdata.append("file",property);
                                                        $.ajax({
                                                            url:"employer-dashboard.php",
                                                            method:"POST",
                                                            data:{action:action,form_data:form_data,id:id},
                                                            contentType:false,
                                                            cache:false,
                                                            processData:false,
                                                            success:function(){
                                                                $('#uploaded_image').html(data);
                                                            }
                                                        });
                                                    }

                                                });

                                            });
                                        </script> -->
                                    </div>
                                    <h2><?php echo $res1['company_name']; ?></h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li class="active"><a href="employer-dashboard.php"><i
                                            class="careerfy-icon careerfy-user"></i> Company Profile</a></li>

                                <li><a href="employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li><a href="employer-dashboard-resumes.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

                                <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i>
                                        Post a New Job</a></li>

                                <li><a href="employer-dashboard-changed-password.php?id=<?php echo $id; ?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                                </li>

                                <li><a href="../admin/assets/_logout.php"><i class="careerfy-icon careerfy-logout"></i>
                                        Logout</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <!-- <li><a href="employer-dashboard-packages.php"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                            </ul>
                        </div>
                    </div>
                </aside>

                <div class="careerfy-column-9">



                    <div class="careerfy-typo-wrap">
                        <form class="careerfy-employer-dasboard" action="employer-dashboard.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Welcome <?php echo $res1['company_name']; ?></h2>
                                </div>
                                <?php
                                if ($msg != '') {
                                    echo $msg;
                                }
                                ?>
                                <ul class="careerfy-row careerfy-employer-profile-form">
                                    <li class="careerfy-column-6">
                                        <label>Company Name *</label>
                                        <input type="text" placeholder="Company Name"
                                            value="<?php echo $res1['company_name']; ?>" name="company_name">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Email *</label>
                                        <input type="email" placeholder="Email Address" name="email"
                                            value="<?php echo $res1['email']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Phone *</label>
                                        <input type="text" placeholder="Phone Number" name="contact_number"
                                            value="<?php echo $res1['contact_number']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Website</label>
                                        <input type="text" placeholder="Website URL" name="website"
                                            value="<?php echo $res1['website']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Category</label>
                                        <div class="careerfy-profile-select">
                                            <select name="industry_type_id">
                                                <option value="">Select Job Category Name</option>
                                                <?php
                                                $query = mysqli_query($con, "SELECT * FROM job_industry_type");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $row['id']; ?>">
                                                    <?php echo $row['industry_type']; ?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Founded Date *</label>
                                        <input type="Date" name="company_fondation_date"
                                            value="<?php echo $res1['company_fondation_date']; ?>">
                                    </li>

                                    <li class="careerfy-column-12">
                                        <label>Description *</label>
                                        <textarea placeholder="Company Description"
                                            name="about_us"><?php echo $res1['about_us']; ?></textarea>
                                    </li>
                                </ul>
                            </div>

                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Address / Location</h2>
                                </div>
                                <ul class="careerfy-row careerfy-employer-profile-form">

                                    <li class="careerfy-column-6">
                                        <label>Region *</label>
                                        <li>
                                            <?php
                                            include_once "./backend/Common.php";
                                            $common = new Common();
                                            $allStates = $common->getState($con);
                                            ?>

                                            <div class=" careerfy-select-style">
                                                <select type="text" name="state" id="stateId" class="form-control"
                                                    onchange="getCityByState();">
                                                    <option>Delhi</option>

                                                    <?php
                                                    if ($allStates->num_rows > 0) {
                                                        while ($state = $allStates->fetch_object()) {
                                                            $stateId = $state->id;
                                                            $stateName = $state->name;
                                                    ?>
                                                    
                                                    <option value="<?php echo $stateId; ?>">
                                                        <?php echo $stateName; ?>
                                                    </option>
                                                    <?php }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>City / Town *</label>
                                        <div class="careerfy-profile-select">
                                            <select class="form-control" name="city" id="cityDiv">
                                                <option value="">City</option>
                                            </select>
                                        </div>
                                    </li>

                                    <script>
                                      function getCityByState() {
                                            let stateId = $("#stateId").val();
                                            $.post("backend/ajax.php", {
                                                getCityByState: 'getCityByState',
                                                stateId: stateId
                                            }, function(response) {
                                                // alert(response);
                                                let data = response.split('^');
                                                let cityData = data[1];
                                                $("#cityDiv").html(cityData);
                                            });
                                        }
                                    </script>

                                    <li class="careerfy-column-6">
                                        <label>Postcode *</label>
                                        <input type="text" placeholder="Area Pincode" name="pincode"
                                            value="<?php echo $res1['pincode']; ?>">
                                    </li>

                                    <li class="careerfy-column-10">
                                        <label>Full Address *</label>
                                        <input type="text" placeholder="Full Address" name="address"
                                            value="<?php echo $res1['address']; ?>">
                                    </li>
                                </ul>
                            </div>

                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Company Social</h2>
                                </div>
                                <ul class="careerfy-row careerfy-employer-profile-form">
                                    <li class="careerfy-column-6">
                                        <label>Facebook</label>
                                        <input type="text" placeholder="Facebook URL" name="facebook_url"
                                            value="<?php echo $res1['facebook_url']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Instagram</label>
                                        <input type="text" placeholder="Instagram URL" name="instagram_url"
                                            value="<?php echo $res1['instagram_url']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Twitter</label>
                                        <input type="text" placeholder="Twiter URL" name="twiter_url"
                                            value="<?php echo $res1['twiter_url']; ?>">
                                    </li>

                                    <li class="careerfy-column-6">
                                        <label>Linkedin</label>
                                        <input type="text" placeholder="Linkdin URL" name="linkdin_url"
                                            value="<?php echo $res1['linkdin_url']; ?>">
                                    </li>
                                </ul>
                            </div>
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Comapany Photos</h2>
                                </div>

                                <div class="careerfy-company-photo">
                                    <img src="images/employer-profile-nonphoto.png" alt="">
                                    <h2>Drag & Drop Photos here to upload</h2>
                                    <!-- <small>You can upload up to 5 images under your profile</small> -->
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-upload"></i> Upload Images</span>
                                        <input type="file" class="careerfy-upload" name="images"
                                            value="<?php echo $res1['images']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <!-- <input type="submit" class="careerfy-employer-profile-submit" name="submit" value="Submit"> -->
                            <button name="submit" type="submit" value="submit"
                                class="btn btn-lg btn-info btn-block careerfy-employer-profile-submit">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>s
    </div>
    <!-- Main Section -->

</div>
<!-- Main Content -->

<?php
if (isset($_POST['submit'])) {

    // get the data from the form 
    $industry_type_id = $_POST['industry_type_id'];
    $company_name = $_POST['company_name'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $about_us = $_POST['about_us'];
    $images = $_POST['images'];
    $facebook_url = $_POST['facebook_url'];
    $instagram_url = $_POST['instagram_url'];
    $twiter_url = $_POST['twiter_url'];
    $linkdin_url = $_POST['linkdin_url'];
    $company_fondation_date = $_POST['company_fondation_date'];

    // sql query to save the data in database
    $sql2 = "UPDATE  job_company SET industry_type_id='$industry_type_id', company_name='$company_name', country='$country', state ='$state', city='$city', pincode='$pincode', address='$address', contact_number='$contact_number', website='$website', email='$email', about_us='$about_us', facebook_url='$facebook_url', instagram_url='$instagram_url', twiter_url='$twiter_url', linkdin_url='$linkdin_url', company_fondation_date='$company_fondation_date', images='$images', WHERE id='$id'";

    $res2 = mysqli_query($con, $sql2);
    if ($res2 == TRUE) {

        $_SESSION['add'] = '<div class="success">Details Updated Succesfully.</div>';
    } else {

        $_SESSION['add'] = '<div class="error">Details Did not Update.</div>';
        header("location:" . $SITEURL . 'job_portal/employer-dashboard.php');
    }
}
?>

<!-- Footer -->
<?php
include 'include/footer.php';
}
// else{
//     header('location:' . $SITEURL . 'job_portal/signin.php');
// }
?>

<?php
    if(isset($_POST['action'])){

    $logo1 = $_POST['form_data'];
    $id = $_POST['id'];
    $update1 = "UPDATE job_company SET logo='$logo' WHERE user_id='$id'";
    mysqli_query($con, $update1);
    }
?> 