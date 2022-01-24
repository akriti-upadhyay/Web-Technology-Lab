// 14. Display the multiplication table.

const num = window.prompt("Enter a number:");
console.log(`Multiplication table of ${num} is:`);
for(let i=1; i<=10; i++){
    console.log(`${num} * ${i} = ${num*i}`);
}