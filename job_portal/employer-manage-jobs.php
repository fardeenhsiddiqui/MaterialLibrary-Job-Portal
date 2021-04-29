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
            <li><a href="employer-manage-jobs.php">Pages</a></li>
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
                                <li><a href="employer-dashboard.php"><i class="careerfy-icon careerfy-user"></i> Company
                                        Profile</a></li>
                                <li class="active"><a href="employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
                                <!-- <li><a href="employer-dashboard-transactions.php"><i class="careerfy-icon careerfy-salary"></i> Transactions</a></li> -->
                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>
                                <li><a href="employer-dashboard-resumes.php"><i
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
                                    <h2>Manage Jobs</h2>
                                    <form class="careerfy-employer-search">
                                        <input value="Search orders"
                                            onblur="if(this.value == '') { this.value ='Search orders'; }"
                                            onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </form>
                                </div>
                                <!-- Manage Jobs -->
                                <div class="careerfy-managejobs-list-wrap">
                                    <div class="careerfy-managejobs-list">
                                        <!-- Manage Jobs Header -->
                                        <div class="careerfy-table-layer careerfy-managejobs-thead">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">Job Title</div>
                                                <div class="careerfy-table-cell">Applications</div>
                                                <div class="careerfy-table-cell">Featured</div>
                                                <div class="careerfy-table-cell">Status</div>
                                                <div class="careerfy-table-cell">Actions</div>
                                            </div>
                                        </div>

                                        <!-- Manage Jobs Body -->
                                        <?php
                                            //$q1 = mysqli_query($con, "select * from job_post");
                                            //$countpage = mysqli_num_rows($q1);

                                            $per_page = 10;
                                            if (isset($_GET['page'])) {
                                                $page = $_GET['page'];
                                            } else {
                                                $page = 1;
                                            }
                                            $start_from = ($page - 1) * $per_page;


                                            $query = "select * from job_post LIMIT $start_from,  $per_page";
                                            $run = mysqli_query($con, $query);
                                            while ($row = mysqli_fetch_array($run)) {

                                                $id = $row['id'];
                                                $jobtitle = $row['jobtitle'];
                                                $createdat = $row['createdat'];
                                                $address = $row['address'];
                                                $vacancy = $row['vacancy'];
                                                $company = $row['company'];

                                                $query1 = "select * from job_company where id='$company'";
                                                $run1 = mysqli_query($con, $query1);
                                                $row1 = mysqli_fetch_array($run1);
                                                $company_name = $row1['company_name'];
                                                $website = $row1['website'];
                                            ?>

                                        <div class="careerfy-table-layer careerfy-managejobs-tbody">
                                            <div class="careerfy-table-row">
                                                <div class="careerfy-table-cell">
                                                    <h6><a href="#"><?php echo $company_name ?></a></h6>
                                                    <ul>
                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Created:
                                                            <span><?php echo $createdat ?></span>
                                                        </li>

                                                        <li><i class="careerfy-icon careerfy-calendar"></i> Expiry:
                                                            <span>Dec 9, 2017</span>
                                                        </li>

                                                        <li><i class="careerfy-icon careerfy-maps-and-flags"></i>
                                                            <?php echo $address ?></li>

                                                        <li><i
                                                                class="careerfy-icon careerfy-filter-tool-black-shape"></i>
                                                            <a href="#"><?php echo $jobtitle ?></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="careerfy-table-cell"><a href="#"
                                                        class="careerfy-managejobs-appli"><?php echo $vacancy ?>
                                                        Application(s)</a></div>

                                                <div class="careerfy-table-cell"><i class="fa fa-star-o"></i></div>

                                                <div class="careerfy-table-cell">
                                                    <span class="careerfy-managejobs-option">
                                                        <?php
                                                                if ($row['status'] == 1) {
                                                                    echo "<span class='badge btn btn-sm btn-primary badge-complete' style='color:black;'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
                                                                } else {
                                                                    echo "<span class='badge btn btn-sm btn-secondary badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
                                                                }
                                                                ?>
                                                    </span>
                                                </div>

                                                <div class="careerfy-table-cell">s
                                                    <div class="careerfy-managejobs-links">
                                                        <a href="<?php echo $website ?>"
                                                            class="careerfy-icon careerfy-view"></a>
                                                        <a href="edit-manage-jobs.php?id=<?php echo $id ?>"
                                                            class="careerfy-icon careerfy-edit"></a>
                                                        <a href="employer-manage-jobs.php?id=<?php echo $id ?>"
                                                            class="careerfy-icon careerfy-rubbish"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Pagination -->


                                <div class="careerfy-pagination-blog">
                                    <ul class="page-numbers">
                                        <?php
                                            $query5 = "select * from job_post";
                                            $result5 = mysqli_query($con, $query5);
                                            $total_record = mysqli_num_rows($result5);
                                            $total_pages = ceil($total_record / $per_page);

                                            echo "<li><a href='employer-manage-jobs.php?page=1'>" . ' ' . "</a></li>";

                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo "<li><a href='employer-manage-jobs.php?page=" . $i . "'>" . $i . "</a></li>";
                                            }

                                            echo "<li><a href='employer-manage-jobs.php?page=$total_pages'>" . ' ' . "</a></li>";
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
<?php
if (isset($_GET['id'])) {

    $delete_id = $_GET['id'];
    $delete = "delete from job_post where id='$delete_id'";
    $d_run = mysqli_query($con, $delete);

    if ($run) {
        echo "<script>window.open('employer-manage-jobs.php','_self')</script>";
    }
}

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'status') {
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $update_status_sql = "update job_post set status='$status' where id='$id'";
        mysqli_query($con, $update_status_sql);
    }
}
?>