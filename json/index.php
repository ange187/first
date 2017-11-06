<?php
header('Content-Type: text/html; charset=utf-8');

echo '<a href="?action=encode">Encode</a> ';
echo '<a href="?action=decode">Decode</a><br/><br/>';

$action = $_GET['action'];

switch($action){
    case 'decode':
        $data = array(
            'type' => 'success',
            'mas' => 'Yes'
        );
//        echo "<pre>";
//        print_r($data);

        $jsonString = json_encode($data);
        echo $jsonString;
        return($jsonString);
        break;
    default:
        $jsonPath = './countries.json';
        $jsonFile = file_get_contents($jsonPath);
        $jsonArray = json_decode($jsonFile);

//        $countries = $jsonArray['response']['items'];
        $countries = $jsonArray->response->items;
        foreach($countries as $country){
            echo $country->id . '-' . $country->title . '<br/>';
        }
        break;
}

