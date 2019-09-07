<?php
class MyTest {
    public function run() {
        fscanf(STDIN, "%d %d", $a, $b); 
        $ret = $a - ($b -1);
        echo "{$ret}\n";
    }
    
}

MyTest::run();