// 4. Print all the Armstrong numbers in the given range.

function isArmstrong(num){
    let numberOfDigits = num.toString().length;
    let sum = 0;

    let temp = num;
    while(temp){
        let remainder = temp%10;
        sum += remainder**numberOfDigits;
        temp = parseInt(temp/10);
    }
    if(sum == num)
        return true;
    else    
        return false;
}

let begin = window.prompt("Enter start of range: ");
let end = window.prompt("Enter end of range: ");
console.log(`Armstrong nums in range [${begin},${end}] are: `);

for(let i=begin; i<=end; i++){
    if(isArmstrong(i))
        console.log(i);
}