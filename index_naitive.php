<?php defined( '_JEXEC' ) or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<jdoc:include type="head" />    
<!--
<?php  include_once (JPATH_ROOT.'/templates/'.$this->template.'/head.php');   ?>    -->
<link async rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
<link async rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />
<meta content="width=648px" name="viewport">
<meta property="og:image" content="http://uralan.info/templates/memory08/images/logo.jpg"/>
<link rel="stylesheet" href="/templates/<?php echo $this->template; ?>/style.css" type="text/css" />
<link rel="icon" href="/templates/<?php echo $this->template; ?>/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="/templates/<?php echo $this->template; ?>/favicon.png" type="image/x-icon">
                                                                                                                        
 

<script async  src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
  <script async src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
  <script async src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5" type="text/javascript"></script>
  <script async src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/helpers/jquery.fancybox-thumbs.js?v=2.1.5" type="text/javascript"></script>
  <script async src="/plugins/content/jw_sig/jw_sig/includes/js/behaviour.js" type="text/javascript"></script>
 
 
</head>
<?php
    JHtml::_('jquery.framework');
?>
<?php
if (($this->countModules('right-column')==0) and ($this->countModules('left-column')==0)){
  $column = 'all-hidden';
}elseif ($this->countModules('right-column')==0){
  $column = 'right-hidden';
}elseif ($this->countModules('left-column')==0){
  $column = 'left-hidden';
}
if (($this->countModules('video')==0))
{  $vid_vis = 'no-video';   }                         
else
{  $vid_vis = 'video';   }
if (($this->countModules('alfaindex')==0))
{  $alfa_vis = 'no-alfaindex';   }
else
{  $alfa_vis = 'alfaindex';   }

if (($this->countModules('mobileheroes')==0))
{  $mob_main = 'no-mobileheroes';   }
else
{  $mob_main = 'mobileheroes';   }

if (($this->countModules('slider')==0))
{  $slider_v = 'no-slider';   }
else
{  $slider_v = 'slider';   }


?>
                                                                                                     

       
<body>

<div id="header"> 
 
<div id="logo"> <a href="/" ><img src="/templates/<?php  echo $this->template; ?>/images/logo.jpg"></img> </a>
<jdoc:include type="modules" name="header_right"/> 
<div id="search_img" onclick="show_search()"> </div>
</div> 
</div> 
 <div id="low-header">
        <jdoc:include type="modules" name="top-menu"/>
    </div>
  <div id="low-header" class="low-header_float" >
        <jdoc:include type="modules" name="top-menu"/>
    </div>


<div id="layout" class="<?php if (isset($column)) echo $column ?>">
   
    <div id="left">
        <jdoc:include type="modules" name="left-column" style="xhtml" />
    </div>

    <div id="content">
 	<div>
		<div id="<?php  if (isset($slider_v)) echo $slider_v ?>">
		<jdoc:include type="modules" name="slider" style="xhtml" />
		</div>
		<div id="<?php if (isset($alfa_vis)) echo $alfa_vis ?>">
		<jdoc:include type="modules" name="alfaindex" style="xhtml" />
		</div>        	
		 <jdoc:include type="message" />          
       		 <jdoc:include type="component" />
                <div id="<?php if (isset($vid_vis)) echo $vid_vis ?>">
			<jdoc:include type="modules" name="video" style="xhtml" />
		</div>
		
	</div>
    </div>	
    <div id="right">
        <jdoc:include type="modules" name="right-column" style="xhtml" />
    </div>
    <div id="<?php if (isset($mob_main)) echo $mob_main ?>">                     
	<jdoc:include type="modules" name="mobileheroes" style="xhtml" />
    </div>	
    <div class="clear"></div>


</div>

<footer id="footer">
<jdoc:include type="modules" name="footer" style="xhtml" />
</footer> 

<div id="footer-low"></div>
 <div class="go-up" title="Вверх" id='ToTop'>⇧</div>
 <div class="go-down" title="Вниз" id='OnBottom'>⇩</div> 
</body> 
<!-- Маска, которая затемняет весь экран -->
<div id="boxes"> 	
	<div id="mask"></div>	
	<div id="dialog_fix"></div>
	<div id="dialog" class="window"> 
	   <div class="close" onclick="close_dialog()"alt="Закрыть окно" title="Закрыть окно" > X </div>
	   <img src="">
	</div> 
</div>                 
<!-- Yandex.Metrika counter -->
<script  type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31427548 = new Ya.Metrika({ id:31427548, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/31427548" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --> 
<script charset="utf-8" src="/templates/<?php echo $this->template; ?>/js/adaptivemenu.js" type="text/javascript"></script>                                                                                                              
<script src="/templates/<?php echo $this->template; ?>/js/printandelse.js" type="text/javascript" > </script>
<script type="text/javascript">
     jQuery(document).ready(function() {
menu_stick();
create_slider();

});
Jquery.ajaxSetup({
  success: function(){menu_stick(); create_slider();}
});
function menu_stick() {
  var start_pos = jQuery('#low-header').offset().top;
  var scrollTimer = null;
  var is_fixed = false;
  var scrl_top;
  jQuery(window).scroll(function ()
  {
    scrl_top = jQuery(window).scrollTop();
    if (scrl_top >= start_pos)
    {
      if (is_fixed == false)
      {
        change_fix();
        is_fixed = true;
      }
    } 
    else
    {
      if (is_fixed)
      {
        change_fix();
        is_fixed = false;
      }
    }
  });
};
         function change_fix()
  {
    /* if (scrl_top>=start_pos) 
 	  	 {
		  jQuery("#ToTop").fadeIn("slow");                
		  */
    if (jQuery('.low-header_float').hasClass("sticky_low_header") == false)
    {
      jQuery('.low-header_float').addClass('sticky_low_header');
    }
    // }
     else
    {
      //   jQuery("#ToTop").fadeOut("slow");
      jQuery('.low-header_float').removeClass('sticky_low_header');
    }
  }

	</script>
<script type="text/javascript">
	 /*
		jQuery(function(){ 
                var start_pos=jQuery('#low-header').offset().top;
                var scrollTimer = null;
				var is_fixed=false;   
				var scrl_top;
		jQuery(window).scroll(function () 
		{
			scrl_top = $(window).scrollTop();
 		    if (scrl_top >= start_pos) 
			{		        
				if	(!=is_fixed)
				{ 
					change_fix();
					is_fixed=true; 
				} 			 
       		}  
			else
			{  
				if (is_fixed)
				{
				    change_fix();
					is_fixed=false;
				}				 	
			}         
		});  
		function change_fix()
		{
  		 
		// if (scrl_top>=start_pos) 
 	  	 //{
		//  jQuery("#ToTop").fadeIn("slow");                
		
 		  if (jQuery('.low-header_float').hasClass()==false)
		  { 
 		    jQuery('.low-header_float').addClass('sticky_low_header');
 		  }
		// }
	      else
 		  { 
		//   jQuery("#ToTop").fadeOut("slow");
  		    jQuery('.low-header_float').removeClass('sticky_low_header');
  		  }
 		}  
	/*        jQuery("#ToTop").click(function(){jQuery("html,body").animate({scrollTop:0},1200)})
		jQuery("#OnBottom").click(function(){jQuery("html,body").animate({scrollTop:jQuery(document).height()},1200)})
		}); */     
	
 	
/*ВАРИАНТ С ПОСТЕПЕННЫМ ОПРЕДЕЛЕНИЕМ ПРОКРУТКИ 
		jQuery(function(){ 
                var start_pos=jQuery('#low-header').offset().top;
                var scrollTimer = null;   
		jQuery(window).scroll(function () 
		{
 		   if (scrollTimer) 
		    {
		        clearTimeout(scrollTimer);   // clear any previous pending timer
		    }
		    scrollTimer = setTimeout(handleScroll, 100);   // set new timer
		});  
		function handleScroll()
		{
  		 scrollTimer = null;	
		 var scrl_top=jQuery(window).scrollTop();	 
 		 if (scrl_top>=start_pos) 
 	  	 {
		  jQuery("#ToTop").fadeIn("slow");
                 

 		  if (jQuery('.low-header_float').hasClass()==false)
		   { 
 		     jQuery('.low-header_float').addClass('sticky_low_header');
 		   }
		 }
		 else
 		 { 
		   jQuery("#ToTop").fadeOut("slow");
  		   jQuery('.low-header_float').removeClass('sticky_low_header');
  		 }
 		}  
	        jQuery("#ToTop").click(function(){jQuery("html,body").animate({scrollTop:0},1200)})
		jQuery("#OnBottom").click(function(){jQuery("html,body").animate({scrollTop:jQuery(document).height()},1200)})
		});      
	   */
 	</script>

</html>