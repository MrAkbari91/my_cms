
// login admin
function adminlogin(){
    var adminemail=$("#adminemail").val();
    var adminpwd=$("#adminpwd").val();

    $.ajax({
        url:"login.php",
        method:"POST",
        data:{
            checkloginemail:"checkloginemail",
            adminemail : adminemail,
            adminpwd : adminpwd,
        },
        success: function(data){
            if(data==0){
                $("#statusmsglogin").html("<span class='alert alert-danger'>invalid email id or password</span>");
            }else if(data==1){
                $("#statusmsglogin").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href="index.html";
                },1000);
            }
        },
    });
}
