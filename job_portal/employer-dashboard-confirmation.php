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
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li>Candidates</li>
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
                                        src="extra-images/employer-dashboard-1.png" alt=""></a>
                                <figcaption>
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
                                        <input type="file" class="careerfy-upload" />
                                    </div>
                                    <h2>Graveholdings</h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                                        Profile</a></li>

                                <li><a href="#employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li><a href="employer-dashboard-resumes.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

                                <li class="active"><a href="employer-dashboard-newjob.php"><i
                                            class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>

                                <li><a href="#"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
                                </li>

                                <li><a href="signout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i
                                            class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <!-- <li><a href="employer-dashboard-packages.php"><i
                                            class="careerfy-icon careerfy-credit-card-1"></i> Packages</a></li> -->
                                <!-- <li><a href="employer-manage-jobs.php"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li> -->
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
                                    <h2>Post a New Job</h2>
                                </div>
                                <!-- New Job -->
                                <nav class="careerfy-employer-jobnav">
                                    <ul>
                                        <li><a href="employer-dashboard-newjob.php"><i
                                                    class="careerfy-icon careerfy-briefcase-1"></i> <span>Job
                                                    Detail</span></a></li>
                                        <!--<li><a href="employer-dashboard-pkgpayment.php"><i class="careerfy-icon careerfy-credit-card"></i> <span>Package & Payments</span></a></li>-->
                                        <li class="active"><a href="employer-dashboard-confitmation.php"><i
                                                    class="careerfy-icon careerfy-checked"></i>
                                                <span>Confirmation</span></a></li>
                                    </ul>
                                </nav>
                                <!-- Confitmation -->
                                <div class="careerfy-employer-confitmation">
                                    <img src="images/employer-confirmation-icon.png" alt="">
                                    <h2>Thank you for submitting</h2>
                                    <p>Thank you for submitting, your job has been published. If you need help please
                                        contact us via email contact@inwavethemes.com</p>
                                    <div class="clearfix"></div>
                                    <a href="#">Dashboard</a>
                                    <a href="#">View Job</a>
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
?>