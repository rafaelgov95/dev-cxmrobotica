$(function() {
    $("button#btn_login").click(function(){
        event.preventDefault();
        /* the email & the password values from the index page are assigned to varialbes */
        var emailV = $( "#txt_IDemail" ).val();
        var pwdV = $( "#txt_IDpwd" ).val();
        /* check and make sure the user didn't submit blank values.
         This is where you can add more validation checks which i left open for expantion */
        if(emailV =="" || pwdV =="" ){
            $("#msgDisplay").html("Email address or password fields cannot be empty");
        }
        else{
            $.ajax({
                type: "POST",
                url: "loginprocess.php", /* to validate the user input with database */
                data: {'myEmail': emailV, 'myPwd': pwdV}, /* passing the email & the password values to loginprocess.php */
                success: function(msg){
                    if(msg == 'success'){
                        alert('test1=>: ' + msg) ; /* debug testing */
                        $("#signmein").modal('hide');	/* hide the dialog box if the login is successfull */
                    }
                    else{
                        $("#msgDisplay").html(msg); /* Display login failer message in the div tag id=msgDisplay */
                        alert('test2=>: '+ msg);	/* debug testing */
                    }
                },
                error: function(){
                    $("#msgDisplay").html("Credentials not found!");
                }
            });

        }
        return false;
    });
});
