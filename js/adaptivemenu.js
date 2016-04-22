
var $1 =jQuery.noConflict(); 
var nav =$1('#low-header');
mynav();
function mynav() {
var width = window.innerWidth || document.documentElement.clientWidth;
if (863 >= width) {  
nav[0].children[0].style.display = 'none';
nav[0].onclick = function(event) {
event = event || window.event;
var t = event.target || event.srcElement;
if (t != this) { return true; }
this.children[0].style.display = this.children[0].style.display === 'none' ? 'block' : 'none';
}
}
}
     
window.onload = function() {
mynav();
var width = window.innerWidth || document.documentElement.clientWidth;
if (863 < width) {
nav[0].children[0].style.display = 'block';
}
}
     
window.onresize = function() {
mynav();
var width = window.innerWidth || document.documentElement.clientWidth;
if (863 < width) {
nav[0].children[0].style.display = 'block';
} 
}
