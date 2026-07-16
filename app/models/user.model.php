<?php



function getUserByEmail(string $email): array|null
{
    $users= getData(KEY_USER);
    foreach ($users as  $user) {
        if($user['isActif'] && $user['email'] === $email ){

            return $user;
        }
    }
    return null;
}

function saveUser(array $newUser):int
{
    $maxId = getMaxId();
    $id = $maxId + 1;
    $newUser['id']= $id;
    saveData(KEY_USER,$newUser);
return 0;
}
function getMaxId():int
{
    $users= getData(KEY_USER);
    $maxId = 0;
    foreach ($users as $key => $user) {
        if($user['id']>$maxId){
            $maxId = $user['id'];
        }
    
    } 
return $maxId;

}

function getAllAprenantsActif():array
{
    $apprenantsActif = [];
    $users= getData(KEY_USER);
     foreach ($users as  $user) {
        if($user['isActif'] && in_array('Apprenant',$user['role'])){
            $apprenantsActif[]= $user;
        }
    }

return $apprenantsActif;
}

function getAllAprenantsRetard():array
{
$apprenantsRetard = [];
    $users= getData(KEY_USER);
     foreach ($users as  $user) {
        if($user['isActif'] && !$user['estAJour'] && in_array('Apprenant',$user['role'])){
            $apprenantsRetard[]= $user;
        }
    }

return $apprenantsRetard;
}