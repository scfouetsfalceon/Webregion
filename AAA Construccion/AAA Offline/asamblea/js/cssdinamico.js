// getBrowserWidth 
	function getBrowserWidth(){
		if (window.innerWidth){
			return window.innerWidth;
			}	else if (document.documentElement && document.documentElement.clientWidth != 0){
			return document.documentElement.clientWidth;	}
		else if (document.body){return document.body.clientWidth;}		
			return 0;
	}


function dynamicLayout(){
	var browserWidth = getBrowserWidth();

	//cambiar  800*600 CSS 
	if (browserWidth <= 800){
		changeLayout("800");
	}
	//cambiar 1024*768 CSS
	if ((browserWidth >= 806) && (browserWidth <= 1025)){
		changeLayout("1024");
	}
	//cambiar   mas 1024 Wider CSS Rules
	if ((browserWidth >= 1026)&& (browserWidth <= 3000)){
		changeLayout("mas1024");
	}
}



function changeLayout(description){
   var i, a;
   for (i=0; (a = document.getElementsByTagName("link")[i]); i++) {
	   if (a.getAttribute("title") == description) { 
		   a.disabled = false;
		} else if (a.getAttribute("title") != "default") { 
		    a.disabled = true;
		}
   }
}

function addEvent( obj, type, fn ) { 
	   if (obj.addEventListener) { 
	      obj.addEventListener( type, fn, false );
	   }
	   else if (obj.attachEvent){ 
	      obj["e"+type+fn] = fn; 
	      obj[type+fn] = function(){ obj["e"+type+fn]( window.event ); } 
	      obj.attachEvent( "on"+type, obj[type+fn] ); 
	   } 
	} 
	
	addEvent(window, 'load', dynamicLayout);
	addEvent(window, 'resize', dynamicLayout);
