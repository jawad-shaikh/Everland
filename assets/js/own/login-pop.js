
function cartWorkAround(){
    const cartBtn = document.querySelectorAll('.cartBtn');
    const closeBtn = document.querySelector('.btn-close');
    const sessionID = getCookie("user");
    
    closeBtn.addEventListener('click', () => {
        document.querySelector('.modal.show').classList.add('login-modal-pop');
    })
    
    if(sessionID === ''){
    cartBtn.forEach((btn) => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector('.login-modal-pop').classList.remove('login-modal-pop');
        })
    })
    }
    // else{
    //     AddToCart(from, productId);
    // }    
}

cartWorkAround();

function loggedIn(callback){

    const SessionID = getCookie('user');

    if(SessionID !== ''){
        callback();
        return;
    }
    document.querySelector('.login-modal-pop').classList.remove('login-modal-pop');
    //Get Login Form
    const form = document.querySelector('.log-pop-form');    
    const submit = form.querySelector('button[type="submit"]');

    //Prevent Form, from doing any further operation, 
    form.addEventListener('submit', e => {e.preventDefault();});
    
    //Main Async Function to Logged in 
    submit.addEventListener('click', () => {
        const emailAddress = document.querySelector('.email-field').value;
        const Password = document.querySelector('.password-field').value;
        const loginCheck = document.querySelector('.loginCheck');


        $.ajax({
        url: api+"LoginHandler.php?type=Login", 
        type:"POST",
        data: {
            'Email': emailAddress, 
            'Password':Password
        },
        success: (result) => {    
            var session = JSON.parse(result);
            if(session.Status == '1'){
                loginCheck.checked ? setCookie('user', session.SessionId, 90) : setCookie('user', session.SessionId, 1);
                Auth();
                document.querySelector('.modal.show').classList.add('login-modal-pop');
                callback();
            }
            else{
                $('#Msg').css("color","red");
                $('#Msg').html('Wrong Username Or Password');
            }
        }
    });
});
}
