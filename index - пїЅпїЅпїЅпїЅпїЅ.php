<?php defined( '_JEXEC' ) or die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />
<meta name="viewport" content="width=648px">

<link rel="stylesheet" href="/templates/<?php echo $this->template; ?>/style.css" type="text/css" />



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

?>



<script src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
  <script src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
  <script src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5" type="text/javascript"></script>
  <script src="/plugins/content/jw_sig/jw_sig/includes/js/jquery_fancybox/fancybox/helpers/jquery.fancybox-thumbs.js?v=2.1.5" type="text/javascript"></script>
  <script src="/plugins/content/jw_sig/jw_sig/includes/js/behaviour.js" type="text/javascript"></script>
 

<body>

<div id="header"> 
<!-- 
<div id="logo"><img src="/templates/<?php /* echo $this->template; */?>/images/70 let pobedi.png"></img></div> 
-->
</div> 
<div id="headerbar"> </div>

<div id="layout" class="<?php if (isset($column)) echo $column ?>">
    <div id="low-header">
        <jdoc:include type="modules" name="top-menu"/>
    </div>

    <div id="left">
        <jdoc:include type="modules" name="left-column" style="xhtml" />
    </div>

    <div id="content">
 	<div>
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

</body>                                                                                                                
<script src="/templates/<?php echo $this->template; ?>/js/printandelse.js" type="text/javascript" > </script>
</html>