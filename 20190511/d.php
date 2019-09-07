<?php
class MyTest {
    public function run() {
        fscanf(STDIN, "%d", $a); 
        $ret = 0;
        for($i=1; $i < $a; $i++) {
            if (floor($a/$i) == $a%$i) {
                // var_dump($i);
                $ret += $i;
            }
        }
        echo "{$ret}\n";
    }
    
}

MyTest::run();