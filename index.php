<?php
$data = array();

$data[] = array(
    'id' => 123,
    'user' => 'Mimi'
);

$id = isset($_GET['id']) ? $_GET['id'] : null;
if(myArrayContainsWord($data,$id)){
    echo json_encode('true');
}else{
    echo json_encode('false');
}


function myArrayContainsWord(array $myArray, $word) {
    foreach ($myArray as $element) {
        if($element['id'] === $word){
            return true;
        }
    }
    return false;
}
//print_r(json_encode($data));