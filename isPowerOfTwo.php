function isPowerOfTwo($n): bool
{
    while ($n > 1) {
        if ($n % 2 == 1 and $n > 1)
            return false;
        $n >>= 1;
    }
    return true;
}

// Примеры использования
/*
var_dump(isPowerOfTwo(1));  // true (2^0)
var_dump(isPowerOfTwo(2));  // true (2^1)
var_dump(isPowerOfTwo(3));  // false
var_dump(isPowerOfTwo(4));  // true (2^2)
var_dump(isPowerOfTwo(5));  // false
var_dump(isPowerOfTwo(8));  // true (2^3)
var_dump(isPowerOfTwo(16));  // true (2^4)
var_dump(isPowerOfTwo(15));  // false
*/
