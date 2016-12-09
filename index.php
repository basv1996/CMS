<meta charset="utf-8">
<?php
// Get username, password from database
include 'includes/config.php';
// Load Smarty library

require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
// include funtions
include 'includes/funcs.php';
//include select newsartciles


// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Side 2 Side');

// Display template: output html
$templateParser->display('head.tpl');

// Display template: output html
$templateParser->display('header.tpl');

$action=isset($_GET['action'])?$_GET['action']:'home';

switch ($action) {
    case 'home':
        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        include('model/select_newsarticles.php');
        $templateParser->assign('result',$result);
        //calculate total number of articles
        include('model/get_nr_articles.php');
        $templateParser->assign('total_number_articles',$total_number_articles);
        $templateParser->display('newsarticles.tpl');
break;
    case 'band':
        include('model/select_bandleden.php');
        $templateParser->assign('result2',$result2);
        $templateParser->display('band.tpl');
break;
    case 'tour':
        include('model/select_tour.php');
        $templateParser->assign('result3',$result3);
        $templateParser->display('tour.tpl');
break;
    case 'shop':
        include('model/select_shop.php');
        $templateParser->assign('result4',$result4);
        $templateParser->display('shop.tpl');
break;
    case 'search':
        $templateParser->display('search.tpl');
break;
    case 'admin':
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'show';
        $submit_update = isset($_POST['submit_update'])? 1:0;
        $submit_insert = isset($_POST['submit_insert']);
        $cms_action = $submit_update?'save':$cms_action;
        $cms_action = $submit_insert?'save_new':$cms_action;
        
        switch($cms_action)
        {
            case 'show':
                include('model/select_all_items.php');
                    $templateParser->assign('result', $result);
                    $templateParser->display('cms_show.tpl');
                break;
            case 'delete':
                $id = isset($_GET['id'])?$_GET['id']:0;
                //$id = $_GET['id'];
                include ('model/delete_item.php'); 
                include('model/select_all_items.php');
                $templateParser->assign('result', $result);
                $templateParser->display('cms_show.tpl');
                break;
            case 'insert':
                $templateParser->display('insert.tpl');
                break;
            case 'save_new':
                include ('model/insert_Item.php');
                include('model/select_all_items.php');
                $templateParser->assign('result', $result);
                $templateParser->display('cms_show.tpl');
                break;
            case 'edit':
                $id = isset($_GET['id'])?$_GET['id']:0;
                include ('model/select_OneItem.php');
                $templateParser->assign('result', $result);
                $templateParser->display('edit.tpl');
                break;
            case 'save':
                $id = isset($_GET['id'])?$_GET['id']:0;
                //call model to save item: UPDATE
                include ('model/save_item.php');
                //go to admin view
                
                include('model/select_all_items.php');
                $templateParser->assign('result', $result);
                $templateParser->display('cms_show.tpl');
                
                break;
        //include('model/Admin.php');
        }
}

$templateParser->assign('footer', 'Made By Bas Vugts <br>In cooperation With MediaCollege Amsterdam <br>
School-Project 2016-2017');
//de footer
$templateParser->display('footer.tpl');
?>