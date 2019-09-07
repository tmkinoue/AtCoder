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
        $str = $this->input[1];
        $count = 0;
        $flg = strpos($str, '#.') !== false;
        if ($flg) {
            $str = preg_replace('/#+$/', '', $str);
            $str = preg_replace('/^\.+/', '', $str);
            var_dump($str);
            $a = substr_count($str, '#');
            $b = substr_count($str, '.');
            var_dump($a);
            var_dump($b);
            $count = $a < $b ? $a : $b;
        }        
        echo $count;
        
    }
    
}

$test = new MyTest();
$test->run();