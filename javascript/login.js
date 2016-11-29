$(document).ready( function() {

    $( "form#loginForm" ).submit(function( event ) {
        var user = $("form#loginForm input[name='username']").val();
        var value = $("form#loginForm input[name='password']").val();
        var hash = new Hashes.SHA1().hex(value);
        var passou = false;

        $.ajax({
            type : "POST",
            url : "../database/action_user_pass.php",
            data : {"username" : user, "password" : hash},
            datatype : "text",
            success : function(data){
                var elem = $("form#loginForm input[name='password']")[0];
                console.log(data);
                if(data == "true"){
                    elem.setCustomValidity("");
                    passou = true;
                } else {
                    elem.setCustomValidity("Wrong Password!");
                }
            },
            async : false
        });

        if(passou){
            $("form#loginForm input[name='password']").val(hash);
            return;
        }
        return false;
    });

    $( "form#loginForm input[name='password']" ).blur(function( event ) {
        var elem = $("form#loginForm input[name='password']")[0];
        elem.setCustomValidity("");
    });

    $( "form#loginForm input[name='username']" ).blur(function( event ) {
        var user = $("form#loginForm input[name='username']").val();
        $.ajax({
            type : "POST",
            url : "../database/action_user_exists.php",
            data : {"username" : user},
            datatype : "text",
            success : function(data) {
                var elem = $("form#loginForm input[name='username']")[0];
                if(data != user){
                    elem.setCustomValidity("Username does not exist!");
                } else {
                    elem.setCustomValidity("");
                }
            }});
    });

});
