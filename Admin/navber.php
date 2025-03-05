<?php

include('admin_header_link.php');

?>



<!-- =============== Navigation ================ -->
<div class="container-fluid">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../index.php">
                        <span class="icon">
                            <!-- <ion-icon name="logo-apple"></ion-icon> -->
                            <i class="fa-solid fa-diagnoses"></i>
                        </span>
                        <span class="title">Suvaranjan</span>
                    </a>
                </li>

                <li>
                    <a href="dashbord.php">
                        <span class="icon">
                            <!-- <ion-icon name="home-outline"></ion-icon> -->
                            <i class="fa-solid fa-folder-open"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="all_users.php">
                        <span class="icon">
                            <!-- <ion-icon name="people-outline"></ion-icon> -->
                            <i class="fa-solid fa-chalkboard-teacher"></i>
                        </span>
                        <span class="title">All Users</span>
                    </a>
                </li>

                <li>
                    <a href="all_product.php">
                        <span class="icon">
                            <!-- <ion-icon name="chatbubble-outline"></ion-icon> -->
                            <i class="fas fa-dolly-flatbed"></i>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="all_catagory.php">
                        <span class="icon">
                            <!-- <ion-icon name="help-outline"></ion-icon> -->
                            <i class="fa-solid fa-drafting-compass"></i>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="messages.php">
                        <span class="icon">
                            <!-- <ion-icon name="settings-outline"></ion-icon> -->
                             <i class="fa-solid fa-comment-dots"></i>
                        </span>
                        <span class="title">Masseges</span>
                    </a>
                </li>

                <li>
                    <a href="order.php">
                        <span class="icon">
                            <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                            <i class="fa-solid fa-baby-carriage"></i>
                        </span>
                         <span class="title">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <!-- <ion-icon name="log-out-outline"></ion-icon> -->
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="title">LogOut</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <!-- <ion-icon name="menu-outline"></ion-icon> -->
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <!-- <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                    <i class="fa-solid fa-user-tie"></i>
                </div> -->
                <div>
                   
                    <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle dropbtn"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                    <i class="fa-solid fa-user-tie"></i>
                        <?php
                        echo isset($_SESSION['username'])?$_SESSION['username']:'';
                        ?>
                    </a>
                    
                    <ul
                        class="dropdown-menu dropdown-content"
                        aria-labelledby="navbarDropdown"
                    >
                    <?php 
                        if(isset($_SESSION['username'])){

                    ?>
                        <li>
                            <a class="dropdown-item" href="logout.php"
                            ><i class="fa fa-sign-out"></i> Logout</a
                            >
                        </li>
                        <?php
                        }
                        else{
                        ?>
    
                        <?php
                        }
                    ?>
                  </ul>
                </li>


                </div>
            </div>

<?php

include('admin_footer_link.php');

?>