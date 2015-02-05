<?php

include "setup.php";

$model = new Model;
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

switch ($_action) {
    case 'index':
    default:
        $model->display();
        break;
    case 'search':
        $model->checkSearch($_POST['search'], $_POST['field']);
        break;
    case 'view':
        $model->viewSearchRecord($_GET['id']);
        break;
    case 'insert':
        $model->displayInsert();
        break;
    case 'insertData':
        if ($model->checkKey($_POST)) {
            $model->insertRecord($_POST);
            $model->displayInsert();
        }
        break;
    case 'list':
        $model->displayList($model->getRecords());
        break;
    case 'delete':
        $model->deleteRecord($_GET['del']);
        $model->displayList($model->getRecords());
        break;
    case 'edit':
        $model->displayRecord($_GET['edt']);
        break;
    case 'editRecord':
        $model->editRecord($_POST);
        $model->displayList($model->getRecords());
        break;
}
