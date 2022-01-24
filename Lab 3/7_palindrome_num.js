// 7. To check the given number palindrome or not.

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

let num = prompt("Enter a number: ");
if(isPalindrome(num))
    console.log(`${num} is a Palindrome number`);
else
    console.log(`${num} is NOT a Palindrome number`);