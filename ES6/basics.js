//const declaration with objects

/*const person={
    name:"KArthi"
};
console.log(person.name);
person.name="Prabhu";
console.log(person.name);

person={
    name="saravanan"
};

const a=10;

if(a==10){
    value="blue";
    console.log(value);
}
var value;
//This is called Hoisting.

const a=10;
if(a==10){
    console.log(value);//This is Temporaral dead zone
    let value="red";
}

const name="Karthi";

console.log(value);//In this one the output is value is not defined because it is in the outside of the block.

if(name=="Karthi"){
    let value="Hello World"
}

//Block Binding in Loops

for(var i=1;i<=10;i++){
    console.log(i);
}

var funs=[];

for(var i=0;i<10;i++){
    funs.push(function() {
        console.log(i);
    })
}
funs.forEach(function(fun){
    fun();
})

var funcs=[];

for(var i=0;i<10;i++){
    funcs.push((function(value){
        return function(){
            console.log(value);
        }
    }(i)));
}
funcs.forEach(function(func){
    func();
});


var funcs=[];
for(let i=0;i<=10;i++){
    funcs.push(function(){
        console.log(i);
    })
}
funcs.forEach(function(func){
    func();
})
*/

var funcs=[],
    object={
        a:true,
        b:true,
        c:true
    };

for(let key in object){
    funcs.push(function(){
        console.log(key);
    })
}
funcs.forEach(function(func){
    func();
});