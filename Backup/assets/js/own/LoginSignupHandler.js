$('#login').on("submit", function(e){
    e.preventDefault();
    ClearErrMsg();
    $.ajax({
        url:api+"LoginHandler.php?type=Login",
        type:'Post',
        data:$(this).serialize(),
        success: function(response){
            console.log(response);
            resp = JSON.parse(response);
            if(resp.Status == "1")
            {
                if($('input[name="check"]').checked)
                {
                    setCookie("user",resp.SessionId,90);
                }
                else
                {
                    setCookie("user",resp.SessionId,0.5);
                }
                window.location.href = '/';
            }
            else{
                setErrMsg(resp.Reason);
            }
        }
    });
});

$('#signup').on("submit", function(e){
    e.preventDefault();
    ClearErrMsg();
    $.ajax({
        url:api+"LoginHandler.php?type=Signup",
        type:'Post',
        data:$(this).serialize(),
        success: function(resp){
            if(resp.status == "1")
            {
                setGreenMsg("Please Verify via email");
            }
            else{
                setErrMsg(resp.Reason);
            }
        }
    });
});

