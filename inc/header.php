<<<<<<< HEAD
=======
<?php 
  require('admin/inc/db_config.php');
  require('admin/inc/essentials.php');

  
 $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
 $values = [1];
 $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
 


?>





<!-- nav bar -->
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><?php echo $settings_r['site_title']; ?></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php" id="rooms">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php" id="facilities">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php" id="contact">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" id="about">About</a>
                </li>
            </ul>
            <div class="d-flex">
<<<<<<< HEAD
                <?php
        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
          $path = USERS_IMG_PATH;
          echo <<<data
                    <div class="btn-group">
                        <button type="button" class="btn me-lg-3 me-2 btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img src="$path$_SESSION[uPic]" style="width: 25px; height: 25px;" class="me-1 rounded-circle">
                            $_SESSION[uName]
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="bookings.php">Bookings</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    data;
        } else {
          echo <<<data
                    <button type="button" id="login" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" id="enregistre" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                    data;
        }
        ?>
                <form class="sticky-top">
                    <select id="languageSelector" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                        <option value="en">English </option>
                        <option value="ar">Arabic
                        </option>
                    </select>
                </form>
=======
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark shadow-none  me-lg-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                    data-bs-target="#registerModal">
                    Register
                </button>

>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<<<<<<< HEAD
            <form id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                    </h5>
=======
            <form method="post" action="ajax/login_register.php">
                <div class="modal-header ">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login</h5>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email / Mobile</label>
                        <input type="text" name="email_mob" required class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass" required class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
<<<<<<< HEAD
                        <button type="button" class="btn text-secondary text-decoration-none shadow-none p-0"
                            data-bs-toggle="modal" data-bs-target="#forgotModal" data-bs-dismiss="modal">
                            Forgot Password?
                        </button>
=======
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                            Password?</a>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<<<<<<< HEAD
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="register-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                    </h5>
=======
<!-- Modal  enregistre -->
<div class="modal fade " id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable ">
        <div class="modal-content" >
            <form id="register_form">
                <div class="modal-header ">
                    <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-3"></i>
                        User
                        Registration</h5>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
<<<<<<< HEAD
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control shadow-none" required>
=======
                    <span class="badge rounded-pill bg-light text-dark mb-6 text-wrap lh-base">Note: Your details
                        must with your ID (Aadhaar card,passport,driving license, etc.) that will be required
                        check-in.</span>
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label ">Name</label>
                                <input name="name" type="text" placeholder="Between Name" class="form-control shadow_none" required>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
<<<<<<< HEAD
                                <input name="email" type="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="phonenum" type="number" class="form-control shadow-none" required>
=======
                                <input name="email" type="text" placeholder="Between Email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input name="phonenum" type="number" placeholder="Between Phone Number" class="form-control" required>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Picture</label>
<<<<<<< HEAD
                                <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp"
                                    class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control shadow-none" rows="1" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pincode</label>
                                <input name="pincode" type="number" class="form-control shadow-none" required>
=======
                                <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp" placeholder="Between Picture" class="form-control shadow-none" required>
                            </div>
                            <div class="col-mb-12 p-0 mb-3 ">
                                <label class="form-label">Address </label>
                                <textarea name="address" placeholder="Between Address" class="form-control shadow-non"
                                    rows="1" required></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label shadow-none"> Pincode</label>
                                <input name="pincode" type="number" placeholder="Between Pincode" class="form-control shadow-none" required>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of birth</label>
<<<<<<< HEAD
                                <input name="dob" type="date" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input name="pass" type="password" class="form-control shadow-none" required>
=======
                                <input name="dob" type="date" placeholder="Between Date" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label shadow-none"> Password</label>
                                <input name="pass" type="password" placeholder="Between Password" class="form-control shadow-none" required>
>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
<<<<<<< HEAD
                                <input name="cpass" type="password" class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
=======
                                <input name="cpass" type="password" placeholder="Between Confirm Password"
                                    class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my1 " >
                        <button  name="register" type="submit" class="btn btn-dark shadow-none">REGISTER</button>

>>>>>>> 3c6e1e96449f9365095fe334d48b53708fed582c
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="forgot-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> Forgot Password
                    </h5>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: A link will be sent to your email to reset your password!
                    </span>
                    <div class="mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" required class="form-control shadow-none">
                    </div>
                    <div class="mb-2 text-end">
                        <button type="button" class="btn shadow-none p-0 me-2" data-bs-toggle="modal"
                            data-bs-target="#loginModal" data-bs-dismiss="modal">
                            CANCEL
                        </button>
                        <button type="submit" class="btn btn-dark shadow-none">SEND LINK</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>