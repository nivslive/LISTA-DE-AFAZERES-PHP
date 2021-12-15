<?php

$title = str_replace("#", "-", $_POST['title']);
$category =  str_replace("#", "-", $_POST['category']);
$desc = str_replace("#", "-",  $_POST['description']);


var_dump($_POST);


$text =   'TITULO:' . $title . ' / ' . PHP_EOL . 
                'DESCRIÇÃO:' . $desc . ' / ' . PHP_EOL . 
                'CATEGORIA:' . $category . PHP_EOL .  PHP_EOL . PHP_EOL ;


$file =  fopen('arquivo.hd', 'a');
fwrite($file, $text);


$data = array(
    'titulo' => $title,
    'description' => $desc,
    'category' => $category
);





$json = json_encode($data);
$filter_json =  utf8_decode($json);
$file_json = fopen('datajson.json', 'a');
$filter_file = $filter_json.PHP_EOL;
fwrite($file_json, $filter_file);


fclose($file_json);




header('Location: consultar_chamado.php');
exit;


