<?php

include_once 'ww.incs/common.php';
$page = isset($_REQUEST['page'])? $_REQUEST['page']: '';
$id = isset($_REQUEST['id'])?(int) $_REQUEST['id']: 0;

if(!$id){
    if($page){
        $getinstance =  new Page($id);
        $r = $getinstance->getInstanceByName($page);
        if($r && isset($r->id))
            $id = $r->id;
        unset($r);
    }
    if(!$id){
        $special = 1;
        if(!$page){
            $loves = new Page($id);
            $r = $loves->getInstanceBySpecial($special);
            if($r && isset($r->id))
                $id = $r->id;
            unset($r);
        }
    }
}

if($id){
    $PAGEDATA = (isset($r) && $r)? $r: Page::getInstance($id);
}
else {
    echo '404 Error';
    exit;
}

echo $PAGEDATA->body;