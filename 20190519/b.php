<?php
class MyTest {

    private function getInput() {
               
        // # 文字列の入力
        fscanf(STDIN, "%s", $ret);
        return $ret;
    }

    private function main($input) {
        $a = intval(substr($input, 0, 2));
        $b = intval(substr($input, -2));
        $flg1 = ($a >= 1 && $a <= 12);
        $flg2 = ($b >= 1 && $b <= 12);
        if ($flg1 && $flg2) {
            echo 'AMBIGUOUS';
        } elseif($flg1 && !$flg2) {
            echo 'MMYY';
        } elseif(!$flg1 && $flg2) {
            echo 'YYMM';
        } else {
            echo 'NA';
        }
    }

    public function run() {
        $input = self::getInput();
        self::main($input);
    }
    
}

MyTest::run();