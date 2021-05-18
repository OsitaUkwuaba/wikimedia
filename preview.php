<?php include "includes/header.php"; include('src/preview_handler.php') ?>

            

        
        <div class="container">
        <div class = "jumbotron">
            <div class = "container">
            
        <div class="row">
            
		<div id="page-wrapper">
            
            
        <form action = "preview.php" method = "post" enctype = "multipart/form-data" class="needs-validation" novalidate>
            <h3 class="title2">Donor's Personal Information</h3><br>
                
            <div class ="form-group">
                <label> <b>Last name:</b> </label>
                <?php echo $_SESSION['l_name']  ?> </div>  
            <div class ="form-group">
                <label> <b>First name:</b> </label>
                <?php echo  $_SESSION['f_name']  ?></div>  
            <div class ="form-group">
                <label><b>Street address: </b> </label>
               <?php echo $_SESSION['street'] ?></div>  
            <div class ="form-group">
                <label> <b>City:</b></label>
                <?php echo $_SESSION['city']  ?></div>  
            <div class ="form-group">
                <label> <b>State:</b></label>
                <?php echo $_SESSION['state'] ?></div>  
            <div class ="form-group">
                <label> <b>Country:</b></label>
                 <?php echo $_SESSION['country'] ?></div>  
            <div class ="form-group">
                <label><b>Postal Code:</b> </label>
                 <?php echo $_SESSION['postal'] ?></div>  
            
            <div class ="form-group">
                <label><b>Phone number:</b>  </label>
                <?php echo $_SESSION['phone'] ?></div>  
            <div class ="form-group">
                <label><b>Email address:</b> </label>
                 <?php echo  $_SESSION['email']  ?></div>  
            <div class ="form-group">
                <label><b>Prefered method of contact:</b> </label>
                 <?php echo $_SESSION['contact_opt'] ?></div>  
            <div class ="form-group">
                <label><b>Prefered payment:</b>  </label>
                <?php echo $_SESSION['payment_opt'] ?></div>  
            <div class ="form-group">
                <label><b>Frequency of payment:</b> </label>
                 <?php echo $_SESSION['frequency']  ?></div>  
            <div class ="form-group">
                <label><b>Amount:</b> </label>
                 <?php echo $_SESSION['amount'] ?></div>  
            <div class ="form-group">
                <label><b>Total projected donation: </b></label>
                <?php if($_SESSION['payment_opt'] = 'USD')
                        {echo "130,000,000 USD";}else if($_SESSION['payment_opt'] = 'Euro'){
                                echo "130,000,000 USD";
                                echo 10000000*0.82 +" Euros";
                        }else if($_SESSION['payment_opt'] = 'Bitcoin'){
                                echo "130,000,000 USD";
                                echo 10000000*0.000022 +" Bitcoin";
    
                        }
    
                ?>
                 </div>  
            <div class ="form-group">
                <label><b>Comment:</b> </label>
                 <?php echo $_SESSION['comment'] ?></div>  
            
            
            
            


            <button class="btn btn-danger float-left" type="submit" name = "cancel" id = "cancel" >Cancel</button>
            &nbsp;&nbsp;&nbsp;
            
            <button class="btn btn-secondary float-center" type="submit" name = "edit" id = "next" >Edit</button>

              <button class="btn btn-primary float-right" type="submit" name = "submit" id = "next" >Donate</button>
                
            </form>
            
                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
                </script>

                        
                        
  
        </div>
        </div>
            
            
            
            </div>
            
            
                
            </div>

        
      
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    
  

</body>
</html>