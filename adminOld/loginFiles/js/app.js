$(document).ready(function () {
  $(".login100-form-btn").click(function () {
    $btn = $(this);
    $btn.html('<img src='+window.location.origin+'/Login/images/loading.gif  width="25px">')
    $btn.prop( "disabled", true );
    var email = $(".email").val();
    var password = $(".password").val();
    var checkBox = $(".input-checkbox100:checked").val();
    if (checkBox == "on"){checkBox="set";}else{checkBox="unset";}
    if (email == "" || password == "") {
      $(".error-msg").html("Please fill out this field");
      event.preventDefault();
      $btn.prop( "disabled", false );
      $btn.html('login');
      return false
    }else{
    $.post(window.location.origin + "/Login/action.inc.php", { "Signup": "", "Email": email, "Password": password, "Remember": checkBox})
      .done(function (data) {
        $btn.html('login');
        $btn.prop( "disabled", false );
        if(data=="error"){$(".error-msg").html("incorrect email or password");}
        else{window.location.href = data;}
      });}
  });
});
$(window).on('load', function(e){
  if (window.location.hash == '#_=_') {
    window.location.hash = ''; // for older browsers, leaves a # behind
    history.pushState('', document.title, window.location.pathname); // nice and clean
    e.preventDefault(); // no page reload
  }
});
$(document).ready(function(){
  $(".on_homepage").click(function(){
      window.location.href = "https://cristian.aetsmsoft.com/";
  });
});