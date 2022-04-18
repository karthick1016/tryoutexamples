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

function previous(event,container1,container2) {
    event.preventDefault();
    container1.style.display = "none";
    container2.style.display = "block";
}
function pmovetab1(event) {previous(event,tab2,tab1);}
function pmovetab2(event) {previous(event,tab3,tab2);}
function pmovetab4(event) {previous(event,tab5,tab4);}
function pmovetab3(event) {previous(event,tab4,tab3);}

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
        return 1;
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
        return 1;
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
        return 1;
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
        return 1;
    }
}
function check(event) {
    event.preventDefault();
    firstName();
    emailValid();
    passValid();
    repassValid();
    if(firstName() && emailValid() && passValid() && repassValid())
    {
        return 1;
    }
}

function moveTabb(event,checkers,container3,container4) {
    if(checkers(event)){
        container3.style.display = "none";
        container4.style.display = "block";
    }
}



function dobValidate() {
    var dob = document.getElementById('dob').value;
    var doberr = document.getElementById('doberr');
    var dateFormat = new Date(dob);
    var now = new Date();
    var dateDiff = now.getFullYear() - dateFormat.getFullYear();
    if(dateDiff>=18 && dateDiff <=60){
        doberr.style.display = "none";
        return 1;
    }else{
        doberr.innerHTML = "Age Format"
        doberr.style.backgroundColor = "#ff471a";
        doberr.style.color = "#ffffff";
        doberr.style.fontStyle = "italic";
        doberr.style.display = "block";
    }
}//karthi10
function genderreq() {
    if(document.getElementById('male').checked){
        return 1;
    }else if(document.getElementById('female').checked){
        return 1;
    }else if(document.getElementById('others').checked){
        return 1;
    }else{
        return 0;
    }
}

function stateValid() {
    var state = document.getElementById('state');
    if(state.value == ""){
        return 0;
    }
    return 1;
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
        return 1;
    }
}
function checkTab(event) {
    event.preventDefault();
    dobValidate();
    genderreq();
    stateValid();
    numberValid();
    if(dobValidate() && numberValid() && genderreq() && stateValid()){
        return 1;
    }
}
function nmovetab4(event) {
    event.preventDefault();
    tab3.style.display = "none";
    tab4.style.display = "block";
}
function graduations() {
    var grad = document.getElementById('grad');
    if(grad.value == ""){
        return 0;
    }
    return 1;
}
function yop() {
    if(document.getElementById('year').value == ""){
        return 0;
    }
    return 1;
}
function checkEducation(event) {
    event.preventDefault();
    graduations();
    yop();
    if(graduations() && yop()){
        return 1;
    }
}
// function terms() {
//     const termss = document.getElementById('terms').required;
//     tab5.style.display = "none";
//     tab6.style.display = "block";
// }
// subbtn.addEventListener('click',function(event){
//     event.preventDefault();
//   tab5.style.display = "none";
//    tab6.style.display = "block";
// });

function departments() {
    var dept = document.getElementById('department');
    if(dept == ""){
        return 0;
    }return 1;
}
function checkbox() {
    if(document.getElementById('terms').checked){
        return 1;
    }
    return 0;
}
function terms_conditions(event) {
    event.preventDefault();
    checkbox();
    departments();
    if(checkbox() && departments()){
        return 1;
    }
}
function moveTab(event){moveTabb(event,check,tab1,tab2);}
function movetab3(event){moveTabb(event,checkTab,tab2,tab3);}
function moveTab5(event) {moveTabb(event,checkEducation,tab4,tab5);}
function moveTab6(event) {moveTabb(event,terms_conditions,tab5,tab6);}

document.getElementById('pop_up').addEventListener('submit',function(event){
    event.preventDefault();
});

