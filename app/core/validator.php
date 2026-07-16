<?php

function required(string $value,string $keyError,array &$errors,string $smsErrors = "Champ obligatoire"):bool{
    if(empty($value)){
        $errors[$keyError]= $smsErrors;
        return false;
    }
    return true;
}

function unique(string $value,string $keyError,array $data,array &$errors,string $smsErrors = "Ce champ doit etre unique"){
    
    if(in_array($value,$data)){
        $errors[$keyError]= $smsErrors;
    }
}

function isEmail(string $value,string $keyError,array &$errors,bool $required=true, string $smsErrors = "Cette email doit repecter ce format : fatou@gmail.com"){
if($required &&!filter_var($value, FILTER_VALIDATE_EMAIL)){
        $errors[$keyError]= $smsErrors;
    }

}

function validPassword(string $value,string $keyError,array &$errors ,bool $required=true,int $min = 4,string $smsErrors = "Ce champ doit contenir au moins 4 caracteres."){
    
    if($required && strlen($value) < $min){
        $errors[$keyError]= $smsErrors;
    }
}

