# Процессор строк

Производит подсчет количества цифр в строке

## Требования

- PHP 7.4

## Установка

```bash
$ composer require klobkovsky/hw3-package
```

## Использование

```pho
<?php
$processor = new StringProcessor();
echo $processor->getDigitCount('I am 123 years old'); // 3
?>
```