<?php

interface interfaceOne extends interfaceTwo, interfaceThree {

    const one = 'Interface constant one';

    /**
    * @return string
    */
    public function subtract($a, $b);

    /**
    * @return int
    */
    public function multiple($a, $b);
}

interface interfaceTwo {

    const two = 'Interface constant two';

    /**
    * @return int 
    */
    public function add($a, $b);
}

interface interfaceThree {

    const three = 'Interface constant three';

    /**
    * @return void
    */
    public function speak($voice);
}

class interfaceClass implements interfaceOne {

    function __construct() {
        printf("\nThis is the constant {" . self::one . "}\n");
        printf("\nThis is the constant {" . self::two . "}\n");
        printf("\nThis is the constant {" . self::three . "}\n");
    }

    var $teeth = 5;

    public function speak($voice) {
        printf("\n$voice\n");
    }

    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        $answer = $a - $b;
        return "\nThe subtraction answer is: $answer\n";
    }

    public function multiple($a, $b) {
        return $a * $b;
    }

    public function hello($a) {
        echo "\nHello there: $a\n";
    }
}

    $test = new interfaceClass();

    $test->speak('This is my Voice');
    printf("\nThe addition answer is: {$test->add(5,5)}\n");
    echo $test->subtract(10,5);
    $test->hello('World');
    printf("\nThe multiplication answer is: {$test->multiple(5,5)}\n");

?>
