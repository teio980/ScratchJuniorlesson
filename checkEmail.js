function checkEmail(){
    let email = document.getElementById("U_Email").value;
    const condition = /^[a-zA-Z0-9._%+-]+@.+\..+$/;

    if (condition.test(email)) {
        return true;
    } else {
        return false;
    }
}