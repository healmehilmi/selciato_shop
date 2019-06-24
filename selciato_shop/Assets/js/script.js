
/* var button = document.querySelector(".produk_button");

button.mouseover = function(){
TweenLite.to(button, .3, {css:{borderRadius:"50px 50px 50px 0px"}});
} */
 

var lis = document.querySelectorAll('.Hovers > li');
	
for(var i = 0; i < lis.length; i++) {

	lis[i].addEventListener('mouseenter', function(_e){

		var li_siblings = _e.target.parentNode.children;

		
		for(var i = 0; i < li_siblings.length; i++) {
			li_siblings[i].classList.remove('active');
		}
		_e.target.classList.add('active');

		
		var content_divs = _e.target.parentNode.parentNode.querySelectorAll('.Content > div');

		for(var i = 0; i < li_siblings.length; i++) {
			
			if(li_siblings[i].classList.contains('active')) {
				content_divs[i].style = "display:flex;justify-content: space-around" ;
				
				
				
			} else {
				content_divs[i].style.display = "none";
			}
		}

	});
}

var erste_tab_lis = document.querySelectorAll('.Hovered .Hovers > li:first-child');
for(var i = 0; i < erste_tab_lis.length; i++) {
	erste_tab_lis[i].dispatchEvent(new Event('mouseenter'));


}



