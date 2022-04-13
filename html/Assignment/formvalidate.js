const btn = document.getElementById('btn');
btn.addEventListener('click',clickBtn);
const btns = document.getElementById('btns');
btns.addEventListener('click',prevBtn);
var tab2 = document.getElementById('tab2');
tab2.style.display = "none";

function clickBtn(event) {
    const tab1 = document.getElementById('tab1');
    tab1.style.display = "none";
    tab2.style.display = "block";
    event.preventDefault();
    console.log("running");
}
function prevBtn(ev) {
    tab2.style.display = "none";
    tab1.style.display = "block";
    ev.preventDefault();
    console.log("runnnigs");
}
