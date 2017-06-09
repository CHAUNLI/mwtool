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
    xmlHttpFeaturesCall(id);
    xmlCodeHttpCall(id);
}


function xmlHttpCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://10.0.0.30/mwtool/testphpapp/myphp/products_name/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = specific_product.responseText;
            document.getElementById("test").innerHTML=res;


        }
    };

}


function xmlCodeHttpCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://10.0.0.30/mwtool/testphpapp/myphp/products_codes/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res =JSON.parse(specific_product.responseText);
            for (var i = 0; i < res.length; i++){
                var single_code=res[i];
                var tr=trCreate();
                window.onload= productCodeInput(tr,single_code.product_code,single_code.length,
                                           single_code.width,single_code.height,single_code.thickness,
                                           single_code.weight,single_code.price);
            }


        }
    };

}

function productCodeInput(tr,product_code,length,width,height,thickness,weight,price){

    var tdCode=tdCreate(product_code);
    var tdLen=tdCreate(length);
    var tdWid=tdCreate(width);
    var tdHei=tdCreate(height);
    var tdLock=tdCreate(thickness);
    var tdWei=tdCreate(weight);
    var tdPrice=tdCreate(price);

    tr.appendChild(tdCode);
    tr.appendChild(tdLen);
    tr.appendChild(tdWid);
    tr.appendChild(tdHei);
    tr.appendChild(tdLock);
    tr.appendChild(tdWei);
    tr.appendChild(tdPrice);



}

function tdCreate(dataTable){
    var tdCreate =document.createElement("td");
    tdCreate.innerHTML=dataTable;
    return tdCreate;
}


function trCreate(){
    var trCreate =document.createElement("tr");
    var tbody =document.getElementById('pro_code').appendChild(trCreate);

    return tbody;
}

function xmlHttpFeaturesCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://10.0.0.30/mwtool/testphpapp/myphp/products_features/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(specific_product.responseText);
            var f1=res.features1;
            var f2=res.features2;
            var f3=res.features3;
            var f4=res.features4;
            var f5=res.features5;
            var f6=res.features6;

            if(f1!=null) {
                listCreated(f1);
            }
            if(f2!=null) {
                listCreated(f2);
            }
            if(f3!=null) {
                listCreated(f3);
            }
            if(f4!=null) {
                listCreated(f4);
            }
            if(f5!=null) {
                listCreated(f5);
            }
            if(f6!=null) {
                listCreated(f6);
            }


        }
    };

}

function listCreated(f){
    var li=document.createElement("li");
    li.innerHTML=f;
    document.getElementById("test_list").appendChild(li);

}