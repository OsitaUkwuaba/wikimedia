<?php 
class formValidator{
    
    private $data;
    public $errors = [];
    private static $names = ['l_name', 'f_name', 'street', 'city', 'state', 'country', 'postal', 'phone', 'email', 'contact_opt','payment_opt','frequency', 'amount', 'comment'];
    
    
    
    public function _construct($post_data){
        $this->data =  $post_data;
    }
    
    public function validateForm(){
        foreach(self::$names as $names){
            
            if(!array_key_exists($names, $this->data)){
                trigger_error("There is no $names in data");
                return;
            }
        }
        
        $this->validateLastName();
        $this->validateFirstName();
        $this->validateStreet();
        $this->validateCity();
        $this->validateState();
        $this->validatePostal();
        $this->validatePhone();
        $this->validateEmail();
        $this->validateAmount();      
        return $this->errors;
        
    }
    
    public function validateLastName(){
        $val = trim($this->data['l_name']);
        if(empty($val)){
            $this->err_array('l_name', 'Last name cannot be empty');
        } else {
            $reg = "/^([a-zA-Z' ]+)$/";
            if(!preg_match($reg, $val)){
                $this->err_array('l_name', 'Last name must be valid');
            }
        
        
    }
    }
    public function validateFirstName(){
        $val = trim($this->data['f_name']);
        if(empty($val)){
            $this->err_array('f_name', 'First name cannot be empty');
        } else if(!preg_match("/^([a-zA-Z' ]+)$/", $val)){
                $this->err_array('f_name', 'Fast name must be valid');
            }
        
        
    }
    public function validateStreet(){
        $val = trim($this->data['street']);
        if(empty($val)){
            $val = '';
        }else if(!preg_match("/[A-Za-z0-9\-\\,.]+/", $val)){
                $this->err_array('street', 'Street must be valid');
            }        
        
    }
    public function validateCity(){
        $val = trim($this->data['city']);
        if(empty($val)){
            $val = '';
        } else if(!preg_match("/^([a-zA-Z' ]+)$/", $val)){
                $this->err_array('city', 'City name must be valid');
            }
        
        
    }
    public function validateState(){
        $val = trim($this->data['state']);
        if(empty($val)){
            $val = '';
        } else if(!preg_match("/^([a-zA-Z' ]+)$/", $val)){
                $this->err_array('city', 'City name must be valid');
            }
        
        
    }
    
    public function validatePostal(){
        $val = trim($this->data['postal']);
        if(empty($val)){
            $val = '';
        } else if(!preg_match("^\d{5}([\-]?\d{4})?$", $val)){
                $this->err_array('city', 'Postal code must be valid');
            }
        
        
    }
    public function validatePhone(){
        $val = trim($this->data['phone']);
        if(empty($val)){
            $val = '';
        } else if(!preg_match("^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$", $val)){
                $this->err_array('city', 'Phone number must be valid');
            }
        
        
    }
    public function validateEmail(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->err_array('email', 'Email cannot be empty');
        } else if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->err_array('email', 'Email must be valid email');
            }
        
        
    }
   public function validateAmount(){
       $val = trim($this->data['amount']);
        if(empty($val)){
            $this->err_array('amount', 'Ammount in donation cannot be empty');
        } else if(!preg_match("/^[0-9]+(?:\.[0-9]+)?$/", $val)){
                $this->err_array('f_name', 'Amount must be valid');
            }
        
        
       
   }
   private function err_array($key, $val){
       $this->errors[$key] = $val;
       
   }
    
    
    
}



?>