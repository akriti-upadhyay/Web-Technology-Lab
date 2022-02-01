let str = window.prompt("Enter the string: ");
let searchText = window.prompt(`Enter the string you want to search in \"${str}\": `);

let position = str.search(searchText);

if(position == -1)
    console.log(`\"${searchText}\" is NOT present in string \"${str}\"`)
else
    console.log(`\"${searchText}\" is present in string \"${str}\"`);