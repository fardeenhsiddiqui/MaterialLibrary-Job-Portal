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