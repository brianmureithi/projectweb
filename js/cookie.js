//function to set cookie

function setCookie(cname,cvalue, exdays){

		var d= new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			
}
//function to get cookie
function getCookie(cname){
		var name = cname + "=";
		var decodedCookie = decodeURIComponet(document.cookie);
		var ca= decodedCookie.split(';');
		
				for(var i= 0; i<ca.length; i++) {
					var c = ca[i];
					while (c.chartAt(0) ==' '){
					
					c=c.substring(1);
					
					}
					if (c.indexOf(name)==0){
					return c.substring(name.length,c.length);
					}
				}
				return "";
}

function checkCookie(){
		var username = getCookie("username")
			if (username !=""){
			alert("welcome again" + username);
			}
				else{
				username = prompt("please enter your name:","");
						
						if (username !="" && username !=null) {
						setCookie("username", username,365);
						}
				
				}
		
}








