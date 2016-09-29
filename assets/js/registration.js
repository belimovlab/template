function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function set_password_confirm(){
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("repassword");
    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Пароли не совпадают.");
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
}
$(document).ready(function(){
    set_password_confirm();
    var userCount = function(){
        window.my_mans++;
        $('#in_service_man').html( MainApp.number_format(window.my_mans,0,'',' '));
    };
    setInterval(userCount,getRandomInt(35000,45000));
    var item_value = $('#role_id').val();
    switch(item_value)
    {
        case 'user':
            $('#ru_div').attr('class','registration_user');
            $('#ru_div').find('span').html('<i class="fa fa-check"></i> ');
            $('#rs_div').attr('class','registration_specialist border_user');
            $('#rs_div').find('span').html('');
            $('#role_id').val('user');
        break;
        default:
            $('#ru_div').attr('class','registration_user border_spec');
            $('#ru_div').find('span').html('');
            $('#rs_div').attr('class','registration_specialist');
            $('#rs_div').find('span').html('<i class="fa fa-check"></i> ');
            $('#role_id').val('specialist');
        break;
    }
    $('#rs_div').click(function(){
        $('#ru_div').attr('class','registration_user border_spec');
        $('#ru_div').find('span').html('');
        $('#rs_div').attr('class','registration_specialist');
        $('#rs_div').find('span').html('<i class="fa fa-check"></i> ');
        $('#role_id').val('specialist');
    });
    $('#ru_div').click(function(){
        $('#ru_div').attr('class','registration_user');
        $('#ru_div').find('span').html('<i class="fa fa-check"></i> ');
        $('#rs_div').attr('class','registration_specialist border_user');
        $('#rs_div').find('span').html('');
        $('#role_id').val('user');
    });
});