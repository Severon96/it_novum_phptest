<?php
    error_reporting(E_ERROR | E_PARSE);

    if(isset($_GET['search'])) {
        getRecipe($_GET['search']);
    } else {
        getAllRecipes();
    }

    function getAllRecipes() {
        $data->test = 'test';
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    function getRecipe($recipename) {

    }

?>