<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require ('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title'] ?> - ROOMS</title>
</head>

<body class="bg-light">

    <?php
  require ('inc/header.php');

  $checkin_default = "";
  $checkout_default = "";
  $adult_default = "";
  $children_default = "";

  if (isset($_GET['check_availability'])) {
    $frm_data = filteration($_GET);

    $checkin_default = $frm_data['checkin'];
    $checkout_default = $frm_data['checkout'];
    $adult_default = $frm_data['adult'];
    $children_default = $frm_data['children'];
  }
  ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center" id="our_rooms">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <!-- Check availablity -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="d-flex align-items-center justify-content-between mb-3"
                                    style="font-size: 18px;">
                                    <span>CHECK AVAILABILITY</span>
                                    <button id="chk_avail_btn" onclick="chk_avail_clear()"
                                        class="btn shadow-none btn-sm text-secondary d-none">Reset</button>
                                </h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3"
                                    value="<?php echo $checkin_default ?>" id="checkin" onchange="chk_avail_filter()">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none"
                                    value="<?php echo $checkout_default ?>" id="checkout" onchange="chk_avail_filter()">
                            </div>

                            <!-- Facilities -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="d-flex align-items-center justify-content-between mb-3"
                                    style="font-size: 18px;">
                                    <span>FACILITIES</span>
                                    <button id="facilities_btn" onclick="facilities_clear()"
                                        class="btn shadow-none btn-sm text-secondary d-none">Reset</button>
                                </h5>
                                <?php
                $facilities_q = selectAll('facilities');
                while ($row = mysqli_fetch_assoc($facilities_q)) {
                  echo <<<facilities
                      <div class="mb-2">
                        <input type="checkbox" onclick="fetch_rooms()" name="facilities" value="$row[id]" class="form-check-input shadow-none me-1" id="$row[id]">
                        <label class="form-check-label" for="$row[id]">$row[name]</label>
                      </div>
                    facilities;
                }
                ?>
                            </div>

                            <!-- Guests -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="d-flex align-items-center justify-content-between mb-3"
                                    style="font-size: 18px;">
                                    <span>GUESTS</span>
                                    <button id="guests_btn" onclick="guests_clear()"
                                        class="btn shadow-none btn-sm text-secondary d-none">Reset</button>
                                </h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" min="1" id="adults" value="<?php echo $adult_default ?>"
                                            oninput="guests_filter()" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" min="1" id="children"
                                            value="<?php echo $children_default ?>" oninput="guests_filter()"
                                            class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <<<<<<< HEAD <div class="col-lg-9 col-md-12 px-4" id="rooms-data">

                =======
                <!-- les reservation certe -->
                <div class="col-lg-9 col-md-12 px-4 ">

                    <?php
                     $room_res = select("SELECT * FROM `rooms` WHERE `status`=?  AND `removed`=? ",[1,0],'ii');

                while($room_data = mysqli_fetch_assoc($room_res))
                {
                    //get features of room
                    $fea_q = mysqli_query($con ,"SELECT f.name FROM `features` f 
                    INNER JOIN `room_features` rfea ON
                     f.id = rfea.features_id WHERE rfea.room_id = '$room_data[id]'");
                    $features_data ="";
                    while($fea_row = mysqli_fetch_assoc($fea_q)){
                        $features_data.=" <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1 '>
                        $fea_row[name] </span>";    
                    }

                     //get facilities of room

                     $fac_q = mysqli_query($con ,"SELECT f.name FROM `facilities` f 
                     INNER JOIN `rooms_facilites` rfac ON f.id = rfac.facilities_id 
                     WHERE rfac.room_id = '$room_data[id]'");
                      $facilities_data ="";
                      while($fac_row = mysqli_fetch_assoc($fac_q)){
                          $facilities_data.=" <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1 '>
                          $fac_row[name] </span>";    
                      }


                      //get thumbnail of image

                      $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
                      $thumb_q = mysqli_query($con ,"SELECT * FROM `room_images`
                       WHERE `room_id`='$room_data[id]'
                       AND `thumb`='1'");

                       if(mysqli_num_rows($thumb_q)>0){
                          $thumb_res = mysqli_fetch_assoc($thumb_q);
                          $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
                       }



                       // print room card 
                       echo <<<data
                            <div class="card mb-4 border-0 shadow">
                            <div class="row g-0 p-3 align-items-center">
                             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="$room_thumb" class="img-fluid rounded">
                            </div>
                             <div class="col-md-5 px-lg-3 px-0">
                             <h5 class="mb-3">$room_data[name]</h5>
                             <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                $features_data
                              </div>
                               <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                               $facilities_data

                               </div>
                                <div class="guests ">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    $room_data[adult] Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                   $room_data[children] Children
                                </span>
                               </div>
                               </div>
                             <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                              <h6 class="mb-4"> $room_data[price] DH per night</h6>
                               <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-non mb-2 ">Book Now
                              </a>
                               <a href="room_details.php?id=$room_data[id]" class="btn btn-sm w-100  btn-outline-dark shadow-non ">More
                                details
                               </a>

                               </div>
                               </div>
                                </div>

                                   

                       data;




                    
                }
                
                ?>




                    >>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                </div>

        </div>
    </div>


    <script>
    let rooms_data = document.getElementById('rooms-data');

    let checkin = document.getElementById('checkin');
    let checkout = document.getElementById('checkout');
    let chk_avail_btn = document.getElementById('chk_avail_btn');

    let adults = document.getElementById('adults');
    let children = document.getElementById('children');
    let guests_btn = document.getElementById('guests_btn');

    let facilities_btn = document.getElementById('facilities_btn');

    function fetch_rooms() {
        let chk_avail = JSON.stringify({
            checkin: checkin.value,
            checkout: checkout.value
        });

        let guests = JSON.stringify({
            adults: adults.value,
            children: children.value
        });

        let facility_list = {
            "facilities": []
        };

        let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
        if (get_facilities.length > 0) {
            get_facilities.forEach((facility) => {
                facility_list.facilities.push(facility.value);
            });
            facilities_btn.classList.remove('d-none');
        } else {
            facilities_btn.classList.add('d-none');
        }

        facility_list = JSON.stringify(facility_list);

        let xhr = new XMLHttpRequest();
        xhr.open("GET", "ajax/rooms.php?fetch_rooms&chk_avail=" + chk_avail + "&guests=" + guests + "&facility_list=" +
            facility_list, true);

        xhr.onprogress = function() {
            rooms_data.innerHTML = `<div class="spinner-border text-info mb-3 d-block mx-auto" id="loader" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>`;
        }

        xhr.onload = function() {
            rooms_data.innerHTML = this.responseText;
        }

        xhr.send();
    }

    function chk_avail_filter() {
        if (checkin.value != '' && checkout.value != '') {
            fetch_rooms();
            chk_avail_btn.classList.remove('d-none');
        }
    }

    function chk_avail_clear() {
        checkin.value = '';
        checkout.value = '';
        chk_avail_btn.classList.add('d-none');
        fetch_rooms();
    }

    function guests_filter() {
        if (adults.value > 0 || children.value > 0) {
            fetch_rooms();
            guests_btn.classList.remove('d-none');
        }
    }

    function guests_clear() {
        adults.value = '';
        children.value = '';
        guests_btn.classList.add('d-none');
        fetch_rooms();
    }

    function facilities_clear() {
        let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
        get_facilities.forEach((facility) => {
            facility.checked = false;
        });
        facilities_btn.classList.add('d-none');
        fetch_rooms();
    }


    window.onload = function() {
        fetch_rooms();
    }
    </script>

    <?php require ('inc/footer.php'); ?>
    <script src="lange.js"></script>


</body>

</html>