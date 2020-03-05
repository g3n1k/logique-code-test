<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {
	
	public function __construct(){
	
        parent::__construct();
    }
    
    // register form
	public function index($page = 1){
		
        $data = ['word'=>"hello world "];
        
        $data['include_script'] = inc_script(
			array(
		        "includes/select2/select2.min.css",
		        "includes/select2/select2.min.js",
		        "includes/datepicker/bootstrap-datepicker.js",
				"includes/datepicker/locales/bootstrap-datepicker.id.js",
                "application/modules/logique/js/register.js"
            )
        );
        
        $this->load->view('register', $data);
    }

    public function save(){
        
        $_p = array(); 
        
        foreach($_POST as $var=>$val) $_p[$var] = $this->input->post($var);

        /*array(7) { 
            ["f_name"]=> string(6) "indra " 
            ["l_name"]=> string(5) "sadik" 
            ["dob"]=> string(10) "2020-01-27" 
            ["email"]=> string(8) "as@cc.id" 
            
            ["tipe"]=> string(6) "Silver" 
            ["cc"]=> string(5) "13221" 
            
            ["address"]=> array(2) { 
                [0]=> string(4) "add1" 
                [1]=> string(4) "add2" 
            } 
        } 

        */
        $this->load->model('foo/foo_m');

        // insert user data 
        $_data_user = array(
            'f_name' => $_p['f_name'],
            'l_name' => $_p['l_name'],
            'dob'   => $_p['dob'],
            'email' => $_p['email'],
            'pass'  => md5($_p['pass']),
        );

        $user_id = $this->foo_m->__insert('user', $_data_user);

        // insert membership data
        $_data_membersip = array(
            'user_id'   => $user_id,
            'tipe'      => $_p['tipe'],
            'cc'        => $_p['cc']
        );

        $this->foo_m->__insert('membersip', $_data_membersip);

        // insert address data
        foreach ($_p['address'] as $_val) {
            $_data_address = array(
                'user_id'   => $user_id,
                'address'   => $_val,
            );

            $this->foo_m->__insert('address', $_data_address);
        }
        header('Content-Type: application/json');
        echo $user_id;
    }
    
    //https://stackoverflow.com/questions/174730/what-is-the-best-way-to-validate-a-credit-card-in-php
    function luhn_check($number) {

        // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
        $number=preg_replace('/\D/', '', $number);
      
        // Set the string length and parity
        $number_length=strlen($number);
        $parity=$number_length % 2;
      
        // Loop through each digit and do the maths
        $total=0;
        for ($i=0; $i<$number_length; $i++) {
          $digit=$number[$i];
          // Multiply alternate digits by two
          if ($i % 2 == $parity) {
            $digit*=2;
            // If the sum is two digits, add them together (in effect)
            if ($digit > 9) {
              $digit-=9;
            }
          }
          // Total up the digits
          $total+=$digit;
        }
      
        // If the total mod 10 equals 0, the number is valid
        header('Content-Type: application/json');
        echo ($total % 10 == 0) ? 1 : 0;
      
      }
}
