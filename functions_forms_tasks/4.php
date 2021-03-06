<?php
//Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.

function read_dir($path) {
    if ($handle = opendir($path)) {
        echo "Directory handle: $handle", PHP_EOL;
        echo "Entries: ", PHP_EOL;

        while (false !== ($entry = readdir($handle))) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            echo $entry, PHP_EOL;

            $entry_path = $path.DIRECTORY_SEPARATOR.$entry;

            if (is_dir($entry_path)) {
                read_dir($entry_path);
            }
        }

        closedir($handle);
    }
}

read_dir(__DIR__);