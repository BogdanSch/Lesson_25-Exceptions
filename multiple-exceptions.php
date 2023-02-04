<?php
class FileNotFoundException extends Exception
{
}
class FileWriteException extends Exception
{
}
try {
    if (!file_exists("spoon"))
        throw new FileNotFoundException("spoon");
} catch (FileWriteException $e) {
    echo "Ошибка при работе с файлом '{$e}'.";
} catch (FileNotFoundException $e) {
    echo "Другое исключение: {$e}.";
}
catch(Exception $e){
    echo "Exception: ".$e;
}
finally{
    echo "Finally!";
}