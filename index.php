<?php

class MathUtils {
    public static $version = '1.0';

    public static function add($num1, $num2) {
        return $num1 + $num2;
    }
}

$result = MathUtils::add(5,3);
echo 'Result: ' . $result . PHP_EOL;

echo "Version: " . MathUtils::$version . PHP_EOL;

?>

In the example above, we have a MathUtils class with a static property $version and a static method add().

To use the static method add(), we don't need to create an instance of the class. We can directly call the method using the class name followed by the scope resolution operator ::. In this case, MathUtils::add(5, 3) adds two numbers and returns the result.

To access the static property $version, we use the same syntax as calling a static method but without the parentheses. So, MathUtils::$version retrieves the value of the static property.

Running the code will output:

makefile
Copy code
Result: 8
Version: 1.0
As you can see, we can call the static method and access the static property without creating an instance of the class. Static properties and methods are shared among all instances of the class and can be accessed directly using the class name.