$(document).on('keyup', '#password_confirmation', function (e){
    let pass = $('#password').val();
    let re_pass = $(this).val();

    if (pass != re_pass){
        $('#error_pwd').html('Password and retype-password does not match.');
        $('submit').attr('disabled', 'disabled');
    }else{
        $('#error_pwd').html('');
        $('submit').removeAttr('disabled', 'disabled');
    }
});
