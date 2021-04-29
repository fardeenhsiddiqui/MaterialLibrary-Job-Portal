<!DOCTYPE.php>
.php class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Portfolio Management System</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css"/>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/osahan.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <style>
        /* #myselect{
          width: 70%;  
        } */
        * {
          box-sizing: border-box;
        }
        
        body {
          background-color: #f1f1f1;
        }
        
        #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          font-family: Raleway;
          padding: 40px;
          width: 40%;
          min-width: 300px;
        }
        
        h1 {
          text-align: center;  
        }
        
        input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Raleway;
          border: 1px solid #aaaaaa;
        }
        
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
          background-color: #ffdddd;
        }
        
        /* Hide all steps by default: */
        .tab {
          display: none;
        }
        
        button {
          background-color: #4CAF50;
          color: #ffffff;
          border: none;
          padding: 10px 20px;
          font-size: 17px;
          font-family: Raleway;
          cursor: pointer;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        #prevBtn {
          background-color: #bbbbbb;
        }
        
        /* Make circles that indicate the steps of the form: */
        .step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;  
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
        }
        
        .step.active {
          opacity: 1;
        }
        
        /* Mark the steps that are finished and valid: */
        .step.finish {
          background-color: #4CAF50;
        }
        </style>
</head>
<body class="config" id="js-scrollspy-trigger">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">
        <div class="fixed-list">
            <ul class="nav" id="init-scrollspy">
               <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                  <a href="#" class="nav-link" id="calculate"><i  class="fas fa-calculator" ></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Unit Converter">
                  <a class="nav-link"><i class="fas fa-drafting-compass"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Money Converter">
                  <a class="nav-link"><i class="fas fa-rupee-sign"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="AR / Coming Soon">
                  <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="VR / Coming Soon">
                  <a class="nav-link"><i class="fas fa-vr-cardboard"></i></a>
               </li>
               <li data-tooltip="tooltip" data-placement="left" title="Vastu / Coming Soon">
                  <a class="nav-link"><i class="fas fa-star-of-david"></i></a>
               </li>
            </ul>
        </div>

        <!--====== Main Header ======-->
        <header class="header--style-2">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav-wrapper">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="index.php">

                            <img src="images/logo/logo-2.png" alt=""></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-2" type="text" id="main-search" placeholder="Search">

                            <button class="btn btn--icon main-search-button" type="submit" ><i class="fas fa-search"></i></button></form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">


                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-white">

                                    <li data-tooltip="tooltip" data-placement="left" title="">

                                        <a href="#" id="sign_up" ><i  class="fas fa-user-plus"></i>Sign Up</a></li>

                                    <li data-tooltip="tooltip" data-placement="left" title="">

                                        <a href="signin.php"><i class="fas fa-sign-in-alt"></i>Sign In</a></li>
                                    <li data-tooltip="tooltip" data-placement="left" title="">

                                        <a href="dashboard.php"><i class="fa fa-user"></i>Account</a></li>

                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                        <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav"style="margin-bottom: 40px;">

                        <!--====== Dropdown Main plugin ======-->
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2" >

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-white" style="margin-left: 125px;">
                                    <li class="has-dropdown" style="color:black">

                                        <a>WHO YOU ARE?<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class="has-dropdown has-dropdown--ul-left-100"style="color:black">

                                                <a href="form.php">Student<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <a href="form.php">Architect<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <a href="form.php">Distributor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <a href="form.php">Brand<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <a href="form.php">Contractor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <a href="form.php">Individual<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                               
                                            </li>
                                        </ul>
                                    </li>
                                    <li>

                                        <a href="shop_coming.php" target="__blank">SHOP</a></li>
                                    <li>

                                        <a href="job_portal.php" target="__blank">JOBS</a></li>
                                    <li>

                                        <a href="#">PORTFOLIO</a></li>

                                    <li>

                                        <a href="learn_coming.php" target="__blank">E-LEARNING</a></li>
                                        <li class="has-dropdown"style="color:black">

                                            <a>CONSULT<i class="fas fa-angle-down u-s-m-l-6"></i></a>
    
                                            <!--====== Dropdown ======-->
    
                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:170px">
                                                <li class="has-dropdown has-dropdown--ul-left-100">
    
                                                    <a href="form.php">Student<i class="fas fa-angle-down i-state-right u-s-m-l-6 "></i></a>
                                                    <a href="form.php">Architect<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                    <a href="form.php">Distributor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                    <a href="form.php">Contractor<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                    <a href="form.php">Company<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                   
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"style="color:black">

                                            <a>COLLABORATE<i class="fas fa-angle-down u-s-m-l-6"></i></a>
    
                                            <!--====== Dropdown ======-->
    
                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:170px">
                                                <li class="has-dropdown has-dropdown--ul-left-100">
    
                                                    <a href="form.php">IMPORT<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                    <a href="form.php">EXPORT<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                   
                                                </li>
                                            </ul>
                                        </li>
                                    </li>   
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop" type="button"></button>

                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                    <li>

                                        <a href="index.php"><i class="fas fa-home u-c-brand"></i></a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Anti Flash White Background ======-->
            <div class="bg-anti-flash-white">

                <!--====== White Container ======-->
                <div class="white-container">

                    <!--====== Section 1 ======-->
                    <div id="page-top">
                        <!-- Page Wrapper -->
                        <div id="wrapper">
                           <!-- Content Wrapper -->
                           <div id="content-wrapper" class="d-flex flex-column">
                              <!-- Main Content -->
                              <div id="content">
                                 <!-- Begin Page Content -->
                                 <div class="container-fluid">
                                    <div class="row" id="page">
                                        <form id="regForm" action="/action_page.php">
                                            <h1>SIGN UP - Designer</h1>
                                            <!-- One "tab" for each step in the form: -->
                                            <div class="tab">
                                              
                                              <p><input placeholder="First name" oninput="this.className = ''" name="fname"></p>
                                              <p><input placeholder="Last name" oninput="this.className = ''" name="lname"></p>
                                              <p><input placeholder="Email" oninput="this.className = ''" type="email"></p>
                                              <p><input placeholder="Mobile No." oninput="this.className = ''" type="tel"></p>
                                                <div class="u-s-m-b-30">
        
                                                    <label class="gl-label" for="gender">GENDER*</label>
                                                    <select class="select-box select-box--primary-style u-w-100" id="gender">
                                                        <option >Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="male">Female</option>
                                                    </select>
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">BIRTHDAY</span>
                                                    <div class="gl-dob"><select class="select-box select-box--primary-style" >
                                                            <option selected>Month</option>
                                                            <option value="January">January</option>
                                                            <option value="Feb">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select><select class="select-box select-box--primary-style">
                                                            <option selected>Day</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select><select class="select-box select-box--primary-style">
                                                            <option selected>Year</option>
                                                            <option value="1991">1965</option>
                                                            <option value="1991">1966</option>
                                                            <option value="1991">1967</option>
                                                            <option value="1991">1968</option>
                                                            <option value="1991">1969</option>
                                                            <option value="1991">1970</option>
                                                            <option value="1991">1971</option>
                                                            <option value="1991">1972</option>
                                                            <option value="1991">1973</option>
                                                            <option value="1991">1974</option>
                                                            <option value="1991">1975</option>
                                                            <option value="1991">1976</option>
                                                            <option value="1991">1977</option>
                                                            <option value="1991">1978</option>
                                                            <option value="1991">1979</option>
                                                            <option value="1991">1980</option>
                                                            <option value="1991">1981</option>
                                                            <option value="1991">1982</option>
                                                            <option value="1991">1983</option>
                                                            <option value="1991">1984</option>
                                                            <option value="1991">1985</option>
                                                            <option value="1991">1986</option>
                                                            <option value="1991">1987</option>
                                                            <option value="1991">1988</option>
                                                            <option value="1991">1989</option>
                                                            <option value="1991">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1991">1995</option>
                                                            <option value="1992">1996</option>
                                                            <option value="1993">1997</option>
                                                            <option value="1994">1998</option>
                                                            <option value="1991">1999</option>
                                                            <option value="1992">2000</option>
                                                            <option value="1993">2002</option>
                                                            <option value="1993">2003</option>
                                                            <option value="1993">2004</option>
                                                            <option value="1993">2005</option>
                                                            <option value="1993">2006</option>
                                                            <option value="1993">2007</option>
                                                            <option value="1993">2008</option>
                                                            <option value="1993">2009</option>
                                                            <option value="1993">2010</option>
                                                            <option value="1993">2011</option>
                                                            <option value="1993">2012</option>
                                                            <option value="1993">2013</option>
                                                            <option value="1993">2014</option>
                                                            <option value="1993">2015</option>
                                                            <option value="1993">2016</option>

                                                        </select></div>
                                                </div>
                                                
                                              <p><input placeholder="Password" oninput="this.className = ''" type="password"></p>
                                              <p><input placeholder="Confirm Password" oninput="this.className = ''" type="password"></p>
                                            </div>
                                            <div class="tab">
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">What do you hope to do here?*</span>
                                                    <div class="gl-dob">
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">Your Principle Job Role*</span>
                                                    <div class="gl-dob">
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">Your Industries*</span>
                                                    <div class="gl-dob">
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">Skills*</span>
                                                    <div class="gl-dob">
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label">Enter Prefered location for Job*</span>
                                                    <div class="gl-dob">
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                        <select class="select-box select-box--primary-style"id="myselect" >
                                                            <option selected>Op1</option>
                                                            <option value="" >op2</option>
                                                            <option value="">op3</option>
                                                            <option value="">op4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="tab">
                                                <div class="u-s-m-b-30">
                                                    <span class="gl-label"><h5>Biography*</h5></span>
                                                    <textarea name="biography" id="" cols="50" rows="10" minlength="1000" placeholder="Enter Your Biography( Minimum 300 words.)..............."></textarea>
                                                </div>
                                            </div>
                                            <div style="overflow:auto;">
                                              <div style="float:right;">
                                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                              </div>
                                            </div>
                                            <!-- Circles which indicates the steps of the form: -->
                                            <div style="text-align:center;margin-top:40px;">
                                              <span class="step"></span>
                                              <span class="step"></span>
                                              <span class="step"></span>
                                            </div>
                                          </form>
                                    </div>
                                    
                                 </div>
                                 
                                 <!-- /.container-fluid -->
                              </div>
                              
                              <!-- End of Main Content -->
                           </div>
                           <!-- End of Content Wrapper -->
                        </div>
                        
                        <!-- End of Page Wrapper -->
                        <!-- Scroll to Top Button-->
                        <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                        </a>
                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                 <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.php">Logout</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <!--====== End - Section 10 ======-->
                </div>
                <!--====== End - White Container ======-->
            </div>
            <!--====== End - Anti Flash White Background ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>Metro World Mall, Sector 56, Gurgaon ,Haryana</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 900 901 904</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>contact@materiallibrary.com</span></div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="dashboard.php">Account</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.php">Manufacturer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="about.php">About us</a></li>
                                                <li>

                                                    <a href="contact.php">Contact Us</a></li>
                                                <li>

                                                    <a href="index-2.php">Sitemap</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label></div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label></div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button></div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2021</span>

                                    <a href="index-2.php">Material Library</a>

                                    <span>All Right Reserved</span></div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.php">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.php">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.php">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.php">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.php">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.php">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span></div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt=""></div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.php">VIEW CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.php">PROCEED TO CHECKOUT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->

        <!--====== End - Newsletter Subscribe Modal ======-->
        <div class="bg-model">
            <div class="sign_up_content">
               <div class="close"><a href=""><h1>X</h1></a></div>
               <div class="btn1">
                  <img src="images/designer.png" alt=""><br>
                  <a href="signup_design.php">DESIGNER</a>
               </div>
               <div class="btn1">
                  <img src="images/hirer.png" alt=""><br>
                  <a href="signup_design.php">HIRER</a>
               </div>

            </div>   
         </div>
        <!--====== End - Modal Section ======-->
        <div class="bg-calc">
            <div class="disp-calc">
               <div class="close" id="close"><a href=""><h2>X</h2></a></div>
               <div id="calculator" role="application">
                  <!-- Screen -->
                  <div class="top">
                     <div class="screen" aria-labelledby="displayScreen"></div>
                  </div>
                  
                  <div class="keys" aria-labelledby="inputKeys">
                     <!-- operators and other keys -->
                     <span tabindex="0">7</span>
                     <span tabindex="0">8</span>
                     <span tabindex="0">9</span>
                     <span tabindex="0" class="operator">+</span>
                     <span tabindex="0">4</span>
                     <span tabindex="0">5</span>
                     <span tabindex="0">6</span>
                     <span tabindex="0" class="operator">-</span>
                     <span tabindex="0">1</span>
                     <span tabindex="0">2</span>
                     <span tabindex="0">3</span>
                    <span tabindex="0" class="operator">x</span>
                   <span tabindex="0" class="clear">C</span>
                     <span tabindex="0">0</span>
                     <span tabindex="0">.</span>
                     <span tabindex="0" class="operator">÷</span>
                   <span tabindex="0" class="eval">=</span>
                   <span tabindex="0" class="operator">^</span>
                  </div>
               </div>
            </div>   
         </div> 
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/osahan.min.js"></script>
    <script src="js/myjs.js"></script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").inne.php = "Submit";
          } else {
            document.getElementById("nextBtn").inne.php = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        </script>
        
</body>
<.php>