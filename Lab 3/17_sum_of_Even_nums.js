// 16. Print the sum of all even numbers.

const num = parseInt(window.prompt("Enter a number: "));
let sum = 0;
for(let i=1; i<=num; i++){
    if(i%2 == 0)
        sum += i;
}
console.log(`The sum of even numbers till ${num}: ${sum}`);