/*function sum(...num) {
    let total=0;
    for(const a of num)
    {
        total+=a;
    }
    return total;
}
console.log(sum(1,2,3));


function numbers(...args) {
    console.log(args.length);
    console.log(arguments.length);
    console.log(args[0],arguments[0]);
    console.log(args[1],arguments[1]);
}
numbers(1,5,6,8,7);

//function constructor

var add=new Function("first","second","return first+second");
console.log(add(5,6));

var add=new Function("first","second=first","return first*second");
console.log(add(7));

var numbers=new Function("...keys","return keys[2]");
console.log(numbers(1,5,9));

//Spread Operator

let value1=25,value2=50;
console.log(Math.max(value1,value2));


let values=[25,50,4,64];
console.log(Math.max.apply(Math,values));//Apply method used in es5 

//Instead of apply method we use spread operator
let values=[4,99,85,47];
console.log(Math.max(...values));


let val=[7,8,-9,1];
console.log(Math.max(...val,0));

function person(name){
    this.name=name;
}
var Person=new person("karthi");
var notPerson=person('prabhu');
console.log(notPerson);
console.log(Person);


function Person(name) {
    if(typeof new.target!="undefined"){
        this.name=name;
    }else{
        throw new Error("Use new Person");
    }
}
var person=new Person("Karti");
console.log(person);

function Person(name) {
    if(new.target===Person){
        this.name=name;
    }else{
        throw new Error("Handle");
    }
}

function another(name) {
    Person.call(this,name);
}

var person=new Person("karthi");
//var anotherPerson=new another("prabhu");
console.log(person);
//console.log(anotherPerson);


//Block level fxn using strict mode

"use strict";

if(true){
    console.log(typeof doSomething);

    function doSomething() {
        console.log("Hello World");
    }
    doSomething();
}
console.log(typeof doSomething());

//Block Level fxn without strict mode

if(true)
{
    console.log(typeof means);

    function means() {
        console.log("Hi,Welcome");
    }
    means();
}
console.log(typeof means);
*/  