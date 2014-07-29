<?php

class MyStaticClass
{
    protected $_someMember;

    public function __construct()
    {
        $this->_someMember = 1;
    }

    public static function getSomethingStatic()
    {
        return "this is static";
    }

    public function getMember() {
        return $this->_someMember;
    }
}

$test = new MyStaticClass();
printf("\n{$test->getMember()}\n\n");
printf("\n{$test->getSomethingStatic()}\n\n");
printf("\n" . MyStaticClass::getSomethingStatic() . "\n\n");
?>
