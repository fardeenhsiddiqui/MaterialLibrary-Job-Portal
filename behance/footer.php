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

        <!--======Unit Calculate ======-->
        <div class="bg-unit_calc">
               <div class="disp-unit_calc">
                  
                  <div class="unit_calc">
                     <div class="close" id="close_unit_calc"><a href=""><h1 style="color: black;">X</h1></a></div>
                     <div class="converter-wrapper">
                        <h1 style="color:orangered;">UNIT CONVERTER</h1>
                      
                        <form name="property_form">
                          <span>
                            <select class="select-property" name="the_menu" size=1 onChange="UpdateUnitMenu(this, document.form_A.unit_menu); UpdateUnitMenu(this, document.form_B.unit_menu)">
                            </select>
                          </span>
                        </form>
                      
                        <div class="converter-side-a">
                          <form name="form_A" onSubmit="return false">
                            <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0" onKeyUp="CalculateUnit(document.form_A, document.form_B)">
                            <span>
                              <select name="unit_menu" onChange="CalculateUnit(document.form_B, document.form_A)">
                              </select>
                            </span>
                          </form>
                        </div> <!-- /converter-side-a -->
                        
                       <div class="converter-equals">
                         <p>=</p>
                       </div> <!-- /converter-side-a -->
                      
                        <div class="converter-side-b">
                          <form name="form_B" onSubmit="return false">
                            <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0" onkeyup="CalculateUnit(document.form_B, document.form_A)">
                            <span>
                              <select name="unit_menu" onChange="CalculateUnit(document.form_A, document.form_B)">
                              </select>
                            </span>
                          </form>
                        </div> <!-- /converter-side-b -->
                      </div><!-- /converter-wrapper -->
                  </div>
               </div>
            </div> 






        <!--======SIGN UP POPUP ======-->
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
        <!--======END-SIGN UP POPUP ======-->
        <!-- ==============--------Calculator -------==================-->

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

<!-------------------popup form of student ------------------------->
      <div class="bg-search-form">
         <div class="disp-form">
            <div class="close" id="close_form"><a href=""><h2>X</h2></a></div>
            <div id="form" role="application">
               <div id="form_fields">
                  <h1>PERSONAL INFORMATION</h1>
                  <form class="l-f-o__form">
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                          <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="First Name"></div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-lname">LAST NAME *</label>

                          <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Last Name"></div>
                      <div class="gl-inline">
                          <div class="u-s-m-b-30">

                              <!--====== Date of Birth Select-Box ======-->

                              <span class="gl-label">BIRTHDAY</span>
                              <div class="gl-dob"><select class="select-box select-box--primary-style">
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
                              <!--====== End - Date of Birth Select-Box ======-->
                          </div>
                        </div>
                        <div class="gl-inline">
                        <div class="u-s-m-b-30">

                           <label class="gl-label" for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                               <option selected>Select</option>
                               <option value="male">Male</option>
                               <option value="male">Female</option>
                           </select>
                        </div>
                     </div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-email">E-MAIL *</label>

                          <input class="input-text input-text--primary-style" type="email" id="reg-email" placeholder="Enter E-mail"></div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-email">Contact *</label>

                          <input class="input-text input-text--primary-style" type="tel" placeholder="Contact"></div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-email">Adhar Card*</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Adhar Card"></div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="reg-email">Professional Identity*</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Professional Identity">
                      </div>
                      <div class="u-s-m-b-30">
                          <span class="gl-label">WHO ARE YOU? *</span>
                          <div class="gl-dob">
                              <select class="select-box select-box--primary-style" onchange="myfunction()" id="myselect" >
                                  <option selected>Are You A?</option>
                                  <option value="Freelancer" >Freelancer</option>
                                  <option value="Employee">Employee</option>
                                  <option value="Firm">Firm</option>
                              </select>
                          </div>
                      </div>
                      <div id="field">
                      <div class="u-s-m-b-30" id="experience">

                          <label class="gl-label" for="reg-email">Experience</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Experience" >
                      </div>   
                      <div class="u-s-m-b-30" id="firm">

                          <label class="gl-label" for="reg-email">Firm Name</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Firm Name" >
                      </div>   
                      <div class="u-s-m-b-30"  id="company">

                          <label class="gl-label" for="reg-email">Company Details</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Company Detail">
                      </div>   
                      <div class="u-s-m-b-30" id="gst">

                          <label class="gl-label" for="reg-email">GST Number</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="GST Number" >
                      </div>   
                      </div>
                      <div class="u-s-m-b-30">

                          <label class="gl-label" for="">Region Of Practice*</label>

                          <input class="input-text input-text--primary-style" type="text"  placeholder="Region of Practice" id="region">
                      </div>  
                      <div class="gl-inline"> 
                      <div class="u-s-m-b-15">

                          <button class="btn btn--e-transparent-brand-b-2" type="submit" >Submit</button>
                      </div>
                      <div class="u-s-m-b-15" onclick="reset()">

                          <button class="btn btn--e-transparent-brand-b-2" type="reset" >Reset</button>
                      </div>
                     </div>
                      
                  </form>
              </div> 
            </div>
         </div>   
      </div>  

    </div>
    <!--====== End - Main App ======-->

    <!--==========Student Form=========-->

         
    <div class="bg-student-form">
      <div class="disp-student-form">
         <div class="close" id="close_student"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>STUDENT</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========Student Form=========-->

    <!--==========Architecture Form=========-->

         
    <div class="bg-architect-form">
      <div class="disp-architect-form">
         <div class="close" id="close_architect"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>Architect</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========Architecture Form=========-->
    <!--==========Distributor Form=========-->

         
    <div class="bg-distributor-form">
      <div class="disp-distributor-form">
         <div class="close" id="close_distributor"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>Distributor</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========distributor Form=========-->
    <!--==========Brand Form=========-->

         
    <div class="bg-brand-form">
      <div class="disp-brand-form">
         <div class="close" id="close_brand"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>Brand</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========Brand Form=========-->
    <!--==========Brand Form=========-->

         
    <div class="bg-contractor-form">
      <div class="disp-contractor-form">
         <div class="close" id="close_contractor"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>Contractor</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========Brand Form=========-->
    <!--==========Individual Form=========-->

         
    <div class="bg-individual-form">
      <div class="disp-individual-form">
         <div class="close" id="close_individual"><a href=""><h2>X</h2></a></div>
      <form action="">
         <div id="form" role="application">
            <div id="form_fields">
               <h1>Individual</h1>
               <h4>Material Library</h4>
               <form class="l-f-o__form">
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-fname">NAME*</label>

                       <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Name"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Email*</label>

                       <input class="input-text input-text--primary-style" type="email" id="reg-fname" placeholder="Email"></div> 
                   <div class="u-s-m-b-30">

                       <label class="gl-label" for="reg-email">Mobile*</label>

                       <input class="input-text input-text--primary-style" type="tel" id="reg-fname" placeholder="Mobile No."></div> 
                   <div class="gl-inline"> 
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="submit" style="color: orangered; border: 2px solid orangered;" >Submit</button>
                     </div>
                     <div class="u-s-m-b-15">
                        <button class="btn btn--e-transparent-brand-b-2" type="reset" style="color: orangered; border: 2px solid orangered;" >Reset</button>
                     </div>
                  </div>
                   
               </form>
           </div> 
         </div>
      </form>
      </div>
  </div>
    <!--==========individual Form=========-->


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
    <script src="jquery-3.5.1.min.js"></script>

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


    <!--====== Noscript ======-->
    <!-- <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript> -->
</body>
</html>