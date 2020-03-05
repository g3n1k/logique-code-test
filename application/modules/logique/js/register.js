$(document).ready(function(){
    $('.basic-select').select2();
    $('.date').datepicker({
        todayBtn: "linked",
        format: 'yyyy-mm-dd',
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true
    });
    add_address();
});


function send_data(){

    var email_valid = validate_email();
    var cc_valid    = validate_cc();
    // var cc_valid    = true;
   
    if(email_valid && cc_valid) {    

        var _url = base_url() + 'logique/register/save';
        
        // get all address
        var _address = [];

        $(".address-field").each(function() {
            _address.push( $(this).val());
        });

        // wrapping all to param 
        var _p = {
            'f_name': $('#inp_f_name').val(),
            'l_name': $('#inp_l_name').val(),
            'dob'   : $('#inp_dob').val(),
            'pass'  : $('#inp_pass').val(),
            'email' : $('#inp_email').val(),
            'tipe'  : $('#inp_tipe').val(),
            'cc'  : $('#inp_cc').val(),
            'address': _address
        }

        // send to crud controller    
        $.post(_url, _p, function(d){
            if(parseInt(d)) {
                alert('success'+"\r\n"+"You will redirect to login page");
                window.location.replace(base_url()+'login');
            } 
            else alert('failed, your cc data failed');

        }, 'json')
    
    }
    else alert('your email/cc failed');
}

function add_address(){
    var _a ='<div class="form-group div-address" >';
    _a +='<label for="exampleInputPassword1">Address</label>';
    _a +='<input type="text" class="form-control address-field" placeholder="Email" required>';
    _a +='</div>';

    $('#big-div-address').append(_a);
}

function validate_email(){
    email_address = $('#inp_email');
    email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    if(!email_regex.test(email_address.val())){ 
        alert('this is not valid email'); 
        e.preventDefault(); 
        return false;  
    }
    return true;
}

function validate_cc(){

    var _url = base_url() + 'logique/register/luhn_check';

    var _cc = $('#inp_cc').val();

    $.get(_url+'/'+_cc, function(d){ 
        if(parseInt(d)) return true;
        else false;
    }, 'json');
}