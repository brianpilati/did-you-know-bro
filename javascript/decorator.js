console.log("\n\nDecorator Definiton:\n\nA function decorator accepts a function, wraps (or decorates) it’s call and returns the wrapper, which alters default behavior.\n\n");

function doublingDecorator(f) {
    return function() {
        return 2*f.apply(this, arguments)
    }
}
 
function sum(a, b) {
    return a + b
}
 
var doubleSum = doublingDecorator(sum)
 
console.log("Simple Decorator\n\n");
console.log("Double the sum of 1 and 2 ",  doubleSum(1,2) ) // 6
console.log("Double the sum of 2 and 3 ",  doubleSum(2,3) ) // 10



//What we're going to decorate
function MacBook() {
    this.cost = function () { return 997; };
    this.screenSize = function () { return 13.3; };
}
/*Decorator 1*/
function Memory(macbook) {
    console.log('there again', macbook);
    var v = macbook.cost();
    macbook.cost = function() {
        return v + 75;
    }
}
 /*Decorator 2*/
function Engraving( macbook ){
    var v = macbook.cost();
    macbook.cost = function(){
        return  v + 200;
    };
}
   
   /*Decorator 3*/
function Insurance( macbook ){
    var v = macbook.cost();
    macbook.cost = function(){
        return  v + 250;
    };
}

console.log("\n\nApple Decorator");
var mb = new MacBook();
console.log("Original Cost: ", mb.cost()); //1522
Memory(mb);
Engraving(mb);
Insurance(mb);
console.log("Decorated Cost: ", mb.cost()); //1522
console.log("Screen Size: ", mb.screenSize()); //13.3
console.log("\n\nDone");
