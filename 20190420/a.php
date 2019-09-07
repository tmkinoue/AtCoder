<?php
class MyTest {

    protected $input;

    public function __construct() {
        // # 複数行
        while (!empty($input = fgets(STDIN))) {
            $this->input[] = trim($input);    
        }
    }

    public function run() {
        $n = $this->input[0];
        $s = $this->input[1];
        $k = $this->input[2];
        $arr = str_split($k);
        $check = $arr[$s];
        $ret = '';
        foreach($arr as $val) {
            if ($val === $check) {
                $ret .= $val;
            } else {
                $ret .= '*';
            }
        }
        echo "{$ret}\n";
    }
    
}

$test = new MyTest();
$test->run();