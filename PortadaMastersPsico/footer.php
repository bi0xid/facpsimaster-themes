		 <div id="footer">
		
		 <div id="bottom-nav">
        <a id="bottom-nav-logo" href="<?php bp_root_domain();?>"><img src="<?php global $cb_bottombar_logo;echo $cb_bottombar_logo;?>" /> </a>
        <ul id="bottom-nav-bar">
            <li class='selected'><a href="http://us.es">Universidad de Sevilla</a></li>
            <li><a href="http://centro.us.es/facpsi/">Facultad de Psicología</a></li>
            <li><a href="http://www.us.es/doctorado/programas/">Master Oficial US</a></li>
            <li><a href="<?php echo get_option('home') ?>">Inicio</a></li>
            <li><a href="<?php echo get_option('home') ?>/contacto/">Contacto</a></li>
            <li><a href="<?php echo get_option('home') ?>/accesibilidad/">Accesibilidad</a></li>
            <li><a href="<?php echo get_option('home') ?>/mapa-web/">Mapa Web</a></li>
        </ul>
       
        <div id='credits'>
           	   
               <a href="http://mecus.es">by Mecus</a>

        </div>


         <div class="clear" ></div>
       </div>
	   
	   <br class="clear" />
        </div>
        <!--footer ends here -->
   </div>
   <!--end of page div -->
<?php wp_footer();?>
</body>

</html>