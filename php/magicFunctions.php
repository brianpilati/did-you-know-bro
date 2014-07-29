<?php
class Example {
    function foo() {
        echo "this is foo\n";
    }

    function bar() {
        echo "this is bar\n";
    }

    function getBurrito() {
        echo "this is my burrito\n";
    }

    function __call($name, $args) {
        echo "tried to handle unknown method $name\n";
        if ($args)
            echo "it had arguments: ", implode(', ', $args), "\n";
    }

    function __get($name) {
        if (method_exists($this, $name)) {
            $this->$name();
        } else {
            echo "$name - does not exist\n";
        }
    }
}
 
$example = new Example();
 
$example->foo();        // prints "this is foo"
$example->bar();        // prints "this is bar"
$example->grill();      // prints "tried to handle unknown method grill"
$example->ding("dong"); // prints "tried to handle unknown method ding"
                        // prints "it had arguments: dong
$example->hello;
$example->getBurrito;
?>
