const people = 
    {
        Pname: "random",
        age: 10,
        city: 'NY',
        Paddress: 
            {
                street: "x",
                num: 20
            }
    }
const {Pname, age} = people
console.log(Pname, age);

const {Paddress: {street}} = people

console.log(street);


