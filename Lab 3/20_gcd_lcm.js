// 20. Find the GCD or HCF & LCM of two numbers.

const a = parseInt(window.prompt("Enter first number: "));
const b = parseInt(window.prompt("Enter second number: "));

function gcd(a, b){
    if(a < b)
        return gcd(b, a);
    if(b == 0)
        return a;
    return (b, a%b);
}

function lcm(a, b){
    return (a*b)/gcd(a,b);
}

console.log(`GCD of ${a} and ${b}: ${gcd(a,b)}`);
console.log(`LCM of ${a} and ${b}: ${lcm(a,b)}`);
