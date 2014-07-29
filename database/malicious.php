<?php

$_SERVER['HTTP_HOST'] = "bpilati-mac.domo.com";
include_once(__DIR__ . "/../../../config/config.php");
include_once(__DIR__ . "/../models/dbtest.php");

class malicious {
    function __construct() {
        $this->dbTestObj = new dbtest();
        $this->goMalicious();
    }

    private function goMalicious() {
        $this->singleQueryUpdate();
        $this->singleQuerySelect();
        $this->multiQuery();
        $this->multiQuerySane();
        $this->injectQuery();
    }

    private function singleQueryUpdate() {
        $response = $this->dbTestObj->singleQueryUpdate("2'; drop table themes;");
        print_r($response."\n\n");
    }

    private function singleQuerySelect() {
        $response = $this->dbTestObj->singleQuerySelect("2'; drop table themes;");
        print_r($response."\n\n");
    }

    private function multiQuery() {
        $response = $this->dbTestObj->multiQuery("3'; drop table themes;");
        print_r($response."\n\n");
    }

    private function multiQuerySane() {
        $response = $this->dbTestObj->multiQuerySane();
        print_r($response."\n\n");
    }

    private function injectQuery() {
        $response = $this->dbTestObj->injectQuery("1'; drop table eventDates;--')");
        print_r($response."\n\n");
    }
}

new malicious();

?>
