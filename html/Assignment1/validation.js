var tab1 = document.getElementById('tab1');
var tab2 = document.getElementById('tab2');
var tab3 = document.getElementById('tab3');
var tab4 = document.getElementById('tab4');
var tab5 = document.getElementById('tab5');
var tab6 = document.getElementById('tab6');
// tab1.style.display = "none";
tab2.style.display = "none";
tab3.style.display = "none";
tab4.style.display = "none";
tab5.style.display = "none";    
tab6.style.display = "none";
const btn1 = document.getElementById('btn1');
const pbtn = document.getElementById('pbtn');
pbtn.addEventListener('click',pmovetab1);
const nbtn = document.getElementById('nbtn');
const pbtn1 = document.getElementById('pbtn1');
pbtn1.addEventListener('click',pmovetab2);
const nbtn1 = document.getElementById('nbtn1');
nbtn1.addEventListener('click',nmovetab4);
const pbtn2 = document.getElementById('pbtn2');
pbtn2.addEventListener('click',pmovetab3);
const nbtn2 = document.getElementById('nbtn2');
// nbtn2.addEventListener('click',nmovetab5);
const pbtn3 = document.getElementById('pbtn3');
pbtn3.addEventListener('click',pmovetab4);
const subbtn = document.getElementById('nbtn3');

function firstName() {
    var fname = document.getElementById('fname').value;
    var fnameerr = document.getElementById('fnameerr');
    var pattern = /^([A-Za-z\s]){5,}$/;
    if(!pattern.test(fname)){
        fnameerr.innerHTML = "Invalid Firstname"
        fnameerr.style.color = "white";
        fnameerr.style.backgroundColor = "#3399ff";
        fnameerr.style.fontStyle = "italic";
        // tab1.style.display = "block";
    }else{
        fnameerr.style.display = "none";
    }
}

function emailValid() {
    var email = document.getElementById('email').value;
    var emailerr = document.getElementById('emailerr');
    var emailPattern = /^([a-zA-Z0-9]){5,}@([a-z]){5}.(com)$/;
    if(!emailPattern.test(email)){
        emailerr.innerHTML = "Invalid Email";
        emailerr.style.color = "white";
        emailerr.style.backgroundColor = "#3399ff";
        emailerr.style.fontStyle = "italic";
    }else{
        emailerr.style.display = "none";
    }
}

function passValid() {
    var passPattern = /^([a-z0-9]){6,}$/;
    var upass = document.getElementById('password').value;
    var upass_err = document.getElementById('passerr');
    if(!passPattern.test(upass)){
        upass_err.innerHTML = "Invalid Password";
        upass_err.style.backgroundColor = "#003366";
        upass_err.style.color = "white";
        upass_err.style.fontStyle = "italic";
    }
    else{
        upass_err.style.display = "none";
        tab1.style.display = "none";
        tab2.style.display = "block";
    }   
}

function repassValid() {
    var passwords = document.getElementById('password').value;
    var rePassword = document.getElementById('re_password').value;
    var repasserr = document.getElementById('repasserr');
    if(passwords != rePassword){
        repasserr.innerHTML = "Password mismatch";
        repasserr.style.backgroundColor = "#ff471a";
        repasserr.style.color = "#ffffff";
        repasserr.style.fontStyle = "italic";
        repasserr.style.display = "block";
    }
    else{
        repasserr.style.display = "none"; 
    }
}
// function movetab2(eve) {
//     eve.preventDefault();
//     tab1.style.display = "none";
//     tab2.style.display = "block";
// }
btn1.addEventListener('click',function (event) {
    event.preventDefault();
    firstName();
    emailValid();
    passValid();
    repassValid();
});


function dobValidate() {
    var dob = document.getElementById('dob').value.required;
    var doberr = document.getElementById('doberr');
    
}
function genderreq() {
    var radio = document.getElementById('myradio').required;
}

function stateValid() {
    var states = document.getElementById('states').required;
}

function numberValid() {
    var phonePattern = /^([0-9]{10})$/;
    var number = document.getElementById('phone').value;
    var phoneerr = document.getElementById('phoneerr');
    if(!phonePattern.test(number)){
        phoneerr.innerHTML = "Invalid Phonenumber";
        phoneerr.style.backgroundColor = "#009900";
        phoneerr.style.color = "white";
        phoneerr.style.fontStyle = "italic";

    }else{
        phoneerr.style.display = "none";
        tab2.style.display = "none";
        tab3.style.display = "block";
    }
}
function pmovetab1(event) {
    event.preventDefault();
    tab2.style.display = "none";
    tab1.style.display = "block";
}
nbtn.addEventListener('click',function (event) {
    event.preventDefault();
    dobValidate();
    genderreq();
    stateValid();
    numberValid();
});
// function nmovetab3(event) {
//     event.preventDefault();
//     //  tab2.style.display = "none";
//     //  tab3.style.display = "block";
// }

function pmovetab2(event) {
    event.preventDefault();
    tab3.style.display = "none";
    tab2.style.display = "block";
}

function nmovetab4(event) {
    event.preventDefault();
    tab3.style.display = "none";
    tab4.style.display = "block";
}

function pmovetab3(event) {
    event.preventDefault();
    tab4.style.display = "none";
    tab3.style.display = "block";
}
function graduations() {
    var grad = document.getElementById('graduation').required;
    var year = document.getElementById('year').required;
    tab4.style.display = "none";
    tab5.style.display = "block";
}
// function yop() {
    
//     if(year==false){
//         tab4.style.display = "block";
//     }else{
        
//     }
// }
// nbtn2.addEventListener('click',function(event) {
//     event.preventDefault();
//     graduations();
//     yop();
//     // tab4.style.display = "none";
//     // tab5.style.display = "block";
// });
// function nmovetab5(event) {
//     event.preventDefault();
//     // tab4.style.display = "none";
//     // tab5.style.display = "block";
// }
function pmovetab4(event) {
    event.preventDefault();
    tab5.style.display = "none";
    tab4.style.display = "block";
}
function terms() {
    const dept = document.getElementById('dept').required;
    const termss = document.getElementById('terms').required;
    tab5.style.display = "none";
    tab6.style.display = "block";
}
var nbtn4 = document.getElementById('nbtn4');

