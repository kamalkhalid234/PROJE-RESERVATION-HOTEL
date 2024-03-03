<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Contacte</title>
    <?php require('inc/links.php') ?>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }
    </style>
</head>

<body class="bg-light">


    <!-------- ********** header **********---------->
    <?php
    require('inc/header-1.php');
    require('inc/header.php');
    ?>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark "></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim porro quisquam
            <br> Accusamus, porro asperiores odit facere tempora quam ratione dolorem labore similique nulla
            amet saepe.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <!-- scale (maps) 1 -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded  shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="340"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108696.60734976262!2d-8.097803661523438!3d31.64017514528043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakesh!5e0!3m2!1sen!2sma!4v1709343805552!5m2!1sen!2sma"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/6R3eYk8MW16e9VzdA" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>
                        XYZ , marakech
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +212689062738" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+212689062738
                    </a>
                    <br>
                    <a href="tel: +212689062738" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+212689062738
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto : kamalkhalid234l@gmail.com"
                        class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-envelope-fill"></i>kamalkhalid234l@gmail.com
                    </a>


                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark  fs-5  me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3  text-dark  fs-5  me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark  fs-5 ">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>

            </div>
            <!-- scale (form) 2 -->
            <div class="col-lg-6 col-md-6  px-4 ">
                <div class="bg-white rounded  shadow p-4">
                    <form>
                        <h5 style="font-weight:700;">Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:540;">Name</label>
                            <input type="text" placeholder="Between Name" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:540;">Email</label>
                            <input type="email" placeholder="Between Email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:540;">Suject</label>
                            <input type="text" placeholder="Between text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:540;">Message</label>
                            <textarea placeholder="Between Message" class="form-control shadow-non" rows="5"
                                style="resize:none;">

                            </textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!----- **********  Footer  ****************--->
    <?php require('inc/footer.php'); ?>

    <!-- lien Bundle nav-bar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>