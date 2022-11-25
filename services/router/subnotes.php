<?php 
session_start();
require('../server/subject_notes.php');
if(isset($_POST['choice'])){
    switch($_POST['choice']){            
        case 'addSubNotes':
            $dashboard = new dashboard();
            echo $dashboard->doAddSubNotes($_POST['title'], $_POST['description']);
            break;

        case 'viewSubNotes':
            $dashboard = new dashboard();
            echo $dashboard->doViewSubNotes();
            break;

        case 'displaySubNotes':
            $dashboard = new dashboard();
            echo $dashboard->doDisplaySubNotes();
            break;
        
        case 'deleteSubNotes':
            $dashboard = new dashboard();
            echo $dashboard->doDeleteSubNotes($_POST['boxId']);
            break;

        case 'setSessionBoxId':
            $dashboard = new dashboard();
            echo $dashboard->doSetSessionBoxId($_POST['boxId']);
            break;
        
        case 'getSearchDisplay':
            $dashboard = new dashboard();
            echo $dashboard->doSetSearchDisplay($_POST['searchInp']);
            break;    

        case 'updateSubNotes':
            $dashboard = new dashboard();
            echo $dashboard->doUpdateSubNotes($_POST['title'], $_POST['description']);
            break;

        case 'unsetSessionBoxId':
            unset($_SESSION["setBoxId"]);
            break;
    }
}
?>