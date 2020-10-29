//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];

function isEven(num){
    for(let i = 0; i < numbers.length; i++){
        if(numbers[i] % 2 === 0){
            console.log(numbers[i] + `は偶数です`);
        }
    }
}
isEven();


//問2
class Car{
    constructor(gasoline, number){
        this.gasoline = gasoline;
        this.number = number;
    }

    getNumGas(){
        console.log(`ガソリンは${this.gasoline}です。ナンバーは${this.number}です`);
    }
}

let 〇〇 = new Car(`〇〇`, `△△`);
〇〇.getNumGas();

