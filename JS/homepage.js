var i = 0;
	var images = [];
	var time = 3000;

	images[0] = "images/newhm3.jpg";
	images[1] = "images/win4.jpg";
	images[2]= "images/newhm1.jpg";
	


	function changeImg() 
	{
		document.slide.src = images[i]

		if(i < images.length - 1){
			i++;
		}	
		else{
			i=0;
		}

		setTimeout("changeImg()",time);
	}

	window.onload = changeImg;