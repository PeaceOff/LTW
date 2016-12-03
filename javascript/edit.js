$(document).ready( function() {

    $("form#userProfileForm input[name='rpassword']").blur(function ( event ) {
        var pass = $("form#userProfileForm input[name='npassword']").val();
        var rpass = $("form#userProfileForm input[name='rpassword']").val();
        var elem = $("form#userProfileForm input[name='rpassword']")[0];
        if(pass != rpass)
            elem.setCustomValidity("Password does not match!");
        else
            elem.setCustomValidity("");
    });


    $( "form#userProfileForm" ).submit(function( event ) {

        $("form#userProfileForm input[name='rpassword']").blur();

        var user = $("form#userProfileForm input[name='username']").val();
        var value = $("form#userProfileForm input[name='password']").val();
        var passou = false;

        $.ajax({
            type : "POST",
            url : "../database/action_user_pass.php",
            data : {"username" : user, "password" : value},
            datatype : "text",
            success : function(data){
                var elem = $("form#userProfileForm input[name='password']")[0];
                if(data == "true"){
                    $( "form#userProfileForm input[name='password']" ).blur();
                    passou = true;
                } else {
                    elem.setCustomValidity("Wrong Password!");
                }
            },
            async : false
        });

        return passou;
    });

    $( "form#userProfileForm input[name='password']" ).blur(function( event ) {
        var elem = $("form#userProfileForm input[name='password']")[0];
        elem.setCustomValidity("");
    });

});
