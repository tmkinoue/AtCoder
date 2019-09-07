<?php
class MyTest {

    public function run() {
        // スペース区切りの整数の入力
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if (($c >  $a && $c < $b) || $c < $a && $c > $b ) {
            echo "Yes\n";
        } else {
            echo "No";
        }
        
    }
    
}

$test = new MyTest();
$test->run();