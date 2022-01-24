// 6. Print all the perfect numbers in the given range.

function isPerfect(num){
    let sum = 0;
    for(let i=1; i<=num/2; i++){
        if(num%i == 0)
            sum += i;
    }
    if(num == sum && sum!= 0)
        return true;
    else
        return false;
}

let begin = window.prompt("Enter start of range: ");
let end = window.prompt("Enter end of range: ");
console.log(`Perfect nums in range [${begin},${end}] are: `);

for(let i=begin; i<=end; i++){
    if(isPerfect(i))
        console.log(i);
}