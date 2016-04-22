<?php defined( '_JEXEC' ) or die; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<jdoc:include type="head" /> 
<?php JHTML::_('behavior.modal'); ?>    
<!--

<?php  include_once (JPATH_ROOT.'/templates/'.$this->template.'/head.php');   ?>    -->
<link async rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
<link async rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />
<meta content="width=648px" name="viewport">
<meta property="og:image" content="http://uralan.info/templates/memory08/images/logo.jpg"/>
<link rel="stylesheet" href="/templates/<?php echo $this->template; ?>/style.css" type="text/css" />
<link rel="icon" href="/templates/<?php echo $this->template; ?>/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="/templates/<?php echo $this->template; ?>/favicon.png" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

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
{  /*$vid_vis = 'no-video'; */  }                         
else
{  $vid_vis = 'video';   }
if (($this->countModules('alfaindex')==0))
{ /* $alfa_vis = 'no-alfaindex'; */  }
else
{  $alfa_vis = 'alfaindex';   }

if (($this->countModules('mobileheroes')==0))
{ /* $mob_main = 'no-mobileheroes'; */  }
else
{  $mob_main = 'mobileheroes';   }

if (($this->countModules('slider')==0))
{  /*$slider_v = 'no-slider';*/   }
else
{  $slider_v = 'slider';   }


?>
                                                                                                     

       
<body>

<div id="header"> 
	<div id="header_wrap">
		<div id="logo"> <a href="/" ><img src="/templates/<?php  echo $this->template; ?>/images/logo.jpg"></img> </a>
			<jdoc:include type="modules" name="header_right"/> 
			<div id="search_img" onclick="show_search()"> </div>
		</div> 
	</div>
</div> 
 <div id="low-header">
        <jdoc:include type="modules" name="top-menu"/>
    </div>
  <!-- <div id="low-header" class="low-header_float" >
        <jdoc:include type="modules" name="top-menu"/>
    </div> -->

<div id="mainblock" >
   <div id="layout" class="<?php if (isset($column)) echo $column ?>">   
		<div id="left">
			<jdoc:include type="modules" name="left-column" style="xhtml" />
		</div>
	
		<div id="content">
		<div>
		<?php  if (isset($slider_v)) echo '<div id="',$slider_v,'">
			<jdoc:include type="modules" name="slider" style="xhtml" />
			</div>' ?>
				
		<?php  if (isset($alfa_vis)) echo '<div id="',$alfa_vis,'">		
			<jdoc:include type="modules" name="alfaindex" style="xhtml" />
			</div> ' ?>
					
			<jdoc:include type="message" />          
				<jdoc:include type="component" />
			<?php  if (isset($vid_vis)) echo '<div id="',$vid_vis,'">		
				<jdoc:include type="modules" name="video" style="xhtml" />
				</div> '?>  
				
		
			
		</div>
		</div>	
		<div id="right">
			<jdoc:include type="modules" name="right-column" style="xhtml" />
		</div>
		<?php if (isset($mob_main)) echo
			'<div id="', $mob_main ,'">                     
				<jdoc:include type="modules" name="mobileheroes" style="xhtml" />
			</div>'	
		?>
	<div class="clear"></div>
	
	</div>
</div>
	<div id="bottom_moduls">
		<jdoc:include type="modules" name="upper_footer" style="xhtml"/> 
	</div>
<footer id="footer">
	<div id="footer_wrap">
		<div id="blue_string"> </div>
		<div id="main-footer">
			<div id="footer-left">
				<jdoc:include type="modules" name="footer-left" style="xhtml" />
			</div>	
			<div id="footer-right">
				<jdoc:include type="modules" name="footer-right" style="xhtml" />
			</div>				
		</div>
		<div id="lower-footer">
			<jdoc:include type="modules" name="footer-low" style="xhtml"/>
		</div>
	</div>
 </footer> 

<!-- <div id="footer-low"></div>
 <div class="go-up" title="Вверх" id='ToTop'>⇧</div>
 <div class="go-down" title="Вниз" id='OnBottom'>⇩</div> 
 -->
</body> 
<!-- Маска, которая затемняет весь экран 
<div id="boxes"> 	
	<div id="mask"></div>	
	<div id="dialog_fix"></div>
	<div id="dialog" class="window"> 
	   <div class="close" onclick="close_dialog()"alt="Закрыть окно" title="Закрыть окно" > X </div>
	   <img src="">
	</div> 
</div> 
 -->               
<!-- Yandex.Metrika counter 
<script  type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31427548 = new Ya.Metrika({ id:31427548, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/31427548" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
--><!-- /Yandex.Metrika counter --> 
<script charset="utf-8" src="/templates/<?php echo $this->template; ?>/js/adaptivemenu.js" type="text/javascript"></script>                                                                                                              
<script src="/templates/<?php echo $this->template; ?>/js/printandelse.js" type="text/javascript" > </script>
<script type="text/javascript">


var width12 = 0;
var left12= 0;
var parrent_category_w = 0;

jQuery(window).on('load resize', windowSize);
function windowSize() 
{
  width12 = jQuery(window).width()*0.8;
  left12 = jQuery(window).width()*0.1;
  
  parrent_category_w = jQuery( ".parent-category-name > a").css("width");
 
  jQuery( "<style> #sbox-window { width: " + width12 + "px; " + "left: " + left12 + "px; } #sbox-window .category-name{ left:" + parrent_category_w + "; }</style>" ).appendTo( "head" );
}
function open_overlay()
{
  jQuery("#modal_container").css('visibility','visible');
   jQuery("#modal_container > #modal_container_wrap").css('visibility','visible'); 
 
}
function close_overlay()
{
  jQuery("#modal_container").css('visibility','hidden');
 jQuery("#modal_container > #modal_container_wrap").css('visibility','hidden'); 
 
}
     jQuery(document).ready(function() {
/*menu_stick();
create_slider();
*/


jQuery('body').append("<div id = 'modal_container' > <div id = 'modal_container_wrap' > </div> <div id = 'modal_overlay_wrap' > </div> </div>");
jQuery('#sbox-window').append("<div id = 'modal_overlay_wrap' > </div> ");

jQuery("#sbox-overlay").appendTo("#modal_overlay_wrap");
jQuery("#sbox-window").appendTo("#modal_container_wrap");
jQuery(".bt-extra").html(function(index, text) {
        return text.replace('Created on', '<span class="icon-calendar"></span>');
    });
jQuery("#sbox-btn-close").text("X");
jQuery('.items-row .page-header h2 a').addClass("modal");
jQuery(".items-row .page-header h2 a").attr("href", function(i, origValue){
  return origValue + "?tmpl=component"; 
});

SqueezeBox.assign($$('a.modal'), {
    parse: 'rel'
});

jQuery("#sbox-btn-close , #sbox-overlay").on( "click", close_overlay );
jQuery("a.modal").on( "click", open_overlay );
});

/*jQuery.ajaxSetup({
  success: function(){menu_stick(); create_slider();}
});*/
jQuery.ajaxSetup({
  success: function(){update_links();}
})
function update_links()
{
  var links = '#modal_container .pager.pagenav li > a';
  jQuery(links).on('click', open_overlay);
  jQuery(links).removeAttr('rel');
  {
  }
  jQuery(links).attr('href', function (i, origValue) {
    return origValue + '?tmpl=component';
  });
  SqueezeBox.assign($$(links), {
    parse: 'rel'
  });
}

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