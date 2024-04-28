<?php

require ("inc/essentials.php");
require ("inc/db_config.php");
adminLogin();
// session_regenerate_id(true);





//seen dans la table   user_queries (contacte)
if (isset($_GET['seen'])) {

    $frm_data = filteration($_GET);
    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i')) {
            alert('success', 'Marked all as read');
        } else {
            alert('error', 'Operation Failed');
        }

    } else {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1, $frm_data['seen']];
        if (update($q, $values, 'ii')) {
            alert('success', 'Marked as read');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}

//seen dans la table   user_queries (contacte)
if (isset($_GET['dell'])) {

    $frm_data = filteration($_GET);
    if ($frm_data['dell'] == 'all') {
        $q = "DELETE FROM `user_queries`";
        if (mysqli_query($con, $q)) {
            alert('success', 'All data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    } else {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['dell']];
        if (delete($q, $values, 'i')) {
            alert('success', 'Data deleted!');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features && Facilities</title>
    <link rel="stylesheet" hrCarouselef="./css/common.css">
    <?php require ("inc/links.php"); ?>


    <style>
    #dashboard-menu {
        position: fixed;
        height: 100%;
        z-index: 11;
    }

    @media screen and (max-width : 991px) {
        #dashboard-menu {
            height: auto;
            width: 100%;
        }

        #main-content {
            margin-top: 60px;
        }

    }

    .custom-alert {
        position: fixed;
        top: 80px;
        right: 25px;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgb(36, 36, 36);
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    </style>
</head>

<body class="bg-light">


    <?php require ("inc/header.php"); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">FEATURES & FACILITIES</h3>

                <!-- CAROUSEL secetion  Features -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <!-- ***********   title && button ************** -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#features-s"><i class="bi bi-plus-square"></i>
                                Add
                            </button>
                        </div>

                        <!-- *************table elemet de base de donnwe****************** -->
                        <div class="table-responsive-md" style="height:350px; overflow-y:scroll;">
                            <table class=" table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light ">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data">
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <!-- CAROUSEL secetion Facilities  -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <!-- ***********   title && button ************** -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Facilities</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#facility-s"><i class="bi bi-plus-square"></i>
                                Add
                            </button>
                        </div>

                        <!-- *************table elemet de base de donnwe****************** -->
                        <div class="table-responsive-md" style="height:350px; overflow-y:scroll;">
                            <table class=" table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light ">
                                        <th scope="col">#</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" width="40%">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="facilities-data">
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>




    <!-- ********************   modal de bootstrap ************************* -->
    <!--  ***************** features  modal  *****************-->
    <div class="modal fade" id="features-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Features</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class=" mb-3">
                            <label class="form-label fw-bold ">Name</label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                        </div>
                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>

                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- *****************   facilities  modal  ********************* -->
    <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="facility_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add facility</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class=" mb-3">
                            <label class="form-label fw-bold ">Name</label>
                            <input type="text" name="facility_name" class="form-control shadow-none"
                                id="member_name_inp" required>
                        </div>

                        <div class=" mb-3 ">
                            <label class="form-label fw-bold ">Icon</label>
                            <input type="file" name="facility_icon" class="form-control shadow-none" accept=".svg "
                                required>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">Description </label>
                            <textarea name="facility_message" class="form-control shadow-non" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>

                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>







    <?php require ("inc/scripts.php"); ?>
    <script src="scripts/features_facilities.js"></script>

</body>

</html>