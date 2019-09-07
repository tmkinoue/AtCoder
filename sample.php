<?php
class MyTest {

    protected $input;

    public function __construct() {

        $this->input = trim(fgets(STDIN));        
        // # 整数の入力
        // fscanf(STDIN, "%d", $a);
        // # スペース区切りの整数の入力
        // fscanf(STDIN, "%d %d", $b, $c);
        // # 文字列の入力
        // fscanf(STDIN, "%s", $s);
        // # 複数行
        // while (!empty($input = fgets(STDIN))) {
        //     $this->input[] = trim($input);    
        // }
    }

    public function run() {
        echo "test run.\ninput: {$this->input}\n";
    }
    
}

$test = new MyTest();
$test->run();