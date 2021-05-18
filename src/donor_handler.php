
<?php
    include "includes/db.php";
                        
                        

                        if(isset($_POST['submit'])){
                            
                            $l_name = $_POST['l_name'];
                            $f_name = $_POST['f_name'];
                            $street = $_POST['street'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $country = $_POST['country'];
                            $postal = $_POST['postal'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $contact_opt = $_POST['contact_opt'];
                            $payment_opt = $_POST['payment_opt'];
                            $frequency = $_POST['frequency'];
                            $amount = $_POST['amount'];
                            $comment = $_POST['comment'];
                            
                            
                           
                            
                            if( empty($f_name) || empty($l_name) ||empty($amount) || empty($email) || empty($payment_opt) ){
                                
                                echo "<h4 style ='color: red'>One or more required fields are empty!</h4>";
                            } else {
                                
                               if($payment_opt = "Euro"){
                                   $payment_opt = $amount*1.21;
                               }else if($payment_opt = "bitcoin"){
                                   $payment_opt = $amount*50724;
                               }
                               $query = "INSERT INTO donations(l_name, f_name, street, city, state, country, postal, phone, email, contact_opt, payment_opt, frequency, amount, comment) VALUES ('{$l_name}', '{$f_name}', '{$street}', '{$city}', '{$state}', '{$country}', '{$postal}', '{$phone}', '{$email}', '{$contact_opt}', '{$payment_opt}', '{$frequency}', '{$amount}', '{ $comment}')";
                                
                                $create_donation = mysqli_query($connection, $query);
                                
                                if(!$create_donation){
                                    
                                    die('Query failed'.mysqli_error($connection));
                                }else{
                                    header('Location: submitted.php');
                                }
                                
                            }
                            
                        }else if(isset($_POST['cancel'])){
                            header('Location: submitted.php');
                        }
                     
                        ?>
