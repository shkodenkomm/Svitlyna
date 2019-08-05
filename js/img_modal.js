
//function previewClick(){
    console.log("img_moda.js STRT");	
    document.querySelector("section.root_img").
	    addEventListener("click", 
	        function(event){
	        console.log("clicked "+event.target);	
	        if (event.target.tagName=="IMG") {
	        
				var modal = document.getElementById("myModal");

				
				var img = document.querySelector("img[src='"+event.target.getAttribute("src")+"']")


				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
			   
			    modal.style.display = "block";

				var fullSrc = img.src.replace("preview/","").replace("_hq","");

				modalImg.src = fullSrc;



				captionText.innerHTML = img.alt;


				var span = document.getElementsByClassName("close")[0];

				span.onclick = function() { 
				  modal.style.display = "none";
				}
			}
        }, false
    )
//}