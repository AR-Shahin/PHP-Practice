<?php
class Math {
    public $a ;
    public $b;
   
    public function sum($a,$b)
    {
        return $a + $b;
    }
}


class any{
    public function name($name){
        echo $name .'<br>';
    }
}

class store{
    public function set($key,$val)
    {
        echo $val;
    }
   
}
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

    








