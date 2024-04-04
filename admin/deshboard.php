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
            position: fixed;
            height: 100%;
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
    </style>
</head>

<body class="bg-light">


    <?php require ("inc/header.php"); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus in laudantium at voluptatem
                reprehenderit quas cupiditate expedita quibusdam labore officiis ut, eius voluptates dignissimos
                iusto
                explicabo culpa architecto non harum!
                Tenetur ab ratione rem recusandae ducimus perspiciatis magni totam quae odit natus, voluptate quam
                nulla
                ea molestias. Saepe, ipsa est cumque deserunt consequuntur exercitationem? Saepe illum debitis sed
                reprehenderit? Veritatis!
                Quis corrupti sunt quos non, sed dolores cupiditate obcaecati similique dolore odio veniam corporis
                aspernatur vero rem alias eligendi rerum earum eaque enim assumenda. Perferendis amet odio labore
                harum
                tempore?
                Dignissimos corporis minima architecto ullam odit eveniet velit, aspernatur eos deserunt ut magni
                repellendus voluptatem nesciunt? Nam quis quos libero totam officiis illum magni pariatur iure
                eveniet
                earum, voluptas temporibus.
            </div>
        </div>
    </div>



    <?php require ("inc/scripts.php"); ?>
</body>

</html>