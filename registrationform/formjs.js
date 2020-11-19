

function validate()
{
    let user=document.getElementById("user").value;
    let emailid=document.getElementById("email").value;
    let pass=document.getElementById("passowrd").value;
    let repass=document.getElementById("repassowrd").value;




    if(user==" "){
        document.getElementById("validate1").innerHTML="please enter the user details";
   
    }
    if(emailid==" "){
        document.getElementById("validate2").innerHTML="please enter the emailid ";
        return false;
    }
    if(pass==" "){
        document.getElementById("validate3").innerHTML="please enter the user password ";
        return false;
    }
    if(repass==" "){
        document.getElementById("validate4").innerHTML="please retype the password";
        return false;
    }

    if(pass!=repass){
        document.getElementById("validate4").innerHTML="please enter the same password";
        return false;
    }


let mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;



if(mailformat.test(emailid)==false)
{
document.getElementById("validate2").innerHTML="use the correct email-id";
}
else{return true;}

}