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
    specific_product.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products_names/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(specific_product.responseText);
            document.getElementById("test").innerHTML=res.product_series;
          /*  document.getElementById("price").innerHTML=res.start_price;
            document.getElementById("product_title").innerHTML=res.product_title;*/


        }
    };

}


function xmlCodeHttpCall(ids){
    var specific_product= new XMLHttpRequest();
    specific_product.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products_codes/"+ids, true);
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
    specific_product.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products_features/"+ids, true);
    specific_product.setRequestHeader("Accept", "application/json");
    specific_product.send();


    specific_product.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = JSON.parse(specific_product.responseText);
            var img_path=res.img_path;
            var frame_path=res.frame_sketch;
            if(img_path!=""){
                document.getElementById("target_img").src=img_path;
            }

            if(frame_path!=""){
                var divFrameCreate= document.createElement('div');
                divFrameCreate.className="embed-responsive embed-responsive-4by3";
                var frameWarehouse=document.createElement('iframe');
                frameWarehouse.className="embed-responsive-item";
                frameWarehouse.src=frame_path;
                frameWarehouse.setAttribute("frameborder","0");
                frameWarehouse.setAttribute("scrolling","no");
                frameWarehouse.setAttribute("marginheight","0");
                frameWarehouse.setAttribute("marginwidth","0");
                frameWarehouse.setAttribute("width","100%");
                frameWarehouse.setAttribute("height","326");
                frameWarehouse.setAttribute("allowfullscreen","");

                document.getElementById("model_sketch_3d").appendChild(divFrameCreate);
                divFrameCreate.appendChild(frameWarehouse);
            }
            var f1=res.features1;
            var f2=res.features2;
            var f3=res.features3;
            var f4=res.features4;
            var f5=res.features5;
            var f6=res.features6;

            if(f1!="") {
                listCreated(f1);
            }
            if(f2!="") {
                listCreated(f2);
            }
            if(f3!="") {
                listCreated(f3);
            }
            if(f4!="") {
                listCreated(f4);
            }
            if(f5!="") {
                listCreated(f5);
            }
            if(f6!="") {
                listCreated(f6);
            }


        }
    };

}

function listCreated(f){


    var rowCreate=document.createElement("div");
    rowCreate.className="row";
    var colCreate=document.createElement("div");
    colCreate.className="col-1 mr-1";
    var icoon=document.createElement("i");
    icoon.className="fa fa-check-circle fa-lg light-green-text";
    icoon.setAttribute("aria-hidden","true");
    var contentCreate=document.createElement("div");
    contentCreate.className="col-10";
    var pCreate=document.createElement("p");
   // pCreate.className="grey-text";
    pCreate.innerHTML=f;

    document.getElementById("test_list").appendChild(rowCreate);
    rowCreate.appendChild(colCreate);
    colCreate.appendChild(icoon);
    rowCreate.appendChild(contentCreate);
    contentCreate.appendChild(pCreate);

   /*var icoon=document.createElement("i");
    icoon.className="fa fa-plus green-text";
    icoon.setAttribute("aria-hidden","true");
    var li=document.createElement("li");

    document.getElementById("test_list").appendChild(li);
    li.appendChild(icoon);
    icoon.innerHTML=f;*/



}