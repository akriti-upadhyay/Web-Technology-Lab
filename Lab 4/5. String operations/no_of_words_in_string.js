let str = window.prompt("Enter the string: ");

function countWords(str){
    let count = 0;
    let words = str.split(" ");
    for(let i=0; i<words.length; i++){
        if(words[i] != "")
            count++;
    }
    return count;
}
console.log(`Total number of words in the string \"${str}\": ${countWords(str)}`);