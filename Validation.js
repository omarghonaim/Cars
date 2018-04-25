
	var user = document.getElementById("input1"),
		pass = document.getElementById("input2"),
	    log = document.getElementById("login"),
	    ok ,
	    p1 = document.getElementById("p1"),
	    p2 = document.getElementById("p2");

	user.onkeyup = function(e){
		if(user.value == "" || user.value == null){
			p1.innerHTML = "please , enter a valid userName";
			ok = false;
		}
		else{
			p1.innerHTML = "";
			ok = true;
		}
	};
	pass.onkeyup = function(e){
		if(pass.value == "" || pass.value == null){
			p2.innerHTML = "please , enter a valid password";
			ok = false;
		}
		else{
			p2.innerHTML = "";
			ok = true;
		}
	};

login.onclick = function(e){
		if(!ok){
			e.preventDefault();
		}	
};
