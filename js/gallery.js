/**
 * Created by MW Toolbox on 30/06/2017.
 */


    xmlHttpCall();




function xmlHttpCall(){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/gallery", true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(specific_product.responseText);
            var gallery_img=[];
            for (var i = 0; i < res.length; i++) {
               // gallerysrc[i] = res[i].src_path;
           /* }

            for ( var i = 0; i <= gallerysrc.length; i++ ){

                var img    = new Image();
                img.onload = (function(value){
                    return function(){
                        ctx[value].drawImage(gallerysrc[value], 0, 0);
                    }
                })(i);*/



                var divFigure = document.createElement("figure");
                divFigure.className="col-md-3";


                var herfWindow=document.createElement("a");
                herfWindow.setAttribute("href",res[i].src_path);
                herfWindow.setAttribute("data-size","1600x1067");



                var imagesrc=document.createElement("img");
                imagesrc.setAttribute("id","img_"+i);
                //imagesrc.setAttribute("class","b-lazy");
                //imagesrc.setAttribute("src","data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
                imagesrc.setAttribute("src","");
                imagesrc.setAttribute("alt","alt-text");
                gallery_img.push(res[i].src_path);



                document.getElementById("figure_container").appendChild(divFigure);
                divFigure.appendChild(herfWindow);
                herfWindow.appendChild(imagesrc);

                // IMPORTANT - Assign src last for IE
               // img.src    = 'images/'+gallerysrc[i];
            }

            for (var j=0; j< gallery_img.length; j++){

                    var image_preload = new Image();

                    //var image_preload=document.getElementById("img_"+j);
                    ///image_preload.src=gallery_img[j];
                    image_preload.onload = function () {
                        document.getElementById("img_" + j).src = gallery_img[j];
                    }
                };

               // image_preload.src="../img/loading.gif";
               // document.getElementById("img_"+j).src=gallery_img[j];



               /* var gallerysrc = res[i];
                var divFigure = document.createElement("figure");
                divFigure.className="col-md-4";


                var herfWindow=document.createElement("a");
                herfWindow.setAttribute("href",gallerysrc.src_path);
                herfWindow.setAttribute("data-size","1600x1067");



                var imagesrc=document.createElement("img");
                //imagesrc.setAttribute("class","b-lazy");
                //imagesrc.setAttribute("src","data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
                imagesrc.setAttribute("src",gallerysrc.src_path);
                imagesrc.setAttribute("alt","alt-text");

                document.getElementById("figure_container").appendChild(divFigure);
                divFigure.appendChild(herfWindow);
                herfWindow.appendChild(imagesrc);*/






        }

    };

}