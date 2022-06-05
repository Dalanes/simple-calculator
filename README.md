# Простой калькулятор

<p> Позволяет выполнять простые арифметические операции с числами. </p>

## Требования

- PHP 7.4

## Установка

```bash
$ composer require dalanes/simple-calculator
```

## Использование

```php
<?php
    $calculator = new Calculator();
    echo $calculator->sum(1, 5); // 6
```