let str = window.prompt("Enter the string: ");

let splitString = str.split("");
let reverseArray = splitString.reverse();
let joinArray = reverseArray.join("");

// str.split("").reverse().join("")

console.log(`Reverse of string \"${str}\": ${joinArray}`);
