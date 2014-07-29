console.log("\nThese are the 6 falsey statements: null, NaN, 0, undefined, \"\" and false\n");

var myArray = [5, "1", null, NaN, 0, undefined, "", false, "0"];

for(var index = 0; index < myArray.length; index++) {
    console.log("\n" + myArray[index] + " is truthy (Boolean): " + Boolean(myArray[index]));
    console.log("\n" + myArray[index] + " is truthy (===): " + (myArray[index] === true));
    console.log("\n" + myArray[index] + " is truth (==): " + (myArray[index] == true));
}
