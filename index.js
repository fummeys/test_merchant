class car {
    color = 'green'
    model = 'toyota'
    enginetype
    mile
    constructor(eng, m){
        this.enginetype = eng
        this.mile = m
    }
    revEngine(times){
        for(let i = 0; i < times; i++){
            console.log(`zoom!! ${i+1} times`)
        }
    }
    drivecar(q){
        this.revEngine(q)
        this.mile = this.mile + q
    }
}

let mydreamcar = new car('petrol',10)
let fawascar = new car('diesel',25)
mydreamcar.color = 'white'

mydreamcar.drivecar(7)

// mydreamcar.revEngine(3)
// fawascar.revEngine(10)

console.log(mydreamcar, fawascar)
