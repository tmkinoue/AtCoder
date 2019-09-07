<?php
class MyTest {

    private function main() {
        fscanf(STDIN, "%d %d", $n, $k);
        $ret = 0;
        for($i = $n; $i > 0; $i--){
            if ($i >= $k) {
                $ret += 1/$n;
            } else {
                $tmp = 1/$n;
                $j = $i;
                while($j < $k) {
                    $j *= 2;
                    $tmp*=0.5;
                }
                $ret += $tmp;
            }
        } 
        echo $ret."\n";
    }

    public function run() {
        self::main();
    }
    
}

MyTest::run();