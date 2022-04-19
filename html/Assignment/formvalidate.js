var tab1 = document.getElementById('tab1');
var tab2 = document.getElementById('tab2');
var tab3 = document.getElementById('tab3');
var tab4 = document.getElementById('tab4');
var tab5 = document.getElementById('tab5');
var tab6 = document.getElementById('tab6');
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
const pbtn3 = document.getElementById('pbtn3');
pbtn3.addEventListener('click',pmovetab4);
const subbtn = document.getElementById('nbtn3');
function previous(event,container1,container2) {
    event.preventDefault();
    container1.style.display = "none";
    container2.style.display = "block";
}
function pmovetab1(event) {previous(event,tab2,tab1);}
function pmovetab2(event) {previous(event,tab3,tab2);}
function pmovetab4(event) {previous(event,tab5,tab4);}
function pmovetab3(event) {previous(event,tab4,tab3);}

function validations(name,showerror,pattern,errormessage) {
    if(!pattern.test(name)) {
        showerror.innerHTML = errormessage;
    }else {
        showerror.style.display = "none";
        return name;
    }
}
function firstName() {
    return validations(document.getElementById('fname').value,document.getElementById('fnameerr'),
    /^([A-Za-z\s]){5,}$/,"Invalid Firstname");
}
function emailValid() {
    return validations(document.getElementById('email').value,document.getElementById('emailerr'),
    /^([a-zA-Z0-9]){5,}@([a-z]){5}.(com)$/,"Invalid Email");
}
function passValid() {
    return validations(document.getElementById('password').value,document.getElementById('passerr'),
    /^([a-z0-9]){6,}$/,"Invalid Password");  
}
function repassValid() {
    const passwords = document.getElementById('password').value;
    const rePassword = document.getElementById('re_password').value;
    const repasserr = document.getElementById('repasserr');
    if(passwords != rePassword) {
        repasserr.innerHTML = "Password mismatch";
    }else {
        repasserr.style.display = "none"; 
        return rePassword;
    }
}
function check(event) {
    event.preventDefault();
    if(emailValid() && passValid() && repassValid() && firstName()) {
        return 1;
    }
}
function moveTabb(event,checkers,container3,container4) {
    if(checkers(event)) {
        container3.style.display = "none";
        container4.style.display = "block";
    }
}
function moveTab(event) {moveTabb(event,check,tab1,tab2);}
function dobValidate() {
    return validations(document.getElementById('dob').value,document.getElementById('doberr'),
    /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19[7-9][0-9]|20[0][0-5])))$/,"Invalid");
} 
function genderreq() {
    if(document.getElementById('male').checked) {
        return 1;
    }else if(document.getElementById('female').checked) {
        return 1;
    }else if(document.getElementById('others').checked) {
        return 1;
    }else {
        return 0;
    }
}
function selectValid(values) {
    if(values == "!--SELECT--!") {
        return 0;
    }return 1;
}
function stateValid() {
    return selectValid(document.getElementById('state').value);
}
function numberValid() {
    return validations(document.getElementById('phone').value,document.getElementById('phoneerr'),
    /^([6-9]{1}[0-9]{9})$/,"Invalid Phonenumber");
}
function checkTab(event) {
    event.preventDefault();
    if(dobValidate() && numberValid() && genderreq() && stateValid()){
        return 1;
    }
}
function movetab3(event) {moveTabb(event,checkTab,tab2,tab3);}
function nmovetab4(event) {
    event.preventDefault();
    tab3.style.display = "none";
    tab4.style.display = "block";
}
function graduations() {
    return selectValid(document.getElementById('grad').value);
}
function yop() {
    if(document.getElementById('year').value == ""){
        return 0;
    }
    return 1;
}
function checkEducation(event) {
    event.preventDefault();
    if(graduations() && yop()){
        return 1;
    }
}
function moveTab5(event) {moveTabb(event,checkEducation,tab4,tab5);}
function departments() {
    return selectValid(document.getElementById('department').value);
}
function checkbox() {
    const termsandcondition = document.getElementById('termsandcondition');
    if(document.getElementById('terms').checked){
        termsandcondition.style.display = "none";
        return 1;
    }
    termsandcondition.innerHTML = "Please Accept";
    return 0;
}
function terms_conditions(event) {
    event.preventDefault();
    if(departments() && checkbox()){
        return 1;
    }
}
function moveTab6(event) {moveTabb(event,terms_conditions,tab5,tab6);}
