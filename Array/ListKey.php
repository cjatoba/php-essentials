<?php

//Example in Laravel

class ListKey
{

    //List full keys in array
    public function example1()
    {
        $array_test = ['index1' => 'example1', 'index2' => 'example2', 'index3' => 'example3'];

        while(current($array_test)){
            $keys[] = key($array_test);
            next($array_test);
        }

        return $keys; 
    }

    //List full keys in array of array
    public function example2()
    {
        $array_test = [
            ['index1a' => 'example1', 'index2a' => 'example2', 'index3a' => 'example3'],
            ['index1b' => 'example1', 'index2b' => 'example2', 'index3b' => 'example3'],
            ['index1c' => 'example1', 'index2c' => 'example2', 'index3c' => 'example3']
        ];

        while(current($array_test[0])){
            $keys[] = key($array_test[0]);
            next($array_test[0]);
        }

        return $keys; 
    }

}

//Test
$teste = new ListKey;

echo "<p><strong>Example 1:</strong></p>";
/**
 * Result of example 1:
 * index1
 * index2
 * index3
 */
foreach($teste->example1() as $key){    
    echo "<p>".$key."</p>";
}

echo "<p><strong>Example 2:</strong></p>";
/**
 * Result of example 2:
 * index1
 * index2
 * index3
 */
foreach($teste->example2() as $key){
    echo "<p>".$key."</p>";
}

//Use example recovery keys in Laravel Blade
// @foreach ($keys as $key)
//     <th>{{ $key }}</th>
// @endforeach
