<?php
class MyTest {

    private function getInput() {

        $ret = trim(fgets(STDIN));        
        // # 整数の入力
        // fscanf(STDIN, "%d", $ret);
        // # スペース区切りの整数の入力
        // fscanf(STDIN, "%d %d", $b, $c);
        // $ret = [$b, $c];
        // # 文字列の入力
        // fscanf(STDIN, "%s", $s);
        // # 複数行
        // while (!empty($input = fgets(STDIN))) {
        //     $ret[] = trim($input);    
        // }
        return $ret;
    }

    private function main($input) {
        echo "test run.\ninput: {$input}\n";
    }

    public function run() {
        $input = self::getInput();
        self::main($input);
    }
    
}

MyTest::run();