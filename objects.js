/*const person = {
    name : 'karthi',
    age : 21,
    bio : function(){
        console.log(`${this.name} is ${this.age} years old`);
    },
    intro : function(){
        console.log(`Hi I am ${this.name}`);
    }
}

console.log(person.name);
person.bio();
person.intro();


const persons = {
    name : {
        first : 'swamy',
        last : 'nathan'
    },
    age : {
        firstAge : 21,
        lastAge : 22
    },
    bio(){
        console.log(`${this['name']['first']} is ${this['age']['firstAge']} years old`);
        console.log(`${this['name']['last']} is ${this['age']['lastAge']} years old`);
    },
    intro(){
        console.log(`Hi I am ${this['name']['first']}`);
        console.log(`Hi I am ${this['name']['last']}`);
    }
}
persons.bio();
persons.intro();
*/
//using contructor for multiple objects

function Person(name){
    this.name = name;
    this.introduce = function(){
        console.log(`Hi Im ${this.name}`);
    }
}
const karthi = new Person('karthi');
karthi.name;
karthi.introduce();

const prabhu = new Person('prabhu');
prabhu.name;
prabhu.introduce();
