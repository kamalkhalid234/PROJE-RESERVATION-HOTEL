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
    <link rel="stylesheet" href="./css/common.css">
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
                <h3 class="mb-4">ROOMS</h3>

                <!-- CAROUSEL secetion  Features -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <!-- ***********   title && button ************** -->
                        <div class="text-end mb-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#add-room"><i class="bi bi-plus-square"></i>
                                Add
                            </button>
                        </div>

                        <!-- *************table elemet de base de donnwe****************** -->
                        <div class="table-responsive-lg" style="height:450px; overflow-y:scroll;">
                            <table class=" table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light ">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Guests</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Acton</th>

                                    </tr>
                                </thead>
                                <tbody id="room-data">
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- ********************   modal de bootstrap ************************* -->
    <!--  ***************** Add rooms  modal  *****************-->
    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Adult (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Children (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>

                            <!--  affich les facilitieest feature enrooms admine formulaire -->
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold ">Features</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                           <div class='col-md-3 mb-1'>
                                             <label>
                                                 <input type='checkbox' name='features' value='$opt[id]'
                                                 class='form-check-input shadow-none'>
                                                 $opt[name]
                                              </label>
                                           </div>
                                        ";
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold ">Facilities</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                           <div class='col-md-3 mb-1'>
                                             <label>
                                                 <input type='checkbox' name='facilities' value='$opt[id]'
                                                 class='form-check-input shadow-none'>
                                                 $opt[name]
                                              </label>
                                           </div>
                                        ";
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none"></textarea>
                            </div>


                        </div>


                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>

                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--  ***************** Edit rooms  modal  *****************-->
    <div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_form" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Adult (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold ">Children (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>

                            <!--  affich les facilitieest feature enrooms admine formulaire -->
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold ">Features</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                           <div class='col-md-3 mb-1'>
                                             <label>
                                                 <input type='checkbox' name='features' value='$opt[id]'
                                                 class='form-check-input shadow-none'>
                                                 $opt[name]
                                              </label>
                                           </div>
                                        ";
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold ">Facilities</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                           <div class='col-md-3 mb-1'>
                                             <label>
                                                 <input type='checkbox' name='facilities' value='$opt[id]'
                                                 class='form-check-input shadow-none'>
                                                 $opt[name]
                                              </label>
                                           </div>
                                        ";
                                    }

                                    ?>

                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none"></textarea>
                            </div>

                            <input type="hidden" name="room_id">


                        </div>


                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>

                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>









    <?php require ("inc/scripts.php"); ?>
    <script>
    let add_room_form = document.getElementById('add_room_form');

    add_room_form.addEventListener('submit', function(e) {
        e.preventDefault();
        add_rooms();
    });

    //     let data = new FormData();
    //     data.append('add_room', '');
    //     data.append('name', add_room_form.elements['name'].value);
    //     data.append('area', add_room_form.elements['area'].value);
    //     data.append('price', add_room_form.elements['price'].value);
    //     data.append('quantity', add_room_form.elements['quantity'].value);
    //     data.append('adult', add_room_form.elements['adult'].value);
    //     data.append('children', add_room_form.elements['children'].value);
    //     data.append('desc', add_room_form.elements['desc'].value);


    //     let features = [];
    //     add_room_form.elements['features'].forEach(el => {
    //         if (el.checked) {
    //             features.push(el.value);

    //         }
    //     });

    //     let facilities = [];
    //     add_room_form.elements['facilities'].forEach(el => {
    //         if (el.checked) {
    //             facilities.push(el.value);

    //         }
    //     });

    //     data.append('features', JSON.stringify(features));
    //     data.append('facilities', JSON.stringify(facilities));

    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "ajax/rooms.php", true);

    //     xhr.onload = function() {

    //         var myModal = document.getElementById('add-room');
    //         var modal = bootstrap.Modal.getInstance(myModal);
    //         modal.hide();

    //         if (this.responseText == 1) {
    //             alert('success', 'New room added!');
    //             add_room_form.reset();
    //         } else {
    //             alert('error', 'Server  down 11 !');

    //         }
    //     }

    //     xhr.send(data);
    // }
    function add_rooms() {
        let add_room_form = document.getElementById('add_room_form');
        let data = new FormData();
        data.append('add_room', '');
        data.append('name', add_room_form.elements['name'].value);
        data.append('area', add_room_form.elements['area'].value);
        data.append('price', add_room_form.elements['price'].value);
        data.append('quantity', add_room_form.elements['quantity'].value);
        data.append('adult', add_room_form.elements['adult'].value);
        data.append('children', add_room_form.elements['children'].value);
        data.append('desc', add_room_form.elements['desc'].value);

        let features = [];
        add_room_form.elements['features'].forEach(el => {
            if (el.checked) {
                features.push(el.value);
            }
        });

        let facilities = [];
        add_room_form.elements['facilities'].forEach(el => {
            if (el.checked) {
                facilities.push(el.value);
            }
        });

        data.append('features', JSON.stringify(features));
        data.append('facilities', JSON.stringify(facilities));

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);

        xhr.onload = function() {
            var myModal = document.getElementById('add-room');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if (this.responseText == 1) {
                alert('success', 'New room added!');
                add_room_form.reset();
                get_all_rooms();
            } else {
                alert('error', 'Server down!');
            }
        };

        xhr.send(data);
    }


    function get_all_rooms() {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            document.getElementById('room-data').innerHTML = this.responseText;
        }
        xhr.send('get_all_rooms');
    }


    let edit_room_form = document.getElementById('edit_room_form');

    function edit_details(id) {

    }



    function toggle_status(id, val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/rooms.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (this.responseText == 1) {
                alert('success', 'Status toggle!!');
                get_all_rooms();
            } else {
                alert('error', 'Service down!');
            }
        }

        xhr.send('toggle_status=' + id + '&value=' + val);
    }

    window.onload = function() {
        get_all_rooms();
    }
    </script>

</body>

</html>