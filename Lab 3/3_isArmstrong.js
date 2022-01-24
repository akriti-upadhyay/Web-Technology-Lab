// 3. To check if the given number is Armstrong number of n digits or not.

const num = window.prompt("Enter a number: ");
const numberOfDigits = num.length;
let sum = 0;

let temp = num;
while(temp){
    let remainder = temp%10;
    sum += remainder**numberOfDigits;
    temp = parseInt(temp/10);
}
if(sum == num)
    console.log(`${num} is an Armstrong num`);
else    
    console.log(`${num} is NOT an Armstrong num`);