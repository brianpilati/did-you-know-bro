<?php

    abstract class AbstractClassThree {
        public function subtract($a, $b) {
            $answer = $a - $b;
            return "\nThe subtraction answer is: $answer\n";
        }

        abstract protected function growl($voice);
    }

    abstract class AbstractClassTwo extends AbstractClassThree {
        abstract protected function speak($voice);

        // Common method
        public function add($a, $b) {
            $answer = $a + $b;
            printf("\nThe answer is: {$answer}\n");
        }
    }


    abstract class AbstractClass extends AbstractClassTwo
    {
        // Force Extending class to define this method
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);

        // Common method
        public function printOut() {
            print $this->getValue() . "\n";
            $this->add(4,4);
        }
    }

    class ConcreteClass1 extends AbstractClass
    {
        protected function getValue() {
            return "ConcreteClass1";
        }

        public function prefixValue($prefix) {
            return "{$prefix}ConcreteClass1";
        }

        public function speak($voice) {
            printf("\n$voice\n");
        }

        public function growl($voice) {
            printf("\narrrrr .... $voice\n");
        }

        public function single() {
            printf("\nLet's get married!\n");
        }
    }

    class ConcreteClass2 extends ConcreteClass1
    {
        public function getValue() {
            return "ConcreteClass2";
        }

        public function prefixValue($prefix) {
            return "{$prefix}ConcreteClass2";
        }

        public function speak($voice) {
            printf("\n$voice\n");
        }

        public function growl($voice) {
            printf("\narrrrr .... $voice\n");
        }
    }

    $class1 = new ConcreteClass1;
    $class1->printOut();
    echo $class1->prefixValue('FOO_') ."\n";
    $class1->speak('here me');
    $class1->add(5,5);
    $class1->growl('scarey');
    $class1->single();

    $class2 = new ConcreteClass2;
    $class2->printOut();
    echo $class2->prefixValue('FOO_') ."\n";
    echo $class2->subtract(12,5) ."\n";
    $class2->single();
?>

