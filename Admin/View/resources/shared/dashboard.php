<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <!-------------------------    GOOGLE FONTS   ------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poppins:wght@200;400&family=Roboto:wght@300;400&family=Ubuntu:ital,wght@1,300;1,400&display=swap" rel="stylesheet" />

    <!-------------------------   Iconify  --------------------->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!----------------------  Bootstrap  ----------------------->
    <link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css">
    <script src="./lib/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!------------------   JQUERY   ---------------------------->
    <script src="./lib/Jquery/jquery3.6.0.js"></script>

    <!------------------------   CSS   ----------------------------->
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="./resources/css/dashboard.css">
    
    <div class="admindsh_container">
        <div class="navigation active">
            <ul>
                <li>
                    <a href="">
                        <span class="icon mt-2"><iconify-icon icon="carbon:cafe"></iconify-icon></span>
                        <span class="title">cafe</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="material-symbols:list-alt"></iconify-icon></span>
                        <span class="title">Manage Lists</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="material-symbols:mark-chat-unread"></iconify-icon></span>
                        <span class="title">Chat Box</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="material-symbols:edit-document-rounded"></iconify-icon></span>
                        <span class="title">Manage Page</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="material-symbols:edit-document-rounded"></iconify-icon></span>
                        <span class="title">Manage Reviews</span>
                    </a>
                </li>  
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="uiw:setting"></iconify-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><iconify-icon icon="basil:logout-solid"></iconify-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main active">
            <div class="topbar">
                <div class="toggle">   
                <iconify-icon icon="material-symbols:menu"></iconify-icon>
                </div>
                <!-- userImg -->
                <div class="fs-4 fw-bold">Admin</div>
                <div class="owner">   
                <img src="./resources/img/shopOwner.jpg">
                </div>
            </div>  
           <hr>
            <!-- Second Nav Bar ---> 
 

     