<?php

// require('app/Math.php');
// require('app/Serialize.php');
// require_once __DIR__  . './vendor/autoload.php';
// echo __DIR__ . '/vendor/autoload.php';
// exit();
require_once __DIR__ . '/vendor/autoload.php';

use NumberToWords\NumberToWords;
use Saaiful\NumberToWord\Word;
// create the number to words "manager" class
$numberToWords = new NumberToWords();

// build a new number transformer using the RFC 3066 language identifier
$numberTransformer = $numberToWords->getNumberTransformer('de');
// $ser = new Serialize('html', 'css');
// $serialize = serialize($ser);
// echo $serialize;

// $ins = (new Math())();
// echo $ins->num1;
// exit();
// // echo 'hello Sha';
// echo $numberTransformer->toWords(100);
// echo "<br>";
// echo n2w(100);
// echo "<br>";
class Magic
{
    public function __get($params)
    {
        echo "<br><b>{$params}</b> isn't not exits!<br>";
    }

    public function __set($params, $val)
    {
        echo "<br><b>{$params}</b> isn't not exits! New value of {$params} is {$val}<br>";
    }

    public function __call($method, $params = null)
    {
        var_dump($params);
        echo "<br><b>This {$method}</b> doesn't not exits! ";
    }
    public static function __callStatic($method, $params = null)
    {
        var_dump($params);
        echo "<br><b>This {$method}</b> doesn't not exits! \n";
    }

    public function sum(...$params)
    {
        return array_sum(...$params);
    }
}

// $magic = new Magic();

// $magic->this_property;
// $magic->this_property = 50;

// $magic->helper(10);
// Magic::helper(10);

// echo "<br>";
// echo $magic->sum([10, 20, 30]);
// echo "<br>";
// echo array_sum([10, 20]);
// $ar = [10, 20];
// $br = [30, 10];
// $cr = [...$ar, ...$br];
// echo $magic->sum($cr);


// if (is_a($magic, 'Magic')) {
//     echo 'ok';
// } else {
//     echo 'no';
// }

echo get_class($magic);

?>

<?php

// class User
// {
//     public $name;
//     protected $email;
//     private $password;

//     public function getName()
//     {
//         return $this->name;
//     }

//     public function init($name, $email, $password)
//     {
//         $this->name = $name;
//         $this->email = $email;
//         $this->password = $password;
//     }
// }

// $user = new User();
// $user->init('Shahin', 's@mail.com', 123);

final class A
{

    final function greetings()
    {
        return $this->name;
    }
}

// class B extends A
// {
//     public $id;
//     function __construct($name, $id)
//     {
//         parent::__construct($name);
//         $this->id = $id;
//     }
// }
// $pr = new B('Shain', 2);

// echo $pr->greetings();





// class German extends Person
// {
//     public function greet()
//     {
//         return 'Hallo!';
//     }
// }
// class French extends Person
// {
//     public function greet()
//     {
//         return 'Bonjour!';
//     }
// }
// function greeting($people)
// {
//     foreach ($people as $person) {
//         echo $person->greet() . '<br>';
//     }
// }
// $people = [
//     new English(),
//     new German(),
//     new French()
// ];
// greeting($people);

$circle = new Circle(10);

// echo $circle->area();

$square = new Triangle(10, 5);

// echo $square->area();

function calculate($areas)
{
    $sum = 0;
    foreach ($areas as $shape) {
        $sum += $shape->area();
    }
    echo $sum;
}

calculate([$circle, $square]);

// interface Greeting
// {
//     public function greet();
// }

// function greeting($greeters)
// {
//     foreach ($greeters as $greeter) {
//         echo $greeter->greet() . '<br>';
//     }
// }

// $greeters = [
//     new English(),
//     new German(),
// ];

// // greeting($greeters);
// class English implements Greeting
// {
//     public function greet()
//     {
//         return 'Hello!';
//     }
// }
// class German implements Greeting
// {
//     public function greet()
//     {
//         return 'Hallo!';
//     }
// }
// trait Logger
// {
//     public function log($params)
//     {
//         echo "<br>";
//         echo $params;
//         echo "<br>";
//     }
// }
// trait Helper
// {
//     public function log($params)
//     {
//         echo "<br>";
//         echo $params;
//         echo "<br>";
//     }
// }

// class User
// {
//     use Helper, Logger;
//     public $name;
//     function __construct($name)
//     {
//         $this->name = $name;
//         $this->log($this->name);
//     }
// }

// new User(2);
