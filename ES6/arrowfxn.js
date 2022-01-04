var num=value=>value;
console.log(num(5));

var add=(num1,num2)=>num1+num2;

console.log(add(2,5));

var add=function(num1,num2) {
    return num1+num2;
};
console.log(add(2,5));

let person=((name)=>{
    return {
        getName:function(){
            return name;
        }
    };
})("KArthi");
console.log(person.getName());