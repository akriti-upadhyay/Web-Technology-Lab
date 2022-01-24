// 1. To check if the given number is prime or not.

function isPrime(num){
    if(num <= 1)
        return false;
    for(let i=2; i<=Math.sqrt(num); i++){
        if(num % i == 0)
            return false;
    }
    return true;
}

let num = window.prompt("Enter a number: ");
if(isPrime(num))
    alert(`${num} is Prime`);
else
    alert(`${num} is NOT Prime`);
