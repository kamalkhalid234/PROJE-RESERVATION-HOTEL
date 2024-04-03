<?php

require ("inc/essentials.php");
adminLogin();
// session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard </title>
    <link rel="stylesheet" href="./css/common.css">
    <?php require ("inc/links.php"); ?>


    <style>
        #dashboard-menu {
            /* position: fixed; */
            height: 100%;
        }

        @media screen and (max-widht : 992px) {
            #dashboard-menu {

                height: auto;
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-light">


    <!-- panier est button logoute -->
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between   sticky-top">
        <h3 class="mb-0 h-font">HB WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>


    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark  ">
            <div class=" container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-4" id="adminDropdown">
                    <ul class="nav nav-pills flex-coloumn">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li><br>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li><br>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Users</a>
                        </li><br>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus in laudantium at voluptatem
                reprehenderit quas cupiditate expedita quibusdam labore officiis ut, eius voluptates dignissimos iusto
                explicabo culpa architecto non harum!
                Tenetur ab ratione rem recusandae ducimus perspiciatis magni totam quae odit natus, voluptate quam nulla
                ea molestias. Saepe, ipsa est cumque deserunt consequuntur exercitationem? Saepe illum debitis sed
                reprehenderit? Veritatis!
                Quis corrupti sunt quos non, sed dolores cupiditate obcaecati similique dolore odio veniam corporis
                aspernatur vero rem alias eligendi rerum earum eaque enim assumenda. Perferendis amet odio labore harum
                tempore?
                Dignissimos corporis minima architecto ullam odit eveniet velit, aspernatur eos deserunt ut magni
                repellendus voluptatem nesciunt? Nam quis quos libero totam officiis illum magni pariatur iure eveniet
                earum, voluptas temporibus.
            </div>
        </div>
    </div>



    <?php require ("inc/scripts.php"); ?>
</body>

</html>