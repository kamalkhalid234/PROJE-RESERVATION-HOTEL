<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Aboute</title>
    <?php require('inc/links.php') ?>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        .box {
            border-top-color: #2ec1ac !important;
        }
    </style>
</head>

<body class="bg-light">


    <!-------- ********** header **********---------->
    <?php
    require('inc/header-1.php');
    require('inc/header.php');
    ?>


    <!-- abouter -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUTE US</h2>
        <div class="h-line bg-dark "></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim porro quisquam
            <br> Accusamus, porro asperiores odit facere tempora quam ratione dolorem labore similique nulla
            amet saepe.
        </p>
    </div>


    <!-- image and texte -->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4  order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit ?</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores perspiciatis, sint nisi ducimus
                    odio earum ex blanditiis? Obcaecati doloremque qui aspernatur et dolorem </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4order-lg-2  order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">


            </div>
        </div>
    </div>


    <!-- row les tikes -->
    <div class="container mt-5">
        <div class="row">
            <!-- tike 1 -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-3 text-center box ">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>
            <!-- tike 2 -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-3 text-center box ">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>

            </div>
            <!-- tike 3 -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-3 text-center box ">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>

            </div>
            <!-- tike 4 -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-3 text-center box ">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>

            </div>

        </div>
    </div>


    <!--  Image swiper and manager-->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <?php 
                  $about_r = selectAll('team_details');
                  $path=ABOUT_IMG_PATH;

                  while($row = mysqli_fetch_assoc($about_r)){
                    echo<<< data
                       
                       <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                           <img src="$path$row[picture]" class="w-100" >
                           <h5 class="mt-2">$row[name]</h5>
                       </div>
   

                    data;
                  }

                ?>
               
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>








    <!----- **********  Footer  ****************--->
    <?php require('inc/footer.php'); ?>








    <!----- **********  java script de page   ****************--->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper  Images-->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,   // les image li ibano ben 4
            spaceBetween: 40,  // space entre les photo 
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }

        });
    </script>

    <!-- lien Bundle nav-bar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>