<?php
class MyTest {

    public function run() {
        fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);
        $ret = 0;

        if ($d % $a == 0) {
            $ret += 1;
        } 
        $count = floor($d/$a);

        for(; $count != 0; $count--) {
            
            $var_dump($count);
            if ($count % $b == 0) {
                $ret += 1;
            }
            $count2 = $d - $count * $a;
            for(; $count2 != 0; $count2--) {
                if ($count3 % $c == 0) {
                    $ret += 1;
                } 
            } 
            if ($count2 % $c == 0) {
                $ret += 1;
            } 
        }

        echo $ret."\n";
    }

    
    private function calc($hoge, $fuga) {
        return $hoge % $fuga;
    }
    
}

MyTest::run();