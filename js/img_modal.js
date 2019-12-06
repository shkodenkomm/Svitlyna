var modal = document.getElementById("myModal");
console.log("img_moda.js STRT");

var imgsList = document.querySelectorAll(".row_gal.desctop img");
var srcList=[];
for (var i = 0; i < imgsList.length; i++) {
    tmpS = imgsList[i].getAttribute("src");
    iSlash = tmpS.lastIndexOf("/")+1;
    srcList.push(tmpS.substr(iSlash));
}
srcList.sort(function(_a, _b){
    iA = _a.indexOf("_");
    if(iA == -1) iA = _a.indexOf(".");

    iB = _b.indexOf("_");
    if(iB == -1) iB = _b.indexOf(".");

    var a, b = 0;

    a = _a.substr(0,iA) ;
    b = _b.substr(0,iB) ;

    return a - b
});
console.log(srcList);





























function previewClick(_src){

    var img = document.querySelector("img[src='"+_src+"']")


    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";

    var fullSrc = img.src.replace("preview/","").replace("_hq","");

    fbq('track', 'ViewContent', { content_ids:  fullSrc.replace("https://svitlyna.in.ua/imgs","") });

    modalImg.src = fullSrc;



    captionText.innerHTML = img.alt;


    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
}



document.querySelector("section.root_img").
addEventListener("click",
    function(event){
        //console.log("clicked "+event.target);
        if (event.target.tagName=="IMG") {
            previewClick(event.target.getAttribute("src"))
        }
    }, false
)
//}
