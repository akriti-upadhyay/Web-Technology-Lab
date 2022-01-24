// 5. To check if the given number is perfect or not.

let num = prompt("Enter a num: ");
let sum = 0;
for(let i=1; i<=num/2; i++){
    if(num%i == 0)
        sum += i;
}
console.log(sum);
if(num == sum && sum!= 0)
    console.log(`${num} is a perfect number.`);
else
    console.log(`${num} is NOT a perfect number.`);
