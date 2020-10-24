for(let number4 = 1; number4 <=100; number4++){
    if(number4 % 5 === 0 && number4 % 3 === 0){
        console.log(`FizzBuzz!!`);
} else if(number4 % 5 === 0){
    console.log(`Buzz!!`);
} else if(number4 % 3 === 0){
    console.log(`Fizz!!`);
} else{
    console.log(number4);
}
}