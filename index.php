
<?php
// include("header_link.php");
// include('user_function.php');
include("navber.php");
?>





    <!----home-->

    <section class="home">
        <div class="content">
            <h1><span>Sports products</span>
                <br>
                up to <span id="span2">50%</span> off
            </h1>
            <p>Customer can share reviews,which can help you identify your best-selling items and
            build trust with new customers.!
                <br>Visit your favorite Products.
            </p>
            <div class="btn"><a href="catagory.php"><button>Shop Now</button></a></div>
        </div>
        <div class="img">
         <img src="Assets/img/blog.png" alt="priyanka rani"> </div></a>
        </div>
    </section>
    <hr>


    <!----home-->
    <!--product-------->

    <div class="py-3 py-md-5 bg-light"id="allcat">
        <div class="container">
            <div class="row" >
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>

                </div>
                <?php
                $tdata =getTreandingproduct();
                if (isset($tdata)){
                    foreach ($tdata as $data){

                
                ?>



                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                          <a href="details.php?dpid=<?php echo base64_encode($data['id']); ?>" style="text-decoration: none;" class="text-dark">
                            <img src="Assets/p_img/<?php echo $data['image']; ?>" alt="Laptop">
                            </a>
                        </div>
                        <div class="product-card-body">
                          <a href="details.php?dpid=<?php echo base64_encode($data['id']); ?>" style="text-decoration: none;" class="text-dark">
                            <p class="product-brand">Manufacture of india</p>
                            <h5 class="product-name">
                                <a href="">
                                <?php echo $data['pname'] ?>
                                    <br>Best offer
                                </a>
                            </h5>
                            <div>
                                <span class="selling-price"><?php echo $data['seling_price'] ?></span>
                                <span class="original-price"><?php echo $data['original_price'] ?></span>
                            </div>
                            </a>
                            <div class="mt-2">
                                <a href="add_cart_action.php?pcid=<?php echo base64_encode($data['id']); ?>" class="btn btn1">Add To Cart</a>
                                <a href="add_wishlist_action.php?dpid=<?php echo base64_encode($data['id']); ?>" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="order.php?poid=<?php echo base64_encode($data['id']); ?>" class="btn btn1"> BUY </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                } 
                     }

                ?>


            </div>
        </div>
    </div>
<hr>
    <!-- -----product end--- -->
<div class="vid">
    <div class="container mb-4">
        <div class="row row-cols-1 ">
            <div class="col col-md-6">
             <video class="w-100 " style="border-radius: 9px;" controls loop muted
             src="Assets/img/3192198-uhd_3840_2160_25fps.mp4">

             </video>
            </div>
            <div class="col col-md-6 ">
             <video class="w-100 " style="border-radius: 9px;" controls loop muted
             src="Assets/img/12268925_3840_2160_50fps.mp4">

             </video>
            </div>
        </div>
    </div>
</div>



  <!-----    Owl carasol Start    ----->
  <div class="py-3 py-md-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4 text-center">Best selling-product</h4>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="Assets/img/jersey2.jpg" class="w-100" alt="Laptop">
                            </div>
                            <div class="category-card-body">
                                <h5>Best-selling Products visit more</h5>
                                <div class="btn"><a href="catagory.php"><button>Shop Now</button></a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">

                            <div class="category-card-img">
                                <img src="Assets/img/ball2.jpg" class="w-100" alt="Mobile Devices">
                            </div>
                            <div class="category-card-body">
                                <h5>Tranding Ball,visit more</h5>
                                <div class="btn"><a href="catagory.php"><button>Shop Now</button></a></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="Assets/img/badminton4.jpg" class="w-100" alt="Mens Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Visit all Product</h5>
                                <div class="btn"><a href="catagory.php"><button>Shop Now</button></a></div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="Assets/img/images16.jpeg" class="w-100" alt="Women Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Check all catagory product</h5>
                            <div class="btn"><a href="sub-catagory.php"><button>Shop Now</button></a></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
    
   <!-- -----owl carajol end--- -->


    
<?php
// include("footer_link.php");
include("footer.php");
?>
    




























   