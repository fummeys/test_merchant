class Pet {
    taxonomy = 'animal'
    sleep(q, name){
        for(let i = 0;i < q; i++){
            console.log(`${name} is sleeping for ${q} hour`)
        }
    }
}

class Dog extends Pet {
    group = 'mamal'
    sound(q){
        for(let i = 0;i < q; i++){
            console.log(`${i +1} woof!`)
        }
    }
}
class Cat extends Pet{
    group = 'mamal'
    sound(q){
        for(let i = 0;i < q; i++){
            console.log(`${i +1} meoooow!`)
        }
    }
}


let bingo = new Dog()
let susu = new Cat()
// bingo.sound(2)
// susu.sound(1)
susu.sleep(2,'susu')

console.log(bingo,susu)