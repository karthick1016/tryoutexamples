function userName()
{
    var uname = document.getElementById('uname').value;
    console.log(uname);
    if(/^([A-Za-z]{4,})$/.test(uname)==false){
        alert("Username is not correct");
    }
}

function emailValid()
{
    var email = document.getElementById('email').value;
    console.log(email);
    if(/^([A-Za-z0-9]){4,8}@([A-za-z]){5}.([a-z]){3}$/.test(email)==false){
        alert("Email is not correct");
    }
}

function phoneNumber() {
    var phone = document.getElementById('phone').value;
    console.log(phone);
    if(/^([0-9]{10})$/.test(phone) == false){
        alert("phone number is not correct");
    }
}

function password() {
    var pass = document.getElementById('pwd').value;
    console.log(pass);
    if(/^([A-Za-z0-9]){6,}$/.test(pass)==false){
        alert("password is not correct");
    }
}

function repassword() {
    var pwd = document.getElementById('pwd');
    var repass = document.getElementById('repwd');

    if(pwd != repass){
        alert("Password Mismatch");
    }
}