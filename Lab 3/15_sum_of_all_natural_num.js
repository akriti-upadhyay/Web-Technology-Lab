// 15. Print the sum of all-natural numbers.

const num = parseInt(window.prompt("Enter a number: "));
let sum = ((num * (num+1))/2);

console.log(`The sum of natural numbers till ${num}: ${sum}`);