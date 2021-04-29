<?php
include('includes/_header.php');

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
        $update_status_sql = "update  job_seeker_details set status='$status' where id='$id'";
        mysqli_query($con, $update_status_sql);
    }

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "delete from  job_seeker_details where id='$id'";
        mysqli_query($con, $delete_sql);
    }

    if ($type == 'download') {
        $id = get_safe_value($con, $_GET['id']);
        $select = mysqli_query($con, "SELECT * FROM  job_seeker_details WHERE id='$id'");
        $res = mysqli_fetch_array($select);
        $file = "assets/files/" . $res['resume'];
        $filename = basename($res['resume']);
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/multipart');
            header('Content-Disposition: attachment; filename=$filename');
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: public');

            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            exit;
        }
    }
}

$sql = "SELECT * FROM  job_seeker_details";
$res = mysqli_query($con, $sql);
?>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title text-center">Users Details</h3>
                    </div>
                    <div class="card">
                        <div>
                            <h5 class="card-header">Manage Users Details</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead style="text-align:center">
                                    <tr>
                                        <th class="serial">SR</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email ID</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center">
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td class="serial"><?php echo $i++ ?></td>
                                        <td><?php echo $row['firstname'] ?></td>
                                        <td><?php echo $row['lastname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td>
                                            <?php
                                                if ($row['status'] == 1) {
                                                    echo "<span class='badge btn btn-sm btn-success badge-complete' style='color:black;'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
                                                } else {
                                                    echo "<span class='badge btn btn-sm btn-error badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
                                                }
                                                echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                                echo "<span class='badge badge-delete'><a href='?type=download&id=" . $row['id'] . "'>Download</a></span>";
                                                ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include('includes/_footer.php');
            ?>