<?php
include('header_link.php');
include('user_function.php');
$row=getcartnum();
$row1=getWishilistnum();
?>

<style>
    .brand-name {
    font-size: 2rem;
    font-weight: bold;
    color: #444;
    display: flex;
    align-items: center;
    gap: 10px;
}

.brand-name i {
    font-size: 2rem;
    color: #007bff;
}

/* Fading animation */
.letter {
    display: inline-block;
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeDown 0.5s forwards;
}

/* Keyframe for fade-down animation */
@keyframes fadeDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Add a delay to reset the text visibility before restarting the animation */
#animated-text.hidden {
    opacity: 0;
    transition: opacity 0.5s ease-out;
}
</style>

<div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <h5 class="brand-name">
                        <i class="fa-solid fa-hand"></i>
                        <span id="animated-text"></span>
                    </h5>

                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search" method="post" action="search.php">
                            <div class="input-group">
                                <input type="search" name="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit"value="filter">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">

                            <li class="nav-item">
                                <a class="nav-link" href="add_to_cart.php">
                                    <i class="fa fa-shopping-cart"></i> Cart (<?php echo $row; ?>)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wishlist.php">
                                    <i class="fa fa-heart"></i> Wishlist (<?php echo $row1; ?>)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i><?php echo isset($_SESSION['username'])?$_SESSION['username']:'';?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php

                                    if(isset($_SESSION['username'])){

                                        ?>
                                   
                                    <li><a class="dropdown-item" href="account.php"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="order.php"><i class="fa fa-list"></i> My Orders</a></li>
                                    <li><a class="dropdown-item" href="wishlist.php"><i class="fa fa-heart"></i> My Wishlist</a>
                                    </li>
                                    <li><a class="dropdown-item" href="add_to_cart.php"><i class="fa fa-shopping-cart"></i> My
                                            Cart</a></li>
                                            
                                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li> 
                                    <?php
                                    }
                                    else{
                                        ?>
                                        <li><a class="dropdown-item" href="registration.php"><i class="fa fa-user"></i>login</a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catagory.php">Catagory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#allcat">Check-Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
    const text = "Lets Play";
    const container = document.getElementById("animated-text");

    function animateText() {
        // Clear the container
        container.innerHTML = "";
        container.classList.remove("hidden");

        // Loop through each letter and create a span for it
        text.split("").forEach((char, index) => {
            const span = document.createElement("span");
            span.textContent = char === " " ? "\u00A0" : char; // Preserve spaces
            span.className = "letter";
            span.style.animationDelay = `${index * 0.1}s`; // Delay each letter
            container.appendChild(span);
        });

        // After the animation ends, restart it after a short delay
        setTimeout(() => {
            container.classList.add("hidden"); // Fade out the entire text
            setTimeout(animateText, 1000); // Restart animation after a delay
        }, text.length * 100 + 1000); // Total animation time (letters + delay)
    }

    animateText();
});
    </script>