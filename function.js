
const myString = 'Hi I am Karthick!!';
const newString = myString.replace('Karthick','Prabhu');
console.log(newString);

//fxn invoking

function greet() {
    console.log("Welcome");
}
greet();

//fxn parameters

function wel(name) {
    console.log(`Hello ${name}`);
}
wel('prabhu');
wel();

function hello(name = 'karthick') {
    console.log(`Hello ${name}`);
}
hello('prabhu');
hello();
