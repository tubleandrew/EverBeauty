<div id="footer"><!-- #footer begin -->
    <div class="container"><!-- container begin -->
        <div class="row"><!-- row begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->
                
                <h4>Pages</h4>
                
                <ul><!-- ul begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul><!-- ul finish -->
                
                <hr>
                
                <h4>User Section</h4>
                
                <ul><!-- ul begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo "<a href='checkout.php'>Login</a>";
                               
                           }else{
                               
                               echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register.php">Register</a></li>
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- ul begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                        
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p start -->
                    
                    <strong>Ever Beauty Store inc.</strong>
                    <br/>Cibubur
                    <br/>Ciracas
                    <br/>0818-0683-3157
                    <br/>andrew@gmail.com
                    <br/><strong>MrJohn</strong>
                    
                </p><!-- p finish -->
                
                <a href="contact.php">Check Our Contact Pages</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Dont miss our latest product updates.
                </p>
                
                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn finish -->
                        
                    </div><!-- input-group finish -->
                </form><!-- form finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row finish -->
    </div><!-- container finish -->
</div><!-- #footer finish -->



<div id="copyright"><!-- #copyright begin -->
    <div class="container"><!-- container begin -->
        <div class="col-md-6"><!-- col-md-6 begin -->
            
            <p class="pull-left">&copy; 2018 Ever Beauty Store All Rights Reserved</p>
            
        </div><!-- col-md-6 finish -->
        <div class="col-md-6"><!-- col-md-6 begin -->
            
            <p class="pull-right">Theme by: <a href="#">BSIT</a></p>
            
        </div><!-- col-md-6 finish -->
    </div><!-- container finish -->
</div><!-- #copyright finish -->