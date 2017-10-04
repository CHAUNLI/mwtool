/**
 * Created by MW Toolbox on 28/06/2017.
 */
function getCurrentUrl(){
    var url= window.location.href;
    return url;
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}


var id=getParameterByName("trailer", getCurrentUrl());
if(id){
    xmlHttpCall(id);

}


function xmlHttpCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/custom_toolboxes_index/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(specific_product.responseText);

            for (var i = 0; i < res.length; i++) {
                var countersUnder = res[i];
                if(countersUnder.length2=="1"){
                    document.getElementById("custom_length2_div").style.display="none";
                }
                if(countersUnder.width2=="1"){
                    document.getElementById("custom_width2_div").style.display="none";
                }
                if(countersUnder.height2=="1"){
                    document.getElementById("custom_height2_div").style.display="none";
                }
                if(countersUnder.para_r=="1"){
                    document.getElementById("custom_widthr_div").style.display="none";
                }
                document.getElementById("custom_title").innerHTML = "Customize Your " + countersUnder.name;
                document.getElementById("frame_model").src = countersUnder.sketch_src;
                document.getElementById("mobile_custtoolbox").src = countersUnder.sketch_model;
                document.getElementById("cusom_length").src = countersUnder.length_img;
                document.getElementById("cusom_width").src = countersUnder.width_img;
                document.getElementById("cusom_height").src = countersUnder.height_img;

            }
        }

    };

}