<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changePassController extends Controller
{
    


    function passwordMatch($id, $password) {
    global $connect;
 
    $userdata = getUserDataByUserId($id);
 
    $makePassword = makePassword($password, $userdata['salt']);
 
    if($makePassword == $userdata['password']) {
        return true;
    } else {
        return false;
    }
 
    // close connection
    $connect->close();
}
 
function changePassword($id, $password) {
    global $connect;
 
    $salt = salt(32);
    $makePassword = makePassword($password, $salt);
 
    $sql = "UPDATE users SET password = '$makePassword', salt = '$salt' WHERE id = $id";
    $query = $connect->query($sql);
 
    if($query === TRUE) {
        return true;
    } else {
        return false;
    }




    public watch(){
	return view('changepsw');
}
}
