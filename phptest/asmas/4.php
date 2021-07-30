<?php

function getFileInfo($filepath)
{
    $pathParts = explode('/', $filepath);
    $filename = $pathParts[array_key_last($pathParts)]; 
    $nameParts = explode('.', $filename);
    $extension = $nameParts[array_key_last($nameParts)];

    // В значения вместо переменных подставятся нужные значения
    $info = ['filename' => $filename, 'extension' => $extension];

    return $info;
}


function getFileInfo1($filepath)
{
    // Инициализация массива
    $info = [];

    $pathParts = explode('/', $filepath);
    $filename = $pathParts[array_key_last($pathParts)]; 
    $info['filename'] = $filename;

    $nameParts = explode('.', $filename);
    $extension = $nameParts[array_key_last($nameParts)];
    $info['extension'] = $extension;

    return $info;
}


// Добавляем свойство в объект только если расширение существует
if ($extension) {
    $info['extension'] = $extension;
}

$filepath = '/path/to/index.php';
$fileinfo = getFileInfo($filepath);