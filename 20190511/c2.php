<?php
class MyTest {
 
    private function getInput() {
        while (!empty($input = fgets(STDIN))) {
            $ret[] = trim($input);    
        }
        return $ret;
    }
 
    private function main($input) {
        $ret = 0;
        $countA = 0;
        $countB = 0;
        $x = 0;
        foreach ($input as $val) {
            $ret += substr_count($val, 'AB');
            if (strpos(substr($val, -1), 'A') === 0) {
                $countA += 1;
            }
            if (strpos($val, 'B') === 0) {
                $countB += 1;
            }
            if (strpos(substr($val, -1), 'A') === 0 && strpos($val, 'B') === 0) {
                $x += 1;
            }
        } 
        $join = min($countA, $countB);
        
        if ($x > 0 && $countA == 0 && $countB == 0) {
            $join -= 1;
        } 
        $ret += $join;
        echo "{$ret}\n";
    }
 
    public function run() {
        $input = self::getInput();
        self::main($input);
    }
    
}
 
MyTest::run();