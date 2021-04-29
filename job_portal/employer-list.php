<?php
include 'include/header.php';
include '../admin/assets/_dbconnect.php';
include '../admin/assets/_functions.php';
?>
<!-- Header -->

<!-- Main Content -->
<div class="careerfy-main-content">
  <!-- Main Section -->
  <div class="careerfy-main-section careerfy-top-full">
    <div class="container">
      <div class="row">
        <aside class="careerfy-column-3">
          <div class="careerfy-typo-wrap">
            <form class="careerfy-search-filter">
              <div class="careerfy-search-filter-wrap careerfy-without-toggle">
                <h2><a href="#">Top Employer</a></h2>
                <div class="careerfy-search-box">
                  <input
                    value="Search"
                    onblur="if(this.value == '') { this.value ='Search'; }"
                    onfocus="if(this.value =='Search') { this.value = ''; }"
                    type="text"
                  />
                  <input type="submit" value="" />
                  <i class="careerfy-icon careerfy-search"></i>
                </div>

                <div class="careerfy-location-box">
                  <input value="All Locaions" type="text" />
                  <i class="careerfy-icon careerfy-location"></i>
                </div>
              </div>
              <!-- <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                <h2><a href="#" class="careerfy-click-btn">Last Activity</a></h2>
                                <div class="careerfy-checkbox-toggle">
                                    <ul class="careerfy-checkbox">
                                        <li>
                                            <input type="checkbox" id="r5" name="rr" />
                                            <label for="r5"><span></span>Last Hour</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r6" name="rr" />
                                            <label for="r6"><span></span>Last 24 hours</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r7" name="rr" />
                                            <label for="r7"><span></span>Last 7 days</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r8" name="rr" />
                                            <label for="r8"><span></span>Last 14 days</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r9" name="rr" />
                                            <label for="r9"><span></span>Last 30 days</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r50" name="rr" />
                                            <label for="r50"><span></span>All</label>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
              <div
                class="careerfy-search-filter-wrap careerfy-search-filter-toggle"
              >
                <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                <div class="careerfy-checkbox-toggle">
                  <ul class="careerfy-checkbox list-group">
                    <?php
                                        // $sql5 = "SELECT * FROM job_company";
                                        // $res5 = $con->query($sql5); // while
                    ($row5 = $res5->fetch_assoc()) { // $id = $row5['id']; //
                    $industry_type_id = $row5['industry_type_id']; //
                    $job_func_area_id = $row5['job_func_area_id']; $sql6 =
                    "SELECT * FROM job_func_area limit 10"; $res6 =
                    mysqli_query($con, $sql6); while ($row6 =
                    mysqli_fetch_assoc($res6)) { $functional_area =
                    $row6['functional_area']; $id = $row6['id']; ?>
                    <li class="list-group-item">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="r17"
                            name="rr"
                            value="<?php echo $id; ?>"
                          />
                          <?php echo $functional_area; ?>
                        </label>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                  <!-- <li>
                                            <input type="checkbox" id="r18" name="rr" />
                                            <label for="r18"><span></span>Banking</label>
                                            <small>2</small>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r19" name="rr" />
                                            <label for="r19"><span></span>Charity & Voluntary</label>
                                            <small>6</small>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r20" name="rr" />
                                            <label for="r20"><span></span>Digital & Creative</label>
                                            <small>4</small>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r21" name="rr" />
                                            <label for="r21"><span></span>Estate Agency</label>
                                            <small>19</small>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r22" name="rr" />
                                            <label for="r22"><span></span>Graduate</label>
                                            <small>5</small>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r23" name="rr" />
                                            <label for="r23"><span></span>IT Contractor</label>
                                            <small>10</small>
                                        </li> -->

                  <a href="#" class="careerfy-seemore">+see more</a>
                </div>
              </div>
              <div
                class="careerfy-search-filter-wrap careerfy-search-filter-toggle"
              >
                <h2><a href="#" class="careerfy-click-btn">location</a></h2>
                <div class="careerfy-checkbox-toggle">
                  <ul class="careerfy-checkbox">
                    <li>
                      <input type="checkbox" id="r11" name="rr" />
                      <label for="r11"><span></span>Mumbai</label>
                      <small>13</small>
                    </li>
                    <li>
                      <input type="checkbox" id="r12" name="rr" />
                      <label for="r12"><span></span>Delhi</label>
                      <small>4</small>
                    </li>
                    <li>
                      <input type="checkbox" id="r13" name="rr" />
                      <label for="r13"><span></span>Kerela</label>
                      <small>12</small>
                    </li>
                    <li>
                      <input type="checkbox" id="r14" name="rr" />
                      <label for="r14"><span></span>Pune</label>
                      <small>22</small>
                    </li>
                    <li>
                      <input type="checkbox" id="r15" name="rr" />
                      <label for="r15"><span></span>Haryana</label>
                      <small>5</small>
                    </li>
                    <li>
                      <input type="checkbox" id="r16" name="rr" />
                      <label for="r16"><span></span>Lucknow</label>
                      <small>20</small>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </aside>

        <div class="careerfy-column-9">
          <div id="results" class="careerfy-typo-wrap">
            <!-- FilterAble -->
            <div class="careerfy-filterable">
              <?php
                            $sql1 = "SELECT * FROM job_company";
                            $res1 = mysqli_query($con, $sql1);
                            $result = 0;
                            while ($row3 = mysqli_fetch_array($res1)) {

                                $company_id1 = $row3['id'];
                                $query3 = "select company from job_post where company='$company_id1'";
                                $run3 = mysqli_query($con, $query3);
                                $count1 = mysqli_num_rows($run3);
                                if ($count1 >
              0) $result = $result + 1; } ?>
              <h2>
                Showing 0-12 of
                <?php echo $result ?>
                results
              </h2>
              <ul>
                <li>
                  <i class="careerfy-icon careerfy-sort"></i>
                  <div class="careerfy-filterable-select">
                    <select>
                      <option>Sort</option>
                      <option>Sort</option>
                      <option>Sort</option>
                    </select>
                  </div>
                </li>
                <!-- <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a></li>
                                <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li> -->
              </ul>
            </div>

            <!-- Employer Listing -->
            <div
              class="careerfy-employer careerfy-employer-list" id="employertable-data"
>
              <ul class="careerfy-row"></ul>
            </div>

            <!-- Pagination -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Section -->
</div>
<!-- Main Content -->

<script type="text/javascript">
  $(document).ready(function () {
    function loadTable(page) {
      $.ajax({
        url: "pagination/employerPagination.php",
        type: "POST",
        data: {
          page_no: page,
        },
        success: function (data) {
          $("#employertable-data").html(data);
        },
      });
    }
    loadTable();

    //Pagination Code
    $(document).on("click", "#pagination a", function (e) {
      e.preventDefault();
      var page_id = $(this).attr("id");

      loadTable(page_id);
    });
  });
</script>

<!-- Footer -->
<?php
include 'include/footer.php';
?>
