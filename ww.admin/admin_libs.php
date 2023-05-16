<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ww.incs/basics.php';

function is_admin() {
    if(!isset($_SESSION['userdata']))
        return false;
    return (
        isset($_SESSION['userdata']['group']['_administrators']
        ) ||
        isset(
            $_SESSION['userdata']['groups']['_superadministrators']
        )
    );
}
if(!is_admin()){
    require SCRIPTBASE.'ww.admin/login/login.php';
}