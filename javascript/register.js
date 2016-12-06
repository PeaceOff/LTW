$(document).ready( function() {

    $("form#registerForm input[name='rpassword']").blur(function ( event ) {
        var pass = $("form#registerForm input[name='password']").val();
        var rpass = $("form#registerForm input[name='rpassword']").val();
        var elem = $("form#registerForm input[name='rpassword']")[0];
        if(pass != rpass)
            elem.setCustomValidity("Password does not match!");
        else
            elem.setCustomValidity("");
    });

    $("form#registerForm input[name='username']").blur(function ( event ) {
        var user = $("form#registerForm input[name='username']").val();
        user = user.toLowerCase();
        $.ajax({
            type : "POST",
            url : "../database/action_user_exists.php",
            data : {"username" : user},
            datatype : "text",
            success : function(data) {
                var elem = $("form#registerForm input[name='username']")[0];
                if(data == user){
                    elem.setCustomValidity("Username is taken!");
                } else {
                    elem.setCustomValidity("");
                }
            }});
    });

    $( "form#registerForm" ).submit(function( event ) {
        var pass = $("form#registerForm input[name='password']").val();
        var rpass = $("form#registerForm input[name='rpassword']").val();
        if(pass != rpass)
            return false;
    });

});
