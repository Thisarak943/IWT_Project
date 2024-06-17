

function checkPassword(){
    if(document.getElementById("pwd").value!=document.getElementById("confirmpwd").value){
        alert("password isn't match");
        return false;
    }
    else{
        alert("success");
        return true;
    }
}
function enableButton(){
    if(document.getElementById("checkbox1").checked){
        document.getElementById("sub").disabled=false;

    }
    else{
        document.getElementById("sub").disabled=true;
  
    }
}