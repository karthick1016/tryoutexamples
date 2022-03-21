//array
/*
var animals = ['dog','cat','rabbit','cow'];
console.log(animals);

var numbers = [1,2,[0,1,3]];
console.log(numbers);

//length

var animals = ['dog','cat','rabbit','cow'];
console.log(animals.length);

//Access and modifying 

var numbers = [1,2,[0,1,3]];
console.log(numbers[2][1]);

var animals = ['dog','cat','rabbit','cow'];
animals[1]='goat';
console.log(animals);

//finding items

var animals = ['dog','cat','rabbit','cow'];
console.log(animals.indexOf('goat'));
console.log(animals.indexOf('cow'));

//push & pop

const cities = ['Chennai','Coimbatore','Trichy'];
console.log(cities);
cities.push('Thoothukudi','Madurai');
console.log(cities);

cities.pop();
console.log(cities);


//accessing every items

var animals = ['dog','cat','rabbit','cow'];

for (const animal of animals) {
    console.log(animal);
}
*/

var data = 'dog,cow,rabbit,pig,goat';
var animals = data.split(',');
console.log(animals);