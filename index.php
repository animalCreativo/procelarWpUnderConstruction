<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage  webTemplate Animal Creativo
 * @since  webTemplate Animal Creativo 1.0
 */

get_header(); 

?>

<div class="row " id="bodyContainerBuild">
          <div class="small-12 columns text-center" id="buildTexto2" style="padding-top: 100px;">
            <h3 id="titulo1"> NOS ESTAMOS PREPARANDO </h1>
          </div>
      
          <div class="small-12 columns text-center" id="buildTexto3" style="padding-top: 10px;">
               <h3 id="titulo2">PARA QUE TUS PESTAÑAS <br> LUZCAN MÁS LINDAS Y BONITAS  </h1>
          </div>
          
          <div class="small-12 columns text-center" id="buildTexto">
            <picture id="producto">
            <img width="auto" height="auto" data-interchange="[<?php bloginfo('stylesheet_directory')?>/assets/imgPro.png, small], [<?php bloginfo('stylesheet_directory')?>/assets/imgPro@2x.png, retina]">  
          </picture>
          </div>
         
          <div class="small-12 columns text-center" id="buildTexto" style="padding-top: 10px;">
            <div class="row align-center" >
              <h3 id="titulo3"> Sitio en construcción </h1>
            </div>
            
          </div>
          
          <div class="small-12 columns text-center" id="buildMerck">
            
               
                  <a href="https://www.facebook.com/ProcelarCL/"> 
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebook.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com" style=" height: 60px; width: 60px;margin-right: 10px; ">  
                   </a>
               
               
                  <a href="https://www.instagram.com/procelarcl"> 
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/Instagram.svg" class="attachment-full size-full wp-post-image" alt="www.instagram.com" style=" height: 60px; width: 60px;">
                  </a>
               
      
          </div>
      
          <div class="small-12 columns text-center" id="buildFooter">
            <h3 id="titulo4">Procelar © Todos los derechos reservados</h3>
          </div>
           <div class="small-12 columns text-center" id="buildFooter">
            <h3 id="titulo4"><a href="mailto:elizabeth.berrios@animalcreativo.cl" style="color: #FF336B">Contáctate con nosotros <img src="<?php bloginfo('stylesheet_directory')?>/assets/mail.svg"  style=" height: 22px; width: 16px;"> </a></h3>
          </div>

          

</div>

  


     

<?php get_footer(); ?>

