<?php 
class Request(){
    $data = json_decode(file_get_contents('php://input'),true);
    
}