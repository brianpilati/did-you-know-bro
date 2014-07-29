function closure(x) {
    var tmp = 3;
    function bar(y) {
        console.log('closure output: ', x + y + (++tmp)); // will alert 16
    }
    bar(10);
}

closure(2);
closure(3);


//Poor Example
var counter = 0;
function add() {
    var counter = 0;
    counter += 1;
}

add();
add();
add();
console.log('Counter (Should be 3): ', counter);


counter = 2;
var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
})();

counter = 0;
console.log('Counter Example: ', add());
console.log('Counter Example: ', add());
console.log('Counter Example (Should be 3): ', add());
// the counter is now 3
