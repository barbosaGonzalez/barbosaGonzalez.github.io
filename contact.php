<?php include("/conexion.php") ?>
<?php include("vistas/header.php") ?>
                   	  <li><a href="index.php">Inicio</a></li>
                      <li><a href="about.php">Acerca de</a></li>
                      <li><a href="services.php">Proyectos</a></li>
                      <li><a href="#">Libros</a> </li>	
                      <li><a href="#">Programas</a></li>
                      <li><a href="tesis.php">Tesis</a></li>
                      <li class="current-page"><a href="contact.php">Contacto</a></li>
            	 <?php include("vistas/slider.php") ?>
			<div class="wrap">
			<div class="content">
				<h5 style="padding:0px;margin:20px 0px;">Contactame</h5>
				<div class="contact">
				
				<div class="contact-form">
				<form>
			<div>
			<span><label>Nombre</label></span>
			 <span><input type="text" value="" /></span>
			</div>
			<div>
			<span><label>Email</label></span>
				<span><input type="text" value="" /></span>
				</div>
				<div>
				<span><label>Asunto</label></span>
			 <span><textarea> </textarea></span>
			 </div>
			<div>
			<span><input type="submit" value="Submit"></span>
			</div>
            </form>
				
			</div>
			<div class="map">
				<iframe width="425" height="346" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/?ie=UTF8&amp;ll=14.264383,79.804688&amp;spn=153.263776,68.554688&amp;t=m&amp;z=2&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/?ie=UTF8&amp;ll=14.264383,79.804688&amp;spn=153.263776,68.554688&amp;t=m&amp;z=2&amp;source=embed" style="color:#666;text-align:left">View Larger Map</a></small>
			</div>

</div>
			<div class="clear"> </div>
			</div>
	</div>		
<?php include("vistas/footer.php") ?>