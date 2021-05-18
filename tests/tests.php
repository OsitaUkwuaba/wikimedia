<?php
include('src\form_validator.php');
use PHPUnit\Framework\TestCase;


class Tests extends TestCase {
    

    
    public function testValidationCannotAcceptNullLaastName(){
        
        
        $arr = ['l_name' => ''];
        $validation =  new formValidator($arr);

//        $validation->validateForm();
        $validation->validateLastName();
        $error = $validation->errors['l_name'];
        

        $this->assertEquals('Last name cannot be empty', $error);
        
    }
    
    public function testValidationCannotAcceptNullFirstName(){
        $arr = ['f_name' => ''];
        $validation =  new formValidator($arr);

//        $validation->validateForm();
        $validation->validateFirstName();
        $error = $validation->errors['f_name'];
        

        $this->assertEquals('First name cannot be empty', $error);
        
        
    }
    public function testValidationCannotAcceptNullEmail(){
        $arr = ['email' => ''];
        $validation =  new formValidator($arr);

//        $validation->validateForm();
        $validation->validateEmail();
        $error = $validation->errors['email'];
        

        $this->assertEquals('Email cannot be empty', $error);
        
    }
    public function testValidationCannotAcceptNullAmount(){
        $arr = ['amount' => ''];
        $validation =  new formValidator($arr);

//        $validation->validateForm();
        $validation->validateAmount();
        $error = $validation->errors['amount'];
        

        $this->assertEquals('Ammount in donation cannot be empty', $error);
        
    }
  

}
?>