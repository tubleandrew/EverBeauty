<?php 

    include("includes/header.php");

?>
   
   <div id="content"><!-- #content begin -->
       <div class="container"><!-- container begin -->
           <div class="col-md-12"><!-- col-md-12 begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
                   
                   <li>                     
                       <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
                             
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 begin -->
               <div id="productMain" class="row"><!-- row begin -->
                   <div class="col-sm-6"><!-- col-sm-6 begin -->
                       <div id="mainImage"><!-- #mainImage begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="ARDELL 3D FauxMink 857"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="ARDELL 3D FauxMink 857"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="ARDELL 3D FauxMink 857"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- #mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 begin -->
                       <div class="box"><!-- box begin -->
                           <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                           
                           <?php add_cart(); ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                               <div class="form-group"><!-- form-group begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                           
                                    </div><!-- col-md-7 Finish -->
                                   
                               </div><!-- form-group Finish -->
                                                          
                                <p class="price">₱ <?php echo $pro_price; ?></p>                          
                                                           
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                                                            
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                       
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box begin -->
                   
                       <h4>Product Details</h4>
                   
                   <p>
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>
                   
                   <h4></h4>
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 begin -->
                       <div class="box same-height headline"><!-- box same-height headline begin -->
                           <h3 class="text-center">Products You May Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product same-height'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                    
                                    <p class='price'> ₱ $pro_price </p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>