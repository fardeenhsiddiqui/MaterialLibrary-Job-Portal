<?php
include('include/header.php');
include('../admin/assets/_dbconnect.php');
include('../admin/assets/_functions.php');
$query=mysqli_query($con, "SELECT * FROM job_seeker_details");

?>

<div id="app">
    <div class="fixed-list">
        <ul class="nav" id="init-scrollspy">
            <li data-tooltip="tooltip" data-placement="left" title="Calculator">
                <a href="#" class="nav-link" id="calculate"><i class="fas fa-calculator"></i></a>
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


    <!-- Header -->

    <!-- SubHeader -->

    <!-- SubHeader -->

    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-top-full">
            <div class="container">
                <div class="row">

                    <aside class="careerfy-column-3">
                        <div class="careerfy-typo-wrap">
                            <form class="careerfy-search-filter">

                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r17" name="rr" />
                                                <label for="r17"><span></span>Accountancy</label>
                                                <small>10</small>
                                            </li>

                                        </ul>
                                        <a href="#" class="careerfy-seemore">+see more</a>
                                    </div>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Location</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <?php
                                                    // $sql=mysqli_query($con, "SELECT * FROM cities");
                                                    // while($city=mysqli_fetch_assoc($sql)){
                                                ?>
                                            <li>
                                                <input type="checkbox" id="r17" name="rr" />
                                                <label for="r17"><span></span>dgf</label>
                                                <!-- <small>10</small> -->
                                            </li>
                                            <?php
                                                // }
                                               ?>
                                        </ul>
                                        <a href="#" class="careerfy-seemore">+see more</a>
                                    </div>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Applying for role</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r17" name="rr" />
                                                <label for="r17"><span></span>Accountancy</label>
                                                <small>10</small>
                                            </li>

                                        </ul>
                                        <a href="#" class="careerfy-seemore">+see more</a>
                                    </div>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Skill Set</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r11" name="rr" />
                                                <label for="r11"><span></span>HTML</label>
                                                <small>13</small>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    
                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">
                            <!-- FilterAble -->
                            <div class="careerfy-filterable">
                                <h2>Showing 0-12 of 37 results</h2>
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
                                        <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li>-->
                                </ul>
                            </div>
                            <!-- Candidate Listings -->

                            <div class="careerfy-candidate careerfy-candidate-default " id="table-data">
                                <ul class="careerfy-row list">

                                </ul>
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
    $(document).ready(function() {
        function loadTable(page) {
            $.ajax({
                url: "pagination/candidatePagination.php",
                type: "POST",
                data: {
                    page_no: page
                },
                success: function(data) {
                    $("#table-data").html(data)
                }
            });
        }
        loadTable();

        //Pagination Code
        $(document).on("click", "#pagination a", function(e) {
            e.preventDefault();
            var page_id = $(this).attr("id");

            loadTable(page_id);
        })
    });
    </script>

    <!-- Footer -->
    <?php
        include'include/footer.php';
        ?>