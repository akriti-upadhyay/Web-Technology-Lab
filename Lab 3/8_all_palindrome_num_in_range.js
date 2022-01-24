// 8. Print all the palindrome numbers in the given range.

function isPalindrome(num){
    let length = num.length;
    let i=0, j=length-1;
    while(i<j){
        if(num[i] != num[j])
            return false;
        i++;
        j--;
    }
return true;
}

let begin = window.prompt("Enter start of range: ");
let end = window.prompt("Enter end of range: ");
console.log(`Palindrome nums in range [${begin},${end}] are: `);

for(let i=begin; i<=end; i++){
    if(isPalindrome(i.toString()))
        console.log(i);
}