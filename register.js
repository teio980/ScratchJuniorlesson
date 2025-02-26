function checkPassword(){
    let password = document.getElementById("U_Password").value;
    let C_password = document.getElementById("U_Confirmed_Password").value;

    if (password !== C_password) {
        alert("Password do not match!");
        location.reload();
        return false;
    } else {
        
        return true;
    }
}