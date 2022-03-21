const string = "Today is a good day";
console.log(string);

//concatenation

const name = 'karthick';
const greet = `Hi ${name}`;
console.log(greet);

const one = 'Hellon';
const two = 'Namaskaram';
const joined = `${one}${two}`;
console.log(joined);


//length of the string

var comics = 'Avengers';
console.log(comics.length);

// check substring

var hero = 'CaptainAmerica';

if(hero.includes('America')){
    console.log("America Found");
}else{
    console.log("Error");
}
//startswith and endswith
var hero = 'Ironman';
console.log(hero.startsWith('man'));
console.log(hero.endsWith('man'));


//slice
var comics = "Marvel";
console.log(comics.slice(3));

//changing case 
var car = 'mahindrathar';
console.log(car.toUpperCase());

var company = 'ASPIRESYSTEMS';
console.log(company.toLowerCase());

//Updating parts

var heros = 'Ironman';
console.log(heros.replace('Iron','Super'));