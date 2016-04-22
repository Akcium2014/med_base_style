   /*jQuery.noConflict();*/ // ЕСЛИ ЧТО ТО НЕ РАБОТАЕТ ИЗ ЗА КОНФЛИКТОВ БИБЛИОТЕКИ 


//jQuery(document).ready(function(){
//});


/*

var $1 = jQuery.noConflict();
var all_divs = $1('#featured_wrapper > div');
var l = all_divs.length;
for (i = 0; i < l; i++)
{
  var curr_div = $1(all_divs[i]).find('p');
  
  var all_text_l = curr_div.text().length;
  for (j = curr_div.length - 1; j > curr_div.length - 2; j--)
  {
    var curr_p = $1(curr_div[j]);
    //  var text_l = all_text.length;
    var a = curr_p.find(' * ');
    var last = curr_p.html().slice( - 1);
    alert(last);
    //  var delete_n = 0;
    var temp_s = '';
    if (last == '>')
    {
      $1(a[a.length - 1]).remove();
      //   alert($1(a[a.length - 2]).html());
    }
    //delete_n=delete_n+1;
     else
    {
      temp_s = curr_p.html().split('>');
   
      temp_s[temp_s.length-1] = null;
     // alert(temp_s);
     temp_s = temp_s.join(">");
    //  alert(temp_s);
     curr_p.html(temp_s);
    }
  }
  // for (k = a.length - 1; k > a.length - delete_n; k--)
  //
  // $1(a[k]).css('display', 'none');

}

*/
var isTouch = {};

(function(jQuery) {
    isTouch = (window.hasOwnProperty('ontouchstart'));

    var ghostsLifeTime = 1000;
    
    var normalizeArgs = function(args) {
        var callback,
            selector;
            
        if (typeof args[0] === 'function') {
            callback = args[0];
        }
        else {
            selector = args[0];
            callback = args[1];
        }
        return [selector, callback];
    };

    if (isTouch) {
        var ghosts = [];

        var touches = {},
            jQuerydoc = jQuery(document),
            hasMoved = false,
            handlers = {};
            
        var handleTouchStart = function(e) {
            e.stopPropagation();
            touches.x = e.originalEvent.touches[0].pageX;
            touches.y = e.originalEvent.touches[0].pageY;
            hasMoved = false;
        };

        var handleTouchMove = function(e) {
            if (Math.abs(e.originalEvent.touches[0].pageX - touches.x) > 10 || Math.abs(e.originalEvent.touches[0].pageX - touches.y) > 10) {
                hasMoved = true;
            }
        };

        var removeGhosts = function() {
            ghosts.splice(0, 2);
        };

        var handleGhosts = function(e) {
            var i, l;
            for (i = 0, l = ghosts.length; i < l; i += 2) {
                if (Math.abs(e.pageX - ghosts[i]) < 25 && Math.abs(e.pageY - ghosts[i + 1]) < 25) {
                    e.stopPropagation();
                    e.preventDefault();
                }
            }
        };

        jQuerydoc.live('click', handleGhosts);
        jQuerydoc.live('touchmove', handleTouchMove);

        jQuery.fn.onpress = function() {
            var args = normalizeArgs(arguments);
            
            var handleTouchEnd = function(e) {
                e.stopPropagation();

                if (!hasMoved) {
                    args[1].call(this, e);
                    ghosts.push(touches.x, touches.y);
                    window.setTimeout(removeGhosts, ghostsLifeTime);
                }
            };
            
            handlers[args[1]] = handleTouchEnd;

            if (args[0]) {
                this.live('touchstart.onpress', args[0], handleTouchStart);
                this.live('touchend.onpress', args[0], handleTouchEnd);
                this.live('press', args[0], args[1]);
            }
            else {
                this.live('touchstart.onpress', handleTouchStart);
                this.live('touchend.onpress', handleTouchEnd);
                this.live('press', args[1]);
            }
        };
        
        jQuery.fn.offpress = function() {
            var args = normalizeArgs(arguments);
            if (args[1]) {
                if (args[0]) {
                    this.die('.onpress', args[0], handlers[args[1]]);
                    this.die('press', args[0], args[1]);
                }
                else {
                    this.die('.onpress', handlers[args[1]]);
                    this.die('press', args[1]);
                }
                delete handlers[args[1]];
            }
            else {
                if (args[0]) {
                    this.die('.onpress', args[0]);
                    this.die('press', args[0]);
                }
                else {
                    this.die('.onpress');
                    this.die('press');
                }
            }
        };
    }
    else {
        jQuery.fn.onpress = function() {
            var args = normalizeArgs(arguments);
            if (args[0]) {
                this.live('click.onpress', args[0], args[1]);
                this.live('press.onpress', args[0], args[1]);
            }
            else {
                this.live('click.onpress', args[1]);
                this.live('press.onpress', args[1]);
            }
            
        };
        jQuery.fn.offpress = function() {
            var args = normalizeArgs(arguments);
            args[0] ? this.die('.onpress', args[0], args[1]) : this.die('.onpress', args[1]);
        };
    }
}(jQuery));




var transition="";
//var transition_modal=""
window.onload=function(){

jQuery('.linkthumb.modal').click(function (e)
{
  e.preventDefault();
  var src = jQuery(this).attr('href');
  var maskHeight = jQuery(document).height();
  var maskWidth = jQuery(window).width();
  jQuery('#mask').css({
    'width': maskWidth,
    'height': maskHeight
  });
  jQuery('#mask').fadeIn(1000);
  jQuery('#mask').fadeTo('slow', 0.8);
  jQuery('#dialog.window img').attr("src", src);  
  var winH = jQuery(window).height();
  var winW = jQuery(window).width();
/*  jQuery("#dialog").css('top', winH / 2 - jQuery("#dialog").height() / 2);
  jQuery("#dialog").css('left', winW / 2 - jQuery("#dialog").width() / 2);  */
   jQuery("#dialog img").load(function() { 
 //  jQuery("#boxes").fadeIn(500);  

//transition_modal =  jQuery("#dialog").css("transition");
jQuery("#boxes").css("visibility","visible");
jQuery("#dialog").css("opacity","1");
   jQuery("#dialog").height(jQuery("#dialog img").height());   
  });  

});
jQuery('#mask').click(function () {       
  jQuery(this).hide(); 
jQuery("#boxes").css("visibility","hidden");                                  
  //jQuery("#dialog").css("transition","0s");
  jQuery("#dialog").css("opacity","0");      
//  jQuery('#boxes').hide(); 
  // jQuery("#boxes").css("transition",transition_modal);
  jQuery("#dialog").height("87%");
});

/*var start_pos=jQuery('#low-header').offset().top;

 jQuery(window).scroll(function()
 {
  if (jQuery(window).scrollTop()>=start_pos) 
  {
   if (jQuery('#low-header').hasClass()==false)
   { 
      jQuery('#low-header').addClass('sticky_low_header');
      jQuery('#header').addClass('sticky_header');
   }
  }
   else
   { 
     jQuery('#low-header').removeClass('sticky_low_header');
     jQuery('#header').removeClass('sticky_header');
   }
 });
   */    /*
jQuery(".search form input").focus(function() 
  {
    jQuery(".search form button").css("visibility","hidden");
  }
)

jQuery(".search form input").focusout(function() 
  {
    jQuery(".search form button").css("visibility","visible");
  }
)*/

 //alert('Мобильный тест Javascript');   
 jQuery('.dropdown-toggle').removeAttr("href");
  jQuery('.dropdown-toggle').attr('onmousedown','showhide(this)');
var asdfa = jQuery('.dropdown-toggle');
var jqueryistru = jQuery('.pull-right > .dropdown-menu');
//alert(jqueryistru);   
/*
var msg;
if (window.jQuery) {
    msg = 'You are running jQuery version: ' + jQuery.fn.jquery;
} else {
    msg = 'jQuery is not installed';
}
alert(msg);   
*/   
var $1 =jQuery.noConflict();
transition=$1("#change_page_div button").css("transition");   
  
$1('.mj-simple-news > div').html("<div id='featured_wrapper'>"+$1('.mj-simple-news > div').html()+"</div> <div id='news_icon_cont'> </div>  <div id='navigation'><div id='back'></div><div id='forward'></div></div>");
 
$1('.items-leading').html("<div id='featured_wrapper'>"+$1('.items-leading').html()+"</div> <div id='news_icon_cont'> </div>  <div id='navigation'><div id='back'></div><div id='forward'></div></div>");
/*ФУНКЦИЯ КОТОРАЯ СОЗДАЕТ СЛАЙДЕР ИЗ ПОСЛЕДНИХ НОВОСТЕЙ НА ГЛАВНОЙ*/        
function create_slider(){
var $1 = jQuery.noConflict();
var all_divs = $1('#featured_wrapper > div');
var l = all_divs.length;
for (i = 0; i < l; i++)
{
  var curr_div = $1(all_divs[i]).find('.sn-infor > *');
  var all_text_l = curr_div.text().length;
  while (all_text_l > 340)
  {   
    //alert(curr_div.length);
    for (var j = curr_div.length - 1; j > 0; )
    {
      
      var curr_p = $1(curr_div[j]);
     // alert(curr_p.html());


    //  alert('Ширина всех ' + all_text_l+'/n Весь текст'+ curr_div.text());
     // alert($1(curr_div[j]).text())
      //  var text_l = all_text.length;
      var a = curr_p.find(' * ');
      var curr_p_l = curr_p.text().length;
      if (all_text_l - curr_p_l > 340) //
      {
       //alert('сейчас j='+j+'сейчас читаем \n'+curr_p.text());
       curr_p.remove();
        j--;                                     
      } 
      else
      {
        if (curr_p_l <= 0 || all_text_l <= 340)
        {
          j--;
        } 
        else
        {
          var last = curr_p.html().slice( - 1);
          // alert(last);
          //  var delete_n = 0;
          var temp_s = '';
          if (last == '>')
          { 
            //alert($1(a[a.length - 2]).html());          
            $1(a[a.length - 1]).remove();
           // alert($1(a[a.length - 2]).html());
          }
          //delete_n=delete_n+1;
          else
          {     
	    temp_s = curr_p.html().split('>');
		            //  alert(temp_s[temp_s.length - 1].length+' > '+all_text_l / 10);
              //   alert(temp_s);
	    if (temp_s[temp_s.length - 1].length > all_text_l / 10)
            {
              //alert(temp_s[temp_s.length - 1].length); 
               //alert(temp_s[temp_s.length - 1]);
              var temp_words = temp_s[temp_s.length - 1].split(' ');
              //    alert(temp_words);
              //for (i2 = temp_words.length - 1; i2 > temp_words.length / 2; i2--)
              temp_words.splice((temp_words.length / 1.2).toFixed(0) - 1, (temp_words.length / 1.2).toFixed(0)+1);
              //alert(temp_words);
              temp_s[temp_s.length - 1] = temp_words.join(' ');
              //alert(temp_s[temp_s.length - 1]);
            } 
            else
            {
              temp_s.splice(temp_s.length - 1, 1);
            }
            // alert(temp_s);

            temp_s = temp_s.join('>');
            //  alert(temp_s);
            curr_p.html(temp_s);
          }
        }
      }
      all_divs = $1('#featured_wrapper > div');
      curr_div = $1(all_divs[i]).find('.sn-infor > *');
      all_text_l = curr_div.text().length;
    }
    //  alert(all_text_l);

  }
  // for (k = a.length - 1; k > a.length - delete_n; k--)
  //
  // $1(a[k]).css('display', 'none');

}
} 
 /*ФУНКЦИЯ КОТОРАЯ СОЗДАЕТ СЛАЙДЕР ИЗ ПОСЛЕДНИХ НОВОСТЕЙ НА ГЛАВНОЙ*/


var	children_a = $1('#featured_wrapper > div.sn-item ').length;
//alert(children_a);
var cont='';
elems= $1('#featured_wrapper > div.sn-item ');
for(i=0;i<children_a;i++)
{

  var src=$1(elems[i]).find('.sn-image img').attr('src') ;
 // alert(i);
  var i1=1+i;
  f_name='slide'+i1;
  var act='';
  if(i==0)act='active';
  
  cont=cont+'<div class="news_icon '+act+'" onclick="'+f_name+'(this)"> <div style="background-image: url(&quot;'+src+'&quot;);"'+' class="icon_image"> </div> <div class="underline"> </div> </div> ';
}
$1('#news_icon_cont').html(cont);

 try{
var search_w =$1('#low-header .search');
var s_html= search_w.html();
s_html ='<div id="search-close-open" onmousedown="show_hide_search(this)">  </div>'+s_html;
search_w.html(s_html);
//alert(search_w.s_html());

 }

catch(error1)

{

}
   
 try
{
var matchClass ='pagination';
var content  = "hello moto";
var pag_wind ;
  var elems = document.getElementsByTagName('*'), i;
    for (i in elems) 
    {
         if((' ' + elems[i].className + ' ').indexOf(' ' + matchClass + ' ') > -1) 
 	 {
           pag_wind =  elems[i];
         }
    }  
}
catch(error2){}
//alert($1(pag_wind).attr('class'));
//var alfa =$1(page_wind).innerHTML;
try{
 //if(pag_wind.innerHTML.length>1000)
 { 
   var alfa = pag_wind.innerHTML+'<div id="switcher_change_p" style="display:none;" onclick="showhide_page_change()"></div> <div id="change_page_div"><input type="search" pattern="\d [0-9]" placeholder="Перейти на страницу" size="20" id="page_change" class="inputbox search-query" maxlength="5" id="mod-search-searchword" name="searchword"><button onclick="change_page(this)" id="change_page_button" value="Перейти">Ок</button></div>'; 
   pag_wind.innerHTML=alfa;    
 }
}
catch(err)
{
   
}
//alert('Разработка   '+'\n'+ alfa);  

   
//alert("123");

$1(".mj-simple-news").fadeIn(1800);
$1("#slider").css('height', 'auto');                        
  
$1('.mj-simple-news > div').on("swiperight",function(){
   move_left();  
  });                       
 $1('.mj-simple-news > div').on("swipeleft",function(){
   move_right();  
  });                       

}
 




function close_dialog() {
 /* jQuery(this).preventDefault();   */
  jQuery('#mask').hide();      
  jQuery("#boxes").css("visibility","hidden");

 //jQuery("#boxes").css("transition","0s");
  jQuery("#dialog").css("opacity","0");
//  jQuery('#boxes').hide(); 
 //  jQuery("#boxes").css("transition",transition_modal);
 
  jQuery("#dialog").height("87%"); 
};

var slider_stop=0;
var slider_stop_move=0;
var rotate_controle=0;
function showhide_page_change()
{
  if(rotate_controle==0)
  { 
    $1("#switcher_change_p").css("transform","rotate(180deg)");
    rotate_controle=1;
  }
  else
  { 
    $1("#switcher_change_p").css("transform","rotate(0deg)");
    rotate_controle=0;
  }
  
  $1("#change_page_div button").css("transition","none");
  $1("#change_page_div *").slideToggle("slow" , function () {
  $1("#change_page_div button").css("transition",transition);
  });

}
function move_left()
{

var elems = $1('#news_icon_cont > div');
var num_of_slides=elems.length;
var curr_slide =0;
var tmp15=""; 

    for(i=0;i< num_of_slides;i++)
    {
    if($1(elems[i]).hasClass('active'))
	{
	 curr_slide=i+1;
	}
    }
 tmp15 = 16.6667*(num_of_slides-1);
 if(curr_slide > 1) 
 {   
      	var  tmp12 = (curr_slide-2)*16.6667;
      	var  tmp13 = '-'+tmp12.toString()+'%';
	var  tmp14 = "translateX("+tmp13 +")"; 	
	$1('#featured_wrapper').css('transform',tmp14);
        set_active(curr_slide-1);
 }
 else 
 {
	$1('#featured_wrapper').css("transform",'translate(-'+tmp15.toString()+'%)');
	set_active(num_of_slides);  
 }                                    
 	

slider_stop_move=1;

}                   	


function move_right()
{
slider_start()
slider_stop_move=1;
}

  
function show_hide_search(lol6)
{
   
  var $1 =jQuery.noConflict();

  var holder= $1(lol6).parent();
  if(holder.css('display')=='none') 
  {
	holder.fadeIn(1000,function () 
	{
	  // alert('done');
	});                 
  }
  else
  {
	holder.fadeOut(1000,function () 
	{
	 //  alert('done');
	});                 

  }

      //  alert(r);
}
function set_active(number)
{number=number-1;
 try
  {
   var $1 =jQuery.noConflict();   
   var elems = $1('#news_icon_cont > div');
    for(i=0;i<elems.length;i++)
    {
    $1(elems[i]).removeClass('active')
    }
   elems = $1(elems[number]);
   result = elems.attr('class');
   result=result+' active';
   elems.attr('class', result);
   }
 catch(err){}
}
                 
function cancel_stop()
{  

setTimeout("slider_stop=0;", 8500);
//slider_stop=0;
}
 function slide1(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(0%)');
 set_active(1);
slider_stop=1;
cancel_stop();
 }
  function slide2(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(-16.6667%)');

  set_active(2);                  
slider_stop=1; 
cancel_stop();

 }
  function slide3(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(-33.3334%)');
 
  set_active(3);         
slider_stop=1;  
cancel_stop();
 }
  function slide4(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(-50%)');

  set_active(4);                  
slider_stop=1;   
cancel_stop();

 }
  function slide5(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(-66.6667%)');

  set_active(5);         
slider_stop=1;  
cancel_stop();

 }
  function slide6(tem1){var $1 =jQuery.noConflict();
 $1('#featured_wrapper').css('transform','translateX(-83.3334%)');

  set_active(6);                   
slider_stop=1;       
cancel_stop();

 }
function slider_start()
{
var $1 =jQuery.noConflict();
var elems = $1('#news_icon_cont > div');
var num_of_slides=elems.length;
var curr_slide =0; 

    for(i=0;i< num_of_slides;i++)
    {
    if($1(elems[i]).hasClass('active'))
	{
	 curr_slide=i+1;
	}
    }
 if(curr_slide < num_of_slides) 
 {   
      	var  tmp12 =(curr_slide)*16.6667;
      	var  tmp13 = '-'+tmp12.toString()+'%'; 	
	var  tmp14 = 'translateX('+tmp13+')';
	$1('#featured_wrapper').css('transform',tmp14);
        set_active(curr_slide+1);
 }
 else 
 {
	$1('#featured_wrapper').css('transform','translateX(0%)');
	set_active(1);  
 }                                    
 	
}
var slider_roll=function()
{ 
	if(slider_stop==0) 
	{
	     if(slider_stop_move==0)
		slider_start();
	     else {setTimeout("slider_stop_move=0",4000);}
	}
	setTimeout(arguments.callee,4500);  	

}
  
  
  setTimeout( slider_roll,7000 );

function change_page(lol5)
{
var $1 =jQuery.noConflict();
  try 
  {   
    var holder= $1(lol5).parent().find($1('input'));
    var value1=$1(holder).val();
    value1= value1.replace(/[^0-9]/g, '');
    $1(holder).val(value1);
    value1=(value1-1)*6; 
    var search_size=0; 
    var if_all_val=0;
    if (value1>-1)  
    {
    	 var example1 = String(window.location);
    	 if(example1.indexOf('/search/') + 1) 
    	  {
    	    example1= example1.split('start='); 
    	    try
	    {
		 search_size=jQuery("#limit_chzn > a > span").text()*2/2;
	    }
	    catch(errr)
	    {
		 jQuery("#switcher_change_p , #change_page_div").css("display","none");
		 if_all_val=1;
	    }
	    value1=search_size;
    	    example1=example1[0]+'&';
    	  }	  
    	 else 
    	  { 
    	    example1= example1.split('?');
    	    example1=example1[0]+'?';
    	  }
    	 var result1=example1 +'start='+value1;    
    	 //alert(result1);    
    	 if(if_all_val==0) window.location=result1;   
     
    }  
  } 
  catch(err)
   {
	//alert(err)
   }
}
   
function showhide(lol)
{
   var $1 =jQuery.noConflict();
/*var jqueryistru = $1('.pull-right > .dropdown-menu');

if($1(jqueryistru).css('display') == 'none')
$1(jqueryistru).css('display','block');    
else                        */
/*$1(jqueryistru).css('display','none');

 var elems = document.getElementsByTagName('*'), i;
    for (i in elems) {
        if((' ' + elems[i].className + ' ').indexOf(' ' + matchClass + ' ')
                > -1) {
          pag_wind =  elems[i];
        }
    }
   */

/*
event = event || window.event;
// кросс-браузерно получить target
var t = event.target || event.srcElement;
	  alert(t.className);*/    
	 // alert($1(lol).attr('class'));  
var afgh=  $1(lol).parent().find($1('ul'));
//afgh=afgh+" over";     
if ($1(afgh).css('display') == 'none')
$1(afgh).css('display','block'); 
else
$1(afgh).css('display','none'); 
	 
// alert($1(afgh).attr('class'));

//$1(lol).attr('class',afgh)/*"lolwtfclass";*/
                                      // alert($1(lol).attr('class')); */
}
function show_search()
{
  $1("#header .search").css("display","block");
  $1("#search_img").css("display","none");
}

  
