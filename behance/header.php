<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800|Poppins:700" rel="stylesheet">

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
    <style>
    #page{
         margin-top: 20px;
     }
     h1 {
  color: #E5E5E5;
  font-family: 'Poppins', sans-serif;
 
  font-weight: 700;
}

.converter-wrapper {
  margin: 0 auto;
  width: 100%;
  max-width: 600px;
  text-align: center;
  padding: 10px;
  box-sizing: border-box;
}

.converter-wrapper input {
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  width: 100%;
  text-align: center;
  margin-top: 10px;
  height: 40px;
  box-sizing: border-box;
}

.converter-wrapper span {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  width: 100%;
}

.converter-wrapper span select {
  background-color: #263648;
  color: #fff;
  font-size: inherit;
  padding: 10px;
  width: 100%;
  border: 0;
  margin: 0;
  border-radius: 0px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: none; /* hide default arrow in chrome OSX */
}

.converter-wrapper span::before,
.converter-wrapper span::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.converter-wrapper span::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .625em;
  line-height: 1;
  right: 1.5em;
  top: 50%;
  margin-top: -.5em;
  color: #131B24;
}

.converter-wrapper span::before { /*  Custom dropdown arrow cover */
  width: 2.5em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0;
  background-color: #202E3C;
}

.converter-side-a,
.converter-side-b {
  float: left;
  margin-top: 10px;
  box-sizing: border-box;
  width: 45%;
}

.converter-equals {
  float: left;
  box-sizing: border-box;
  width: 10%;
  color: #FFF;
  font-size: 2.4em;
  line-height: 0;
  text-align: center;
}

.converter-side-a {
  padding-right: 10px;
}

.converter-side-b {
  padding-left: 10px;
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
                  <a class="nav-link" id="unit_calculator"><i class="fas fa-drafting-compass"></i></a>
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
               <li data-tooltip="tooltip" data-placement="left" title="BOQ/ Coming Soon">
                  <a class="nav-link"><i class="fas fa-star-of-david"></i></a>
               </li>
            </ul>
        </div>

        <!--====== Main Header ======-->
      <header class="header--style-2">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav-wrapper" >
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
            <nav class="secondary-nav-wrapper" >
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
                                      <ul style="width:170px; margin-top: 20px; ">
                                          <li class="has-dropdown has-dropdown--ul-left-100"style="color:black">

                                              <a href="#" id="student_form">Student</a>
                                              <a href="#" id="arch_form">Architect</a>
                                              <a href="#" id="distri_form">Distributor</a>
                                              <a href="#" id="brand_form">Brand</a>
                                              <a href="#" id="contract_form">Contractor</a>
                                              <a href="#" id="individual_form">Individual</a>
                                             
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
                                          <ul style="width:170px; margin-top:20px;">
                                              <li class="has-dropdown has-dropdown--ul-left-100">
                                                  <a href="">Architect<i class="u-s-m-l-6"></i></a>
                                                  <a href="">Distributor<i class="u-s-m-l-6"></i></a>
                                                  <a href="">Contractor<i class="u-s-m-l-6"></i></a>
                                                  <a href="">Company<i class="u-s-m-l-6"></i></a>
                                                 
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="has-dropdown"style="color:black">

                                          <a>COLLABORATE<i class="fas fa-angle-down u-s-m-l-6"></i></a>
  
                                          <!--====== Dropdown ======-->
  
                                          <span class="js-menu-toggle"></span>
                                          <ul style="width:170px; margin-top: 20px;">
                                              <li class="has-dropdown has-dropdown--ul-left-100">
  
                                                  <a href="">IMPORT<i class=" u-s-m-l-6"></i></a>
                                                  <a href="">EXPORT<i class="u-s-m-l-6"></i></a>
                                                 
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

                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
      </header>

