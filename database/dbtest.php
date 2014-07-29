<?php

include_once(__DIR__ . "/../lib/db.php");
class dbtest extends \db {
    function __construct() {
        parent::__construct();
    }

    public function singleQueryUpdate($input) {
        $query = "
            UPDATE 
                users 
            SET
                lastName = '{$this->escapeCharacters($input)}'
            WHERE
                userId = 1
        ";

        print_r("{$query}\n");
        return $this->query($query);
    }

    public function singleQuerySelect($input) {
        $query = "
            SELECT 
                firstName 
            fROM
                users
            WHERE
                userId = '{$this->escapeCharacters($input)}'
        ";
        print_r("{$query}\n");
        return $this->query($query);
    }

    public function multiQuery($input) {
        $query = "
            SELECT 
                firstName 
            fROM
                users
            WHERE
                userId = 1;
            UPDATE 
                users 
            SET
                lastName = '{$this->escapeCharacters($input)}'
            WHERE
                userId = 1
        ";

        print_r("{$query}\n");
        return $this->query($query);
    }

    public function multiQuerySane() {
        $query = "
            SELECT 
                firstName 
            fROM
                users
            WHERE
                userId = 1;
            UPDATE 
                users 
            SET
                lastName = 'changed'
            WHERE
                userId = 1
        ";

        print_r("{$query}\n");
        return $this->query($query);
    }

    public function injectQuery($input) {
        $query = "
            UPDATE 
                users 
            SET
                lastName = 'Pilati'
            WHERE
                userId = '{$input}'
        ";

        print_r("{$query}\n");
        return $this->query($query);
    }
}
?>
