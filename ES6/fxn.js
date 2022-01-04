/*function message(say='Hi') {
    console.log(say);
}
message();
message('Hello');


function add(x,y) {
    console.log(x+y);
}
add(1000,200);


function message(name,age=21,gender) {
    console.log(name,age,gender);
}
message('karthi',21,'Male');
message();
message('prabhu',21,'male');


function mix(first,second='b') {
    console.log(arguments.length);
    console.log(first===arguments[0]);
    console.log(second===arguments[1]);
    first='c';
    second='d';
    console.log(first===arguments[0]);
    console.log(second===arguments[1]);
}
mix('a');


function result() {
    return 5;
}
function add(first,second=result()) {
    return first+second;
}
console.log(add(1,8));
console.log(add(5));


let value=5;

function result() {
    return value++;
}

function add(a,b=result()) {
    return a+b;
}
console.log(add(1,17));
console.log(add(5));
console.log(add(5));

let value=5;

function result(value) {
    return value+5;
}

function add(a,b=result(a)) {
    return a+b;
}
console.log(add(1,17));
console.log(add(5));
console.log(add(5));
*/