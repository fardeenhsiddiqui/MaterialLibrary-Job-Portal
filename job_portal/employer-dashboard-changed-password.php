<?php
ob_start();
session_start();
include('include/header.php'); 
include('../admin/assets/_dbconnect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query=mysqli_query($con, "SELECT * FROM users WHERE `user_id` ='$id'");
    $num=mysqli_num_rows($query);
    $res=mysqli_fetch_array($query);

    $query3 = "SELECT * FROM  job_company WHERE user_id='$id'";
    $res3 = mysqli_query($con, $query3);
    $res3 = mysqli_fetch_array($res3);

    if(isset($_POST['submit'])){
        $old_password=$_POST['old_password'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        
        if(password_verify($old_password, $res['password']) && $password==$cpassword && $old_password!=$password){
            $newpassword=password_hash($password, PASSWORD_DEFAULT);
            $update="UPDATE `users` SET `password`='$newpassword'";
            if(mysqli_query($con, $update)){
                echo '<div class="alert alert-success" role="alert">
                Password Updated!
                 </div>';
            }

        }
        else{
            echo '<div class="alert alert-primary" role="alert">
            Can not update Password!
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
                    <li><a href="#">Pages</a></li>
                    <li>Candidates</li>
                </ul>
            </div>
        </div>
        <!-- SubHeader -->

        <!-- Main Content -->
        <div class="careerfy-main-content">
            
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-dashboard-full">
                <div class="container">
                    <div class="row">

                    <aside class="careerfy-column-3">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dashboard-nav">
                            <figure>
                                <a href="#" class="employer-dashboard-thumb"><img
                                        src="extra-images/<?php echo $res3['logo']; ?>" alt=""></a>
                                <figcaption>
                                    <div class="careerfy-fileUpload">
                                        <span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span><span id="i_id" class="hidden"><?php echo $id ?></span>
                                        <input type="file" class="careerfy-upload" name="file" id="file"/>
                                        <span id="uploaded_image" class="hidden"></span>
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
                                        </script>
                                    </div>
                                    <h2><?php echo $res3['company_name']; ?></h2>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="employer-dashboard.php"><i
                                            class="careerfy-icon careerfy-user"></i> Company Profile</a></li>

                                <li><a href="employer-manage-jobs.php"><i
                                            class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>

                                <li><a href="employer-dashboard-applied-candidate.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Applied Candidates</a></li>

                                <li><a href="employer-dashboard-resumes.php"><i
                                            class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

                                <li><a href="employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i>
                                        Post a New Job</a></li>

                                <li  class="active"><a href="employer-dashboard-changed-password.php?id=<?php echo $id; ?>"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a>
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
                                <form class="careerfy-employer-dasboard" method="POST">
                                    <div class="careerfy-employer-box-section">
                                        <div class="careerfy-profile-title">
                                            <h2>Change Password</h2>
                                        </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-12">
                                                <label>Old Password *</label>
                                                <input value="Old Password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password" name="old_password">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>New Password *</label>
                                                <input value="Old Password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password" name="password">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Confirm New Password  *</label>
                                                <input value="Old Password" onblur="if(this.value == '') { this.value ='Old Password'; }" onfocus="if(this.value =='Old Password') { this.value = ''; }" type="password" name="cpassword">
                                            </li>
                                        </ul>
                                        <!-- <div class="careerfy-profile-title">
                                            <h2>Secuirty Questions</h2>
                                        </div>
                                        <ul class="careerfy-row careerfy-employer-profile-form">
                                            <li class="careerfy-column-6">
                                                <label>Question No1 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>What is your Mother Name?</option>
                                                        <option>What is your Mother Name?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="Katie Monree" onblur="if(this.value == '') { this.value ='Katie Monree'; }" onfocus="if(this.value =='Katie Monree') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Question No2 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Your place of Birth?</option>
                                                        <option>Your place of Birth?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="London" onblur="if(this.value == '') { this.value ='London'; }" onfocus="if(this.value =='London') { this.value = ''; }" type="text">
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Question No3 :</label>
                                                <div class="careerfy-profile-select">
                                                    <select>
                                                        <option>Your favorite Teacher Name?</option>
                                                        <option>Your favorite Teacher Name?</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="careerfy-column-6">
                                                <label>Answer :</label>
                                                <input value="Mateusz Dembek" onblur="if(this.value == '') { this.value ='Mateusz Dembek'; }" onfocus="if(this.value =='Mateusz Dembek') { this.value = ''; }" type="text">
                                            </li>
                                        </ul> -->
                                    </div>
                                    <input type="submit" name="submit" class="careerfy-employer-profile-submit" value="Update Password">
                                </form>
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
        include'include/footer.php';
            }
            else{
                header('location:signin.php');
                exit;
            }
        ?>