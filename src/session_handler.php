<?php 
require('src/form_validator.php');
if(isset($_POST['preview'])){
    $_SESSION['l_name'] = $_POST['l_name'];
    $_SESSION['f_name'] = $_POST['f_name'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['postal'] = $_POST['postal'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contact_opt'] = $_POST['contact_opt'];
    $_SESSION['payment_opt'] = $_POST['payment_opt'];
    $_SESSION['frequency'] = $_POST['frequency'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['comment'] = $_POST['comment'];
    
    $validation =  new formValidator($_SESSION);
    $errors = $validation->validateForm();
    if(!$errors){
        header('Location: preview.php');
        
    }
   
        
            

    
}


?>
