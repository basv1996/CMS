<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 16:35:54
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656558482c5a438d92-43132298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1478098407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656558482c5a438d92-43132298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58482c5a443b10_31291588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58482c5a443b10_31291588')) {function content_58482c5a443b10_31291588($_smarty_tpl) {?><script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<meta name="viewport" content="width=device-width">
<img id="HeaderPic" src="image/Side2SideBigBanner.png">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
  <a id="Home" href="index.php"><img id="LogoHeader" alt="Side2Side" src="image/Side2SidePhotoshopped4.png" </a>
  <a id="Band" href="?action=band">Band</a>
  <a id="Tour" href="?action=tour">Tour</a>
  <a id="Shop" href="?action=shop">Shop</a>
  <a href="?action=search">Search</a>
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script><?php }} ?>
