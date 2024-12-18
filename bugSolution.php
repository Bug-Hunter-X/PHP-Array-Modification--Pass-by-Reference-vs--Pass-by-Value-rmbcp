The solution is to ensure that the function modifies the array by reference.  Here's the corrected code:

```php
function modifyArray(array &$arr) {
  $arr[] = 'new element';
}

$myArray = ['a', 'b', 'c'];
modifyArray($myArray);
print_r($myArray); // Output: Array ( [0] => a [1] => b [2] => c [3] => new element )
```

By using the `&` before `$arr` in the function parameter, we pass the array by reference, allowing the function to directly modify the original array.  Any changes made inside the function are reflected in the array outside the function's scope.