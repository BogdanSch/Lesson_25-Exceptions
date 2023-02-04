<?php
$file = @fopen("file.txt", "r");

// Пользовательская функция-обработчик
function myErrorHandler($errno, $msg, $file, $line) {
    error_log("Произошла ошибка с кодом $errno\n");
    error_log("Файл: $file, строка $line.\n");
    error_log("Текст ошибки: $msg");
    error_log("Hello Error!");
  }
  // Регистрация пользовательской функции-обработчика
  set_error_handler("myErrorHandler", E_ALL);
  // Вызываем функцию для несуществующего файла, чтобы
  // сгенерировать предупреждение, которое будет перехвачено,
  filemtime ("spoon");