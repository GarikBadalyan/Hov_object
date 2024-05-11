<?php

//strlen () - возвращает длину строки
echo strlen("Hello world!"); // outputs 12

//Функция PHP str_word_count()подсчитывает количество слов в строке.
echo str_word_count("Hello world!"); // outputs 2

//strrev () - перевернуть строку
echo strrev("Hello world!"); // outputs !dlrow olleH

//Функция PHP strpos()ищет определенный текст в строке. Если совпадение найдено, функция возвращает
// позицию символа первого совпадения. Если совпадений не найдено, возвращается FALSE.

echo strpos("Hello world!", "world"); // outputs 6

//Функция PHP str_replace()заменяет некоторые символы на другие символы в строке

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!



?>