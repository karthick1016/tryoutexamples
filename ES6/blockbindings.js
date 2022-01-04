//Declarations 
var mymsg="Hello World"
console.log(mymsg);
var name="Karthick"
console.log("Welcome "+name);
//Spread Operator
//concanating array
let color=['Red','Yellow'];
let newColor=[...color,'Violet','Orange','Green'];
console.log(newColor);
//copying array
let colors=['Red','Yellow'];
let newcolors=[...colors];
console.log(newcolors);
//if we copy array elemetn without spread operator then inserting a new element to the copied array will affect the original array
let names=['Karthick','Prabhu','Akash']
let newnames=names;
newnames.push('Saravana');
console.log(newnames);
console.log(names);
//if we copy array elements using spread operator then inserting a new element to the copied array not affect the original array
let namess=['Karthick','Prabhu','Akash']
let newName=[...namess]
newName.push('Suriya');
console.log(namess);
console.log(newName);
//global and local scope
var var12=200;
function exam() {
    var var12=300;
    console.log("Local Scope " + var12);
}
console.log("Global Scope "+ var12);
exam();