function checkPassword(){
    let password = document.getElementById("U_Password").value;
    let C_password = document.getElementById("U_Confirmed_Password").value;
    const condition = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$/;

    if (password !== C_password) {
        alert("Password do not match!");
        location.reload();
        return false;
    } else {
        if (condition.test(password)) {
            console.log("密码有效！");
            return true;
        } else {
            console.log("密码不符合要求！");
        }
        return true;
    }

}

function checkEmail(){
    let email = document.getElementById("U_Email").value;
    const condition = /^[a-zA-Z0-9._%+-]+@.+\..+$/;

    if (condition.test(email)) {
        return true;
    } else {
        return false;
    }
}