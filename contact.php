<?php 

    $active='Contact';
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
                       Contact Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 begin -->
            
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
                             
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 begin -->
               
               <div class="box"><!-- box begin -->
                   
                   <div class="box-header"><!-- box-header begin -->
                       
                       <center><!-- center begin -->
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted"><!-- text-muted begin -->
                               
                               If you have any questions, feel free to Contact Us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       <form action="contact.php" method="post"><!-- form begin -->
                           
                           <div class="form-group"><!-- form-group begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Send Message
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->                   
                       
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "andrew@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Welcome to my website";
                           
                           $msg = "Thanks for sending us message. we wil reply ASAP";
                           
                           $from = "andrew@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                             
                           echo "<h2 align='center'> Your message has sent successfully </h2>";
                       }
                       
                       ?>
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
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