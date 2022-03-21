//basic example
var name="Karthick";

console.log(name);

//variable hoisting

greetings = 'Welcome to the Javascript';

console.log(greetings);

var greetings;

//updaing a variable

var myName = 'Karthick';
console.log(myName);
var myName = 'prabhu'
console.log(myName);

//Variable Types

var myNumber = 500;
console.log(myNumber);

var myString = 'Hello WOrld';
console.log(myString);

var test = 6>3;
console.log(test);

var myArray = ['karthi','prabhu','neffi'];
console.log(myArray);

var myObj = {
    model : 'f-z',
    company : 'Yamaha',
    amount : 80000  
};
console.log(myObj.model);

//Dynamic type

var newGreet = 'welcome to Aspire Systems';
console.log(typeof newGreet);

var newNum = '550';
console.log(typeof newNum);

var newNum = 600;
console.log(typeof newNum);

//let and constants in JS

let fruit;
fruit = 'mango';
console.log(fruit);
fruit = 'apple';
console.log(fruit);

const animal = 'dog';
console.log(animal);