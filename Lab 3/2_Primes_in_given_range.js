// 2. Print all the prime numbers in the given range.

function isPrime(num){
    if(num <= 1)
        return false;
    for(let i=2; i<=Math.sqrt(num); i++){
        if(num % i == 0)
            return false;
    }
    return true;
}

function printPrimes(begin, end){
    for(let i=begin; i<=end; i++){
        if(isPrime(i))
            console.log(i);
    }
}

let begin = window.prompt("Enter start of range: ");
let end = window.prompt("Enter end of range: ");
console.log(`Prime nums in range [${begin},${end}] are: `);
printPrimes(begin, end);
