<?php
// © IceTheme 2013
// GNU General Public License


defined('_JEXEC') or die;

// A code to show the offline.php page for the demo
if (JRequest::getCmd("tmpl", "index") == "offline") {
    if (is_file(JPATH_ROOT . "/templates/" . $this->template . "/offline.php")) {
        require_once(JPATH_ROOT . "/templates/" . $this->template . "/offline.php");
    } else {
        if (is_file(JPATH_ROOT . "/templates/system/offline.php")) {
            require_once(JPATH_ROOT . "/templates/system/offline.php");
        }
    }
} else {
	
// Include Variables
include_once(JPATH_ROOT . "/templates/" . $this->template . '/icetools/vars.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

<?php if ($this->params->get('responsive_template')) { ?>
    <meta name="viewport" content="width=555px">
<?php } ?>
	
<jdoc:include type="head" />
       	
		</head>

<body class="<?php echo $pageclass->get('pageclass_sfx'); ?>">


<!-- header -->

<?php
			if(( date('G')>=17)||(date('G')<=6)){
			echo '<header id ="header" class="night">';}
			else{echo '<header id ="header" class="day">';}
			
			
			?> 


	<div class="container">
         <jdoc:include type="modules" name="newposition" />
   
		<div class="row">
                        
            <div id="statistics" class="span4">	
            	<jdoc:include type="modules" name="statistics" />
            </div> 
            
            <div id="logo" class="span4">	
                <a href="<?php echo $this->baseurl ?>"><?php echo $logo; ?></a>	
            </div>
        
          
            <div id="right_top" class="span4"> 
                <?php if ($this->countModules('language')) { ?>
                    <div id="language">	
                       <jdoc:include type="modules" name="language" />
                    </div> 
                <?php } ?>
                
                <?php if ($this->countModules('topmenu')) { ?>
                    <div id="topmenu">
                      <jdoc:include type="modules" name="topmenu" />
                    </div>
                <?php } ?>
                
            </div>
                    
        </div>
            
    </div>
        
</header><!-- /header -->  
 
   
	
    <!-- Content -->	  
    <section id="content">
  
        <div id="content_wraper" class="container">
            
            <div id="mainmenu" class="container clearfix">
            
                <div class="mainmenu">
                    <jdoc:include type="modules" name="mainmenu" />
                </div>
                
                <?php if ($this->countModules('mainmenu_donate')) { ?>
                <div class="donate_top">
                    <jdoc:include type="modules" name="mainmenu_donate" />
                </div>
                <?php } ?>
                 
            </div>

<div class="widjets" id="width_hack1">


<div class="time_wid">
<!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","http://s.bookcdn.com/css/cl/bw-cl-120x45.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_6_1790613358"><div style="width:130px; height:45px; margin: 0 auto;"><a href="http://ibooked.ru/time/elista-w134979">Элиста</a><br/></div></div> <script type="text/javascript"> function setWidgetData_1790613358(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1790613358 = -1; </script> <script type="text/javascript" charset="UTF-8" src="http://ibooked.ru/?page=get_time_info&ver=2&domid=589&type=6&id=1790613358&scode=2&city_id=w134979&wlangid=20&mode=1&details=0&background=ffffff&color=333333&add_background=a0a1a1&add_color=08488d&head_color=333333&border=0&transparent=0"></script>
<!-- clock widget end -->
  </div>   

       


  	 <div class="weather">
                <div id="cont_2a0145176723914abec7074b4ce1ee59">
  <span id="h_2a0145176723914abec7074b4ce1ee59"><a href="http://www.pogoda.com/elista.htm" target="_blank" style="color:#656565; font-family:Arial; font-size:14px;">Прогноз погоды для Элисты</a></span>
  <script type="text/javascript" async src="http://www.pogoda.com/wid_loader/2a0145176723914abec7074b4ce1ee59"></script>
</div>
	  </div> 


          <div class="weather1">

  <div id="cont_a8b48ad67afa4516c4f378a48c606bde">
  <span id="h_a8b48ad67afa4516c4f378a48c606bde"><a id="a_a8b48ad67afa4516c4f378a48c606bde" href="http://www.pogoda.com/elista.htm" target="_blank" rel="nofollow" style="color:#656565;font-family:Arial;font-size:14px;">Прогноз погоды для  Элисты</a></span>
  <script type="text/javascript" async src="http://www.pogoda.com/wid_loader/a8b48ad67afa4516c4f378a48c606bde"></script>
</div>
	</div>


	  <div class="weather2">

          <div id="cont_fb41ae905c21aebe588d6f2042a6c6fd">
  <span id="h_fb41ae905c21aebe588d6f2042a6c6fd"><a id="a_fb41ae905c21aebe588d6f2042a6c6fd" href="http://www.pogoda.com/elista.htm" target="_blank" rel="nofollow" style="color:#656565;font-family:Arial;font-size:14px;">Прогноз погоды для  Элисты</a></span>
  <script type="text/javascript"async src="http://www.pogoda.com/wid_loader/fb41ae905c21aebe588d6f2042a6c6fd"></script>
</div>            
 	</div>

 	    <script type="text/javascript">

 		var w0_style=document.getElementById('h_2a0145176723914abec7074b4ce1ee59').style;
 		 w0_style.textDecoration="none";
                var w0_style=document.getElementById('h_a8b48ad67afa4516c4f378a48c606bde').style;
 		 w0_style.textDecoration="none";
                var w0_style=document.getElementById('h_fb41ae905c21aebe588d6f2042a6c6fd').style;
 		 w0_style.textDecoration="none";
                                                    
	    </script>

                          
    
<div class="widjets_social" id="widjets_social" >

	<div class="just_title"><span class="label label-info">Мы в социальных сетях</span></div>
	<div class="over900" style="position: relative;top:10px;">
	<a target="_blank" href="https://www.facebook.com/profile.php?id=100007629618603"><img style="height: 35px;" src="<?php echo $this->baseurl ?>/templates/it_political2/images/social/facebook.png" /></a>
	<a target="_blank" href="http://vk.com/public76649123"><img style="height: 35px;" src="<?php echo $this->baseurl ?>/templates/it_political2/images/social/vk.png" /></a>
	<a  target="_blank" href="https://twitter.com/novosti_08"><img style="height: 35px;" src="<?php echo $this->baseurl ?>/templates/it_political2/images/social/twitter.png" /></a>
      	<a target="_blank" href="http://instagram.com/novosti_08"><img style="height: 35px;" src="<?php echo $this->baseurl ?>/templates/it_political2/images/social/instagram.png" /></a>
	
	
	</div>
  <script type="text/javascript">
       var soc_style=document.getElementById('widjets_social').style;
      
    
        </script>


</div>
<span class="underline"> </span>
	
</div>
                                  

                 
            <?php if ($this->countModules('iceslideshow')) { ?>
            <!-- slideshow -->
            <div id="iceslideshow">
                <jdoc:include type="modules" name="iceslideshow" />
            </div>
            <!-- /slideshow -->
            <?php } ?>
   
            <jdoc:include type="modules" name="breadcrumbs" />

            <?php if ($this->countModules('donate')) { ?>
            <!-- donate --> 
            <div id="donate">
                 <jdoc:include type="modules" name="donate" />
            </div>
            <!-- /donate --> 
            <?php } ?>
           
            <?php if ($this->countModules('categories')) { ?>
            <!-- categories --> 
            <div id="categories">
               <jdoc:include type="modules" name="categories" />
            </div>
            <!-- /categories --> 
            <?php } ?>
            
            <?php if ($this->countModules('icecarousel')) { ?>
            <div id="icecarousel"> 
                <jdoc:include type="modules" name="icecarousel" style="slider" />           
            </div>   
            <?php } ?>
                    
            <!-- content -->
            <div id="content_inner">
                   
                <!-- promo --> 
                <?php if ($this->countModules('promo1 + promo2 + promo3 + promo4')) { ?>
                <div id="promo" class="row" >
                                                    
                    <?php if ($this->countModules('promo1')) { ?>
                    <div class="<?php echo $promospan;?>">	
                        <jdoc:include type="modules" name="promo1" style="block" />
                    </div> 
                    <?php } ?>
                    
                    <?php if ($this->countModules('promo2')) { ?>
                    <div class="<?php echo $promospan;?>">	
                        <jdoc:include type="modules" name="promo2" style="block" />
                    </div> 
                    <?php } ?>
                    
                    <?php if ($this->countModules('promo3')) { ?>
                    <div class="<?php echo $promospan;?>">	
                        <jdoc:include type="modules" name="promo3" style="block" />
                    </div> 
                    <?php } ?>
                    
                    <?php if ($this->countModules('promo4')) { ?>
                    <div class="<?php echo $promospan;?>">	
                        <jdoc:include type="modules" name="promo4" style="block" />
                    </div> 
                    <?php } ?>
                                                  
                </div><!-- /promo --> 
                <?php } ?>
                                                                
                <div class="row">
                






                    <!-- Middle Col -->
                    <div id="middlecol" class="<?php echo $content_span;?>">
                    
                        <div class="inside">
                                                   
                        <jdoc:include type="message" />
                        
                        <jdoc:include type="component" />
                        
                        </div>
                    
                    </div><!-- / Middle Col  -->
                    




                         <div id="banners">

 				<?php if ($this->countModules('banners_right')) { ?>
    			        <!-- slideshow -->
    			        
       			         <jdoc:include type="modules" name="banners_right" />
    			          <?php } ?>

			                 	
					
					
			</div> 








                                                        

                    <?php if( $this->countModules('sidebar') ){ ?>  
                    <!-- sidebar -->
                    <div id="sidebar" class="span4 <?php if($this->params->get('sidebar_position') == 'left') {  echo $sidebar_left; } ?>" >
                        <div class="inside">
                            
                            <jdoc:include type="modules" name="sidebar" style="sidebar" />
                        
                        </div>
                     
                    </div>
                    <!-- /sidebar -->
                    <?php } ?>



                        

                   </div>
              
            
            </div><!-- /content -->
            
                
            <!-- bottom --> 
            <?php if ($this->countModules('bottom1 + bottom2 + bottom3 + bottom4')) { ?>
            <div id="bottom">
            
                    <div class="row">
                        
                        <?php if ($this->countModules('bottom1')) { ?>
                        <div class="<?php echo $bottomspan;?>">	
                            <jdoc:include type="modules" name="bottom1" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('bottom2')) { ?>
                        <div class="<?php echo $bottomspan;?>">	
                            <jdoc:include type="modules" name="bottom2" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('bottom3')) { ?>
                        <div class="<?php echo $bottomspan;?>">	
                            <jdoc:include type="modules" name="bottom3" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('bottom4')) { ?>
                        <div class="<?php echo $bottomspan;?>">	
                            <jdoc:include type="modules" name="bottom4" style="block" />
                        </div> 
                        <?php } ?>
                        
                    </div>  
                    
            </div><!-- /bottom --> 
            <?php } ?>
            
        </div>
             
    </section><!-- / Content  --> 
                      <div class="go-up" title="Вверх" id='ToTop'>⇧</div>
				<div class="go-down" title="Вниз" id='OnBottom'>⇩</div>  
    <!-- footer --> 
    <footer id="footer">

        <div class="container">
            
            <?php if ($this->countModules('footer1 + footer2 + footer3 + footer4 + message')) { ?>
            <!-- bottom --> 
            <div id="footer_mods">	
			
			
			
					<?php if ($this->countModules('message')) { ?>
                        <div id="message">	
                        <jdoc:include type="modules" name="message" />
                        </div> 
                    <?php } ?>
               		
					<?php if ($this->countModules('footer1 + footer2 + footer3 + footer4')) { ?>
                    <div class="row">
                        
                        <?php if ($this->countModules('footer1')) { ?>
                        <div class="<?php echo $footerspan;?>">	
                            <jdoc:include type="modules" name="footer1" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('footer2')) { ?>
                        <div class="<?php echo $footerspan;?>">	
                            <jdoc:include type="modules" name="footer2" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('footer3')) { ?>
                        <div class="<?php echo $footerspan;?>">	
                            <jdoc:include type="modules" name="footer3" style="block" />
                        </div> 
                        <?php } ?>
                        
                        <?php if ($this->countModules('footer4')) { ?>
                        <div class="<?php echo $footerspan;?>">	
                            <jdoc:include type="modules" name="footer4" style="block" />
                        </div> 
                        <?php } ?>
                        
                    </div>  
                    <?php } ?>

            </div><!-- /bottom --> 
			
			
            <?php } ?> 
        
        
            <!-- copyright -->    
                                  
            <?php if ($this->countModules('copyrightmenu')) { ?>
            <div id="copyrightmenu">
            <jdoc:include type="modules" name="copyrightmenu" />
            </div>
            <?php } ?> 
            
            <?php if($this->params->get('social_icons',1)) { ?>                
            <!-- social -->
            
            <div id="social_icons">
                 
                <ul>
                    <?php if($this->params->get('social_icon_fb')) { ?>
                    <li class="social_facebook">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_FACEBOOK_TITLE'); ?>" href="http://www.facebook.com/<?php echo $social_fb_user; ?>"><span>Facebook</span></a>			
                    </li>				
                    <?php } ?>	
                
                    <?php if($this->params->get('social_icon_tw')) { ?>
                    <li class="social_twitter">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_TWITTER_TITLE'); ?>" href="http://www.twitter.com/<?php echo $social_tw_user; ?>" ><span>Twitter</span></a>
                    </li>
                    <?php } ?>
                    
                    <?php if($this->params->get('social_icon_youtube')) { ?>
                    <li class="social_youtube">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_YOUTUBE_TITLE'); ?>" href="http://www.youtube.com/user/<?php echo $social_yt_user; ?>" ><span>Youtube</span></a>
                    </li>
                    <?php } ?>
                    
                    <?php if($this->params->get('googleplus')) { ?>
                    <li class="social_google">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_GOOGLE_TITLE'); ?>" href="https://plus.google.com/<?php echo $googleplus_id; ?>" ><span>Google</span></a>
                    </li>
                    <?php } ?>
                    
                    <?php if($this->params->get('social_linkedin')) { ?>
                    <li class="social_linkedin">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_LINKEDIN_TITLE'); ?>" href="http://www.linkedin.com/company/<?php echo $linkedin_id; ?>" ><span>Linkedin</span></a>
                    </li>
                    <?php } ?>
                
                    <?php if($this->params->get('rss_feed')) { ?>
                    <li class="social_rss_feed">
                    <a target="_blank" rel="tooltip" data-placement="top" title="" data-original-title="<?php echo JText::_('SOCIAL_RSS_TITLE'); ?>" href="<?php echo $rss_feed_url; ?>"><span>RSS Feed</span></a>
                    </li>				
                    <?php } ?>
                    
                </ul>
            
            </div><!-- social -->
            <?php } ?>              
            
            <!-- copyright -->  
            
        </div>
        <div class="container footer_mid">
		<div id="button_page">
			<div id="button_page1" unselectable = "on" onclick="page_sw2()"> Вести калмыкии </div>
			<div id="button_page2" unselectable = "on" onclick="page_sw1()"> Спортивные новости </div>  
		</div>		
<div id="youtube_video" class="video_page1" ><center>  

	 <iframe width="1024" height="576" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/videoseries?list=UUUxbMjlul9jlJefEwC_Uj0Q"></iframe> </center>

</div>

<div id="youtube_video" class="video_page2" style="display:none"><center>  

    <iframe <iframe width="1024" height="576" src="https://www.youtube.com/embed/w1kWGruRn3A" frameborder="0" allowfullscreen></iframe>
 <!--<iframe width="1024" height="576" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/videoseries?list=UUUxbMjlul9jlJefEwC_Uj0Q"></iframe> --> </center>

</div>
<div class="footer_metrik"><!-- Yandex.Metrika informer -->
<a rel="nofollow" target="_blank" href="https://metrika.yandex.ru/stat/?id=25801205&amp;from=informer"><img onclick="try{Ya.Metrika.informer({i:this,id:25801205,lang:'ru'});return false}catch(e){}" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" alt="Яндекс.Метрика" style="width:88px; height:31px; border:0;" src="//bs.yandex.ru/informer/25801205/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"></a>
<!-- /Yandex.Metrika informer -->



<!-- Yandex.Metrika counter -->


<script type="text/javascript">

function page_sw1() {	  
$(".video_page1").css('display','none');
$(".video_page2").css('display','block');

        }
function page_sw2() {	  
$(".video_page2").css('display','none');
$(".video_page1").css('display','block');
 
       }

</script>
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25801205 = new Ya.Metrika({id:25801205,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript>&lt;div&gt;&lt;img src="//mc.yandex.ru/watch/25801205" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
<!-- /Yandex.Metrika counter --></div>

<div class="footer_vozr">
	<span class="label label-info" style="position: relative;top:40px;">Возрастное ограничение по сайту: 18+</span>
</div>

<center>
	<span style="position: relative;top:80px; color: black; font: 12px Times New Roman, sans-serif;padding-bottom:25px;">E-mail:novosti.08@mail.ru</span>
</center>
</div>            
    </footer><!-- /footer --> 
    
	<?php if ($this->params->get('go2top')) { ?>
    <div id="gotop">
    <a href="#" class="scrollup" style="display: inline; "><?php echo JText::_('TPL_TPL_FIELD_SCROLL'); ?></a>
    </div>
    <?php } ?>  

        
<?php if ($this->params->get('styleswitcher')) { ?>
<ul id="ice-switcher">  
    <li class="style1"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style1"><span>Style 1</span></a></li>  
    <li class="style2"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style2"><span>Style 2</span></a></li> 
    <li class="style3"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style3"><span>Style 3</span></a></li> 
    <li class="style4"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style4"><span>Style 4</span></a></li> 
    <li class="style5"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style5"><span>Style 5</span></a></li>  
    <li class="style6"><a href="templates/<?php echo $this->template;?>/css/styles/style-switcher.php?templatestyle=style6"><span>Style 6</span></a></li>  
</ul> 
<?php } ?>


<?php if ($this->params->get('styleswitcher')) { ?> 
<script type="text/javascript">  

jQuery.fn.styleSwitcher = function(){
	jQuery(this).click(function(){
		loadStyleSheet(this);
		return false;
	});
	function loadStyleSheet(obj) {
		jQuery('body').append('<div id="overlay" />');
		jQuery('body').css({height:'100%'});
		jQuery('#overlay')
			.fadeIn(500,function(){
				/* change the default style */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#stylesheet').attr('href','<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/styles/' + data + '.css');
					cssDummy.check(function(){
						jQuery('#overlay').fadeOut(1000,function(){
							jQuery(this).remove();
						});	
					});
				});
				
				/* change the logo for styles 
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#logo img').attr('src','<?php echo $this->baseurl ?>/images/sampledata/icetheme/logo_' + data + '.png');
				}); */
				
				/* change the responsive style */
				jQuery.get( obj.href+'&js',function(data){
					jQuery('#stylesheet-responsive').attr('href','<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/styles/' + data + '_responsive.css');
					
					cssDummy.check(function(){
						jQuery('#overlay').fadeOut(1000,function(){
							jQuery(this).remove();
						});	
					});
				});
			});
	}
	var cssDummy = {
		init: function(){
			jQuery('<div id="dummy-element" style="display:none" />').appendTo('body');
		},
		check: function(callback) {
			if (jQuery('#dummy-element').width()==2) callback();
			else setTimeout(function(){cssDummy.check(callback)}, 200);
		}
	}
	cssDummy.init();
}
	jQuery('.ice-template-style a').styleSwitcher(); 
	jQuery('#ice-switcher a').styleSwitcher(); 	
	
	
		/* Control the active class to styleswitcher */
		jQuery(function() {
		jQuery('#ice-switcher a').click(function(e) {
			e.preventDefault();
			var $icethis = jQuery(this);
			$icethis.closest('ul').find('.active').removeClass('active');
			$icethis.parent().addClass('active');
		});
		
		jQuery(document).ready(function(){
			jQuery('#ice-switcher li.<?php echo $templatestyle ?>').addClass('active');
		});
		
	});
</script>  
<?php } ?>

    	<?php
    // Include CSS and JS variables 
    include_once(JPATH_ROOT . "/templates/" . $this->template . '/icetools/css.php');
    ?>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/it_political2/js/jquery-2.1.1.min.js"></script> 
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/it_political2/js/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/it_political2/js/jquery.tools.js"></script>
        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/it_political2/js/jquery.uniform.min.js"></script>

 <script type="text/javascript">
		$(function(){
		if ($(window).scrollTop()>="250") $("#ToTop").fadeIn("slow")
		$(window).scroll(function(){
		if ($(window).scrollTop()<="250") $("#ToTop").fadeOut("slow")
		else $("#ToTop").fadeIn("slow")
		});
		
		if ($(window).scrollTop()<=$(document).height()-"999") $("#OnBottom").fadeIn("slow")
		$(window).scroll(function(){
		if ($(window).scrollTop()>=$(document).height()-"999") $("#OnBottom").fadeOut("slow")
		else $("#OnBottom").fadeIn("slow")
		});
		
		$("#ToTop").click(function(){$("html,body").animate({scrollTop:0},"slow")})
		$("#OnBottom").click(function(){$("html,body").animate({scrollTop:$(document).height()},"slow")})
		});
	</script>


<?php if ($this->params->get('google_analytics')) { ?>
<!-- Google Analytics -->  
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $this->params->get('analytics_code');; ?>']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<!-- Google Analytics -->  
<?php } ?>

</body>
</html>
<?php } ?>
