var image = new Array("images/arduino-web-server2.jpg", "images/07-website-design.jpg", "images/web-design-sthelens.jpg");
var links = new Array ("http://www.youtube.com/watch?v=nALHDTacSv4","http://webdesign4.georgianc.on.ca/~200246735/assign3/index.html", "http://webdesign4.georgianc.on.ca/~200246735/phone3/index.html");
var imgNumber=1;
var numberOfImg = image.length;

function previousImage(){
  if(imgNumber > 1){
	imgNumber--;
  }
  else{
	imgNumber = numberOfImg
  }
  document.getElementById('image-slider').src = image[imgNumber-1];
  document.getElementById('slideUrlId').href = links[imgNumber-1];
}

function nextImage(){
  if(imgNumber < numberOfImg){
	imgNumber++;
  }
  else{
	imgNumber = 1;
  }
  document.getElementById('image-slider').src = image[imgNumber-1];
  document.getElementById('slideUrlId').href = links[imgNumber-1];
}

/*
if(document.images){                                       
   var image1 = new Image()                                        
   image1.src = "images/arduino-web-server2.jpg"
   var image2 = new Image()
   image2.src = "images/07-website-design.jpg"
   var image3 = new Image()
   image3.src = "images/web-design-sthelens.jpg"
}
*/
function initializeFeatured(){
	document.getElementById('image-slider').src = image[imgNumber-1];
	document.getElementById('slideUrlId').href = links[imgNumber-1];
}
