<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
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
</script>