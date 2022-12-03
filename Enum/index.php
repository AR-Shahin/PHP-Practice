<?php

enum Status : string
{
    case Success = "success";
    case Complete = "complete";
    case Processing = "processing";
}

trait Helper{
    public function test()
    {
        echo "I am Trait!\n" . __CLASS__ . " | ";
        return $this;
    }
}
class Payment 
{
    use Helper;
    function __construct(
        public string $method
    ){
        
    }
    public function test()
    {
        echo "I am Class!\n" . __CLASS__ . " | ";
        return $this;
    }

    public function send()
    {
        echo "I am !\n" . __CLASS__;
        return $this;
    }

    public function abc()
    {
        echo $this->method;
    }
}


(new Payment("bksh"))->test()->send()->abc();