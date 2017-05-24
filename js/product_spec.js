/**
 * Created by MW Toolbox on 24/05/2017.
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

var id=getParameterByName("vt", getCurrentUrl());
if(id){
    xmlHttpCall(id);
}


function xmlHttpCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://localhost/mwtool/testphpapp/myphp/products_name/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = specific_product.responseText;
            document.getElementById("test").innerHTML=res;


        }
    };

}

