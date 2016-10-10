


<style>


 body {
  background-color: <?php echo $row_ajustes['backgraund_conten']; ?>;
}


.sidebar-menu {
  display: table-cell;
  position: relative;
  width: <?php echo $row_ajustes['side_ancho']; ?>px;
  background: <?php echo $row_ajustes['side_backgraund']; ?>;
  z-index: 1;
}

.sidebar-menu .main-menu a {
    color: <?php echo $row_ajustes['side_fuente']; ?>;
    text-decoration: none;
    display: block;
    padding: 13px 5px;
   
}




.sidebar-menu .main-menu a:hover {
    color: <?php echo $row_ajustes['side_hover']; ?>;
}



.user-info-navbar {
    background-color: <?php echo $row_ajustes['top_backgraund']; ?>;
    min-height: 0;
    border: 0;
    padding: 0;
    margin: -30px;
    margin-bottom: 30px;
}


.user-info-navbar .user-info-menu > li {
    position: relative;
    margin: 0;
    padding: 0;
    /*border: 1px solid #ffffff;*/
    border-top: 0;
    border-bottom: 0;
    display: block;
    float: left;
}


.user-info-navbar .user-info-menu > li > form {
    position: relative;
    display: block;
    padding: 30px 20px;
    padding-bottom: 26px;
    margin: 0;
    /*border-bottom: 1px solid #ffffff;*/
}



.user-info-navbar .user-info-menu > li > a {
    position: relative;
    display: block;
    padding: 30px 20px;
    color: <?php echo $row_ajustes['top_fuente']; ?>;
    /*border-bottom: 1px solid #ffffff;*/
    top: 1px;
    z-index: 5;
}
.user-info-navbar .user-info-menu > li > a:hover {
    color: <?php echo $row_ajustes['top_hover']; ?>;
}

a .titulo
{
	color:#FDFDFD
	
	
}

</style>

