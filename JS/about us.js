var i = 0;
	var images = [];
	var time = 4000;

	images[0] = "./images/ceremony new.jpg";
	images[1] = "./images/ceremony2.jpg";
	images[2]= "./images/ceremony3.webp";



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

	window.onload = changeImg;