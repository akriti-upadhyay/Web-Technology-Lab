// 18. Print the Fibonacci series.

const num = window.prompt('Enter the nth term value, till which you want to find the fibonacci series: ');
let n1 = 0;
let n2 = 1;
let nextTerm;
console.log('Fibonacci series:');
for(let i=1; i<=num; i++){
    console.log(`${i}th term: ${n1}`);
    nextTerm = n1 + n2;
    n1 = n2;
    n2 = nextTerm;
}