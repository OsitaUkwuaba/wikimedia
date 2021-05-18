<?php   

                        if(isset($_POST['cancel'])){
                            header('Location: canceled.php');
                        }else if(isset($_POST['edit'])){
                            header('Location: donations_form.php');
                            
                        }else if(isset($_POST['submit'])){
                            
                            if( empty($_SESSION['f_name']) || empty($_SESSION['l_name']) ||empty($_SESSION['amount']) || empty($_SESSION['email']) || empty($_SESSION['payment_opt']) ){
                                
                                echo "<h4 style ='color: red'>One or more required fields are empty!</h4>";
                            } else {
                                
                               if($payment_opt = "Euro"){
                                   $payment_opt = $amount*1.21;
                               }else if($payment_opt = "bitcoin"){
                                   $payment_opt = $amount*50724;
                               }
                               $query = "INSERT INTO donations(l_name, f_name, street, city, state, country, postal, phone, email, contact_opt, payment_opt, frequency, amount, comment) VALUES ('{$_SESSION['l_name']}', '{$_SESSION['f_name']}', '{$_SESSION['street']}', '{$_SESSION['city']}', '{$_SESSION['state']}', '{$_SESSION['country']}', '{$_SESSION['postal']}', '{$_SESSION['phone']}', '{$_SESSION['email']}', '{$_SESSION['contact_opt']}', '{$_SESSION['payment_opt']}', '{$_SESSION['frequency']}', '{$_SESSION['amount']}','{$_SESSION['comment']}')";
                                
                                $create_donation = mysqli_query($connection, $query);
                                
                                if(!$create_donation){
                                    
                                    die('Query failed'.mysqli_error($connection));
                                }else{
                                    header('Location: submitted.php');
                                }
                                
                            }
                            
                        }
                        
                     
                        ?>