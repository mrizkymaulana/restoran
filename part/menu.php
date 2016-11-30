<?php 
	function pelayan_menu(){ 
?>
	<li class="nav-item active">
        <a href="#">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pelayan <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li>
                <a href="rubah-password.html">Rubah Password</a>
            </li>
            <li>
                <a href="logout.php">Log out</a>
            </li>
        </ul>                                 
    </li>
<?php 
	} //end function pelayan_menu 

	function kasir_menu(){
?>
	<li class="nav-item">
        <a href="index.php">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"> Hai, <?php echo $_SESSION['username'] ?> <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li>
                <a href="rubah-password.html">Rubah Password</a>
            </li>
            <li>
                <a href="logout.php">Log out</a>
            </li>
        </ul>                                 
    </li>
<?php 
	} //end function kasir_menu 

	function koki_menu(){
?>
	<li class="nav-item active">
        <a href="#">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Koki <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li>
                <a href="rubah-password.html">Rubah Password</a>
            </li>
            <li>
                <a href="logout.php">Log out</a>
            </li>
        </ul>                                 
    </li>
<?php 
	} //end function koki_menu 
	
	function pantry_menu(){
?>
	<li class="nav-item active">
        <a href="#">Home</a>
    </li>
    
    <li>
        <a href="#">Inbox <span class="badge">42</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pantry <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
            <li>
                <a href="rubah-password.html">Rubah Password</a>
            </li>
            <li>
                <a href="logout.php">Log out</a>
            </li>
        </ul>                                 
    </li>
<?php 
	} //end function pantry_menu 
?>
