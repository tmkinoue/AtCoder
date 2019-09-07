<?php
class MyTest {

    private function getInput() {
        while (!empty($input = fgets(STDIN))) {
            $ret[] = trim($input);    
        }
        return $ret;
    }

    private function main($input) {
        $line1 = explode(' ', $input[0]);
        $n = $line1[0];
        $k = $line1[1];
        $str = $input[1];
        $ret = '';
        for($i = 0; $i < $n;  $i++){
            if ($i == $k - 1) {
                $txt = strtolower($str[$i]);
            } else {
                $txt = $str[$i];
            }
            $ret .= $txt;
        }
        echo $ret;
    }

    public function run() {
        $input = self::getInput();
        self::main($input);
    }
    
}

MyTest::run();