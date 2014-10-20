window.onload = setfont;

function setfont(){ document.getElementById('content').style.fontSize=loadCookie('fsize');}

function changefsize(ritu){
	saveCookie('fsize',ritu+'%',10);
	document.getElementById('content').style.fontSize = ritu+'%';
}

function saveCookie( vn, v, dy ){
	if(navigator.cookieEnabled)
	document.cookie = vn+ '='+ v+ ';expires='+ new Date((new Date()).getTime()+dy*24*3600000).toGMTString();
}

function loadCookie(vn){
	var rt='';
	if( vn && document.cookie ) {
		var v = document.cookie.split(';');
		for(i in v){ 
			v[i].match(/^\s*(.*)=(.*)$/);
			if( RegExp.$1 == vn) {
				rt = RegExp.$2; break;
			}
		}
	}
	return rt;
}
