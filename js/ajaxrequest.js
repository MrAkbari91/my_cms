$(document).ready(function(){
    $("#remail").on("blur", function(){
        var remail=$("#remail").val();
        var reg=/^[A-Z0-9._%+-]+@([A-z0-9]+\.)+[A-Z]{2,4}$/i;

        $.ajax({
            url:"student/addstudent.php",
            method:"POST",
            dataType:"json",
            data:{
                checkemail : "checkemail",
                remail : remail,
            },
            success:function(data){
                // console.log(data);
                if(remail==""){
                    $("#msg2").html('<small style="color:red;">email nakho</small>');
                }
                if(data!=0){
                    $("#msg2").html('<small style="color:red;">email pelethi 6</small>');
                    $("#regbtn").attr("disabled",true);
                }else if(data==0 && reg.test(remail)){
                    $("#msg2").html('<small style="color:green;">have barobar</small>');
                    $("#regbtn").attr("disabled",false);
                }else if(!reg.test(remail)){
                    $("#msg2").html('<small style="color:red;">sarkho mail nakho</small>');
                    $("#regbregbtntn").attr("disabled",false);
                }
                
            },
        });
    });
})


function addstudent(){
    var reg=/^[A-Z0-9._%+-]+@([A-z0-9]+\.)+[A-Z]{2,4}$/i;
    var rname =$("#rname").val();
    var remail =$("#remail").val();
    var rpwd =$("#rpwd").val();

    // checking form filed on submission

    if(rname.trim()==""){
        $("#msg1").html('<small style="color:red;">Plese enter name</small>');
        $("#rname").focus();
        return false;
    }else if(remail.trim()==""){
        $("#msg2").html('<small style="color:red;">Plese enter email</small>');
        $("#remail").focus();
        return false;
    }else if(remail.trim() !=""&&!reg.test(remail)){
        $("#msg2").html('<small style="color:red;">plese Enter valid email e.g.exampale@gmail.com</small>')
    }else if(rpwd.trim()==""){
        $("#msg3").html('<small style="color:red;">Plese enter password</small>');
        $("#rpwd").focus();
        return false;
    }else{
        $.ajax({
            url:'addstudent.php',
            method:'POST',
            dataType:"json",
            data:{
                regbtn:"regbtn",
                rname:rname,
                remail:remail,
                rpwd:rpwd,
            },
            success:function(data){

                if(data=="OK"){
                    $('#statusmsgreg').html('<span class="alert alert-success">Registration Successfull</span>');
                    clearfield();
                    }else if(data=="Failed"){
                    $('#statusmsgreg').html('<span class="alert alert-danger">Unable to Register</span>');
                }
            },
        });
    } 
}

// fild reset

function clearfield(){
    $("#registration").trigger("reset");
    $("#msg1").html(" ");
    $("#msg2").html(" ");
    $("#msg3").html(" ");
}



// login student
function login(){
    var lemail=$("#lemail").val();
    var lpwd=$("#lpwd").val();
    $.ajax({
        url:"addstudent.php",
        method:"POST",
        data:{
            loginemail:"loginemail",
            lemail:lemail,
            lpwd:lpwd,
        },
        success: function(data){
            if(data==0){
                $("#statusmsglogin").html('<span calss="alert alert-danger">invalid email id or password</span>');
            }else if(data==1){
                $("#statusmsglogin").html('<div class="spinner-border tect-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href="index.php";
                },1000);
            }
        },
    });
}

