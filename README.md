### Simple Calculator for Laravel

Compatible with laravel 8.

### Installation Instructions

Install package via Composer by running the command:

```
composer require murprakoso/kalkulator
```

**How to use:**

```php
# Basic
\Murprakoso\Kalkulator\BasicCalculator::add(array)      (+)
\Murprakoso\Kalkulator\BasicCalculator::subtract(array) (-)
\Murprakoso\Kalkulator\BasicCalculator::multiply(array) (x)
\Murprakoso\Kalkulator\BasicCalculator::division(array) (:)

# Advance
\Murprakoso\Kalkulator\AdvanceCalculator::decimalToBinary(integer)
\Murprakoso\Kalkulator\AdvanceCalculator::binaryToDecimal(string)
```
