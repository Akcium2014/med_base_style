<?php
//  @copyright	Copyright (C) 2012 IceTheme. All Rights Reserved
//  @license	Copyrighted Commercial Software 
//  @author     IceTheme (icetheme.com)

// No direct access.
defined('_JEXEC') or die;
?>
/* when is seletec on the left */
#sidebar.sidebar_left { float:left;}			
		
/* Equal Columns */
#content #sidebar:after,
#content #middlecol:after {
	content: "";
	display: block;
    background-color:#FFFF;
	height: 100%;
	position: absolute;
	top: 0;
	z-index: -1;}

#content #sidebar:after {
	right:320px;
	width: 620px;}

#content #middlecol:after {
	right: -320px;
	width: 300px;} 
			
/* Equal Column Sidebar to left */

<?php  if($this->params->get('sidebar_position') == 'left') {  ?>

#middlecol { float:right !important;}
#middlecol:after { left:-400px !important; right:auto !important;}
#sidebar:after { left:400px !important; right:auto !important;}

@media (max-width: 1200px) {	
#middlecol:after { left:-320px !important; right:auto !important;}
#sidebar:after { left:320px !important; right:auto !important;}
}
@media (max-width: 979px) {	
#middlecol:after { left:-248px !important; right:auto !important;}
#sidebar:after { left:248px !important; right:auto !important;}
}

<?php if ($this->params->get('responsive_template') == 0) { ?>
#middlecol:after { left:-320px !important; right:auto !important;}
#sidebar:after { left:320px !important; right:auto !important;}
<?php } ?>

<?php } ?>

/* Large desktop */
@media (min-width: 1200px) {
		
	#content #sidebar:after {
		right:400px;
		width: 770px;}
			
	#content #middlecol:after {
		right: -400px;
		width: 370px;}
		
	#footer:before {
		width:370px;}
}

/* landscape tablet and desktop */
@media (max-width: 979px) {
	#content #sidebar:after {
		right:248px;
		width: 478px;}
	
	#content #middlecol:after {
		right: -248px;
		width: 228px;} 
}

@media (max-width: 767px) {
	#content #sidebar:after { display:none}
	#content #middlecol:after { display:none} 
}

/* Landscape phones and down */
@media (max-width: 480px) {
	#content #sidebar:after { display:none}
	#content #middlecol:after { display:none}
}
