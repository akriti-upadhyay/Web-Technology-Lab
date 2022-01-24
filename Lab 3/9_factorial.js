// 9. Find out the factorial of a given number.

function factorial(num){
    if(num==1 || num==0)
        return 1;
    return num * factorial(num-1);
}

let num = window.prompt("Enter a num: ");
console.log(`Factorial of ${num} is ${factorial(num)}`);