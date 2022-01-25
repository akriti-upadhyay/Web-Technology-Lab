// 19. Make a simple calculator.

// operator input
const operator = window.prompt(`Enter operator (either +, -, *, / or %)`);

// operand input
const n1 = parseFloat(window.prompt("Enter first number: "));
const n2 = parseFloat(window.prompt("Enter second number: "));

let result;
switch(operator){
    case '+': 
        result = n1 + n2;
        console.log(`${n1} + ${n2} = ${result}`);
        break;
    case '-': 
        result = n1 - n2;
        console.log(`${n1} - ${n2} = ${result}`);
        break;
    case '*': 
        result = n1 * n2;
        console.log(`${n1} * ${n2} = ${result}`);
        break;
    case '/': 
        if(n2 == 0)
            console.log(`${n1} / ${n2} | Error: Division by 0 !!`);
        else{
            result = n1 / n2;
            console.log(`${n1} / ${n2} = ${result}`);
        }   
        break;
    case '%': 
        result = n1 % n2;
        console.log(`${n1} % ${n2} = ${result}`);
        break;
    default: 
        console.log(`Invalid operator!!`);
        break;
}