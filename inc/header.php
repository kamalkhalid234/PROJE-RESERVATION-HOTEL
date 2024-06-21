<?php 
  require('admin/inc/db_config.php');
  require('admin/inc/essentials.php');
  
 $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
 $values = [1];
 $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
 


?>





<!-- nav bar -->
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"> HOTEL</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  me-2"  href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-2" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-2" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark shadow-none  me-lg-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                    data-bs-target="#registerModal">
                    Register
                </button>

            </div>
        </div>
    </div>
</nav>

<!-- Modal login -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header ">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" placeholder="Between email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" placeholder="Between Password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                            Password?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal  enregistre -->
<div class="modal fade " id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable ">
        <div class="modal-content">
            <form id="register-form">
                <div class="modal-header ">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-3"></i>
                        User
                        Registration</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-6 text-wrap lh-base">Note: Your details
                        must with your ID (Aadhaar card,passport,driving license, etc.) that will be required
                        check-in.</span>
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label ">Name</label>
                                <input name="name" type="text" placeholder="Between Name" class="form-control shadow_none" required>
                            </div>
                            <div class="col-md-6  p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="text" placeholder="Between Email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="phonenum" type="number" placeholder="Between Phone Number" class="form-control" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp" placeholder="Between Picture" class="form-control shadow-none"required>
                            </div>
                            <div class="col-mb-12 p-0 mb-3 ">
                                <label class="form-label">Address </label>
                                <textarea name="address" placeholder="Between Address" class="form-control shadow-non"
                                    rows="1" required></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label shadow-none"> Pincode</label>
                                <input name="pincode" type="number" placeholder="Between Pincode" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input name="dob" type="date" placeholder="Between Date" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label shadow-none"> Password</label>
                                <input name="pass" type="password" placeholder="Between Password" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input name="cpass" type="password" placeholder="Between Confirm Password"
                                    class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my1 " >
                        <button name="register" type="submit" class="btn btn-dark shadow-none">REGISTER</button>

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>