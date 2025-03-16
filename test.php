<?php 

function reverse($string){
    return strrev($string);

}

function even_number($array){
    $new = [];
    foreach($array as $item){
        if($item % 2 === 0){
            $new[] = $item;
        }
    }
    return $new;
}

class Person{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(){
        return "My name is ".$this->name." and i am ".$this->age." years Old"; 
    }
}


function palindrome($string){
    $old = $string;
    $new = strrev($string);

    if($old === $new){
        return "true";
    }else{
        return "false";
    }
}

function anagram($first, $second){
    $array1 = str_split($first);
    $array2 = str_split($second);
    
}

function fibonacci($int){
    $output = [0,1];
    $first = 0;
    $second = 1;
    for($i = 0; $i<$int-2; $i++)
    {
        $input = $first + $second;
        $output[] = $input;
        $first = $second;
        $second = $input;
    }

    return $output;
}
$test = 15;
// print_r(fibonacci($test));
// echo sqrt(17);

// $person = new Person("alice", 30);
// echo $person->introduce();

// $text = "Hello";
// $test = [1,2,3,4,5,6,7,8];
// print_r(even_number($test));

var_dump("0123" == 123);