<?php
session_start();
ob_start();
include 'include/header-log.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';

$msg = '';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location:' . $SITEURL . 'job_portal/signin.php');
    exit;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}


if (isset($_SESSION['loggedin'])) {

    $id = $_SESSION['loggedin'];
    $query = "SELECT * FROM  job_company WHERE user_id='$id'";
    $res = mysqli_query($con, $query);
    $res1 = mysqli_fetch_array($res);
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
            <li><a href="employer-dashboard-resumes.php">Pages</a></li>
            <li>Candidates</li>
        </ul>
    </div>
</div>
<!-- SubHeader -->

<!-- Main Content -->
<div class="careerfy-main-content">

    <!-- Main Section -->
    <div class="careerfy-main-section careerfy-top-full">
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
                                        <input type="file" class="careerfy-upload" />
                                    </div>
                                    <h2><?php echo $res1['company_name']; ?></h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i>
                                        Company Profile</a></li>
                                <li><a href="employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>
                                <li class="active"><a href="employer-dashboard-resumes.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>
                                <!-- <li><a href="employer-dashboard-packages.php"><i class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i>
                                        Post a New Job</a></li>
                                <!-- <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-alarm"></i> Job
                                        Alerts</a></li> -->
                                <li><a href="employer-dashboard-changed-password.php?id=<?php echo $id; ?>"><i
                                            class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                                </li>
                                <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>

                <div class="careerfy-column-9">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dasboard">
                            <div class="careerfy-employer-box-section">
                                <!-- Profile Title -->
                                <div class="careerfy-profile-title">
                                    <h2>Shortlisted Resumes</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders"
                                            onblur="if(this.value == '') { this.value ='Search orders'; }"
                                            onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <!-- Resumes -->
                                <div class="careerfy-employer-resumes">
                                    <ul class="careerfy-row">

                                        <?php
                                            //$q1 = mysqli_query($con, "select * from job_company");
                                            //$countpage = mysqli_num_rows($q1);

                                            $per_page = 10;
                                            if (isset($_GET['page'])) {
                                                $page = $_GET['page'];
                                            } else {
                                                $page = 1;
                                            }
                                            $start_from = ($page - 1) * $per_page;


                                            $query = "select * from  job_seeker_details LIMIT $start_from,  $per_page";
                                            $run = mysqli_query($con, $query);
                                            while ($row = mysqli_fetch_array($run)) {

                                                $id = $row['id'];
                                                $fname = $row['fname'];
                                                $lname = $row['lname'];
                                                $img_name = $row['img_name'];
                                                $post = $row['job_profile'];
                                                $company_name = $row['company_name'];
                                                $company_location = $row['company_location'];
                                                $salary = $row['salary'];


                                            ?>
                                        <li class="careerfy-column-6">
                                            <div class="careerfy-employer-resumes-wrap">
                                                <figure>
                                                    <a href="#" class="careerfy-resumes-thumb"><img
                                                            src="extra-images/<?php echo $img_name ?>" alt=""></a>
                                                    <figcaption>
                                                        <h2><a href="#"><?php echo $fname . " " . $lname ?></a> <a
                                                                href="#" class="careerfy-resumes-download"><i
                                                                    class="careerfy-icon careerfy-download-arrow"></i>
                                                                Download CV</a></h2>
                                                        <span class="careerfy-resumes-subtitle"><?php echo $post ?> at
                                                            <a href="#"><?php echo $company_name ?></a></span>
                                                        <ul>
                                                            <li>
                                                                <span>Location:</span>
                                                                <?php echo $company_location ?>
                                                            </li>
                                                            <li>
                                                                <span>Current Salary:</span>
                                                                $<?php echo $salary ?>/<small>p.a minimum</small>
                                                            </li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                                <ul class="careerfy-resumes-options">
                                                    <li><a href="#"><i class="careerfy-icon careerfy-mail"></i>
                                                            Message</a></li>
                                                    <li><a href="#?u_id=<?php echo $id ?>"><i
                                                                class="careerfy-icon careerfy-user-1"></i> View
                                                            Profile</a></li>
                                                    <li><a href="#"><i class="careerfy-icon careerfy-linkedin-1"></i>
                                                            LinkedIn</a></li>
                                                </ul>
                                            </div>
                                        </li>

                                        <?php
                                            }
                                            ?>
                                    </ul>
                                </div>

                                <!-- Pagination -->
                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <?php
                                            $query5 = "select * from  job_seeker_details";
                                            $result5 = mysqli_query($con, $query5);
                                            $total_record = mysqli_num_rows($result5);
                                            $total_pages = ceil($total_record / $per_page);

                                            echo "
                                                <li><a href='employer-dashboard-resumes.php?page=1'>" . ' ' . "</a></li>";

                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo "
                                                    <li><a href='employer-dashboard-resumes.php?page=" . $i . "'>" . $i . "</a></li>";
                                            }

                                            echo "
                                                    <li><a href='employer-dashboard-resumes.php?page=$total_pages'>" . ' ' . "</a></li>";


                                            ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section -->

</div>
<!-- Main Content -->

<!-- Footer -->
<?php
    include 'include/footer.php';
}
?>