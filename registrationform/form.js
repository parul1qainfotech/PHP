console.log("hello");
function validate()
{
    
let mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;

let emailid=document.getElementById("email").value;

if(mailformat.test(emailid)==false)
{

document.getElementById("validate2").innerHTML="use the correct email-id";

}

else{return true;}




let p=document.getElementById("password").value;
let r=document.getElementById("rpassword").value;
if(p!=r){
    document.getElementById("validate4").innerHTML="please type the same password";
    return false;
}
else{return true;}



}