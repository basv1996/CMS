<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 16:35:58
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2146458482c5e421746-48429834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1479299970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2146458482c5e421746-48429834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58482c5e4bc956_69591872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58482c5e4bc956_69591872')) {function content_58482c5e4bc956_69591872($_smarty_tpl) {?><script>
    var dop = "";
    var qop = "";
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        qop = str;
        xmlhttp.open("GET","getuser.php?res=0&d="+dop+"&q="+str,true);
        xmlhttp.send();
    }
}
function showTser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        dop = str;
        xmlhttp.open("GET","getuser.php?res=0&q="+qop+"&d="+str,true);
        xmlhttp.send();
    }
}
function showDetail(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET","getuser.php?res=1&d=2&q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
  <input type="text" size="30" onkeyup="showUser(this.value)">
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div><?php }} ?>
