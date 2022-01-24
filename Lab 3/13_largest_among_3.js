// 13. Find largest among three numbers,

const n1 = window.prompt("Enter first number: ");
const n2 = window.prompt("Enter second number: ");
const n3 = window.prompt("Enter third number: ");
let largest; 

if(n1>=n2 && n1>=n3){
    largest = n1;
}
else if(n2>=n1 && n2>=n3){
    largest = n2;
}
else    
    largest = n3;

console.log(`${largest} is the largest among ${n1}, ${n2}, ${n3}`);