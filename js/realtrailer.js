/**
 * Created by MW Toolbox on 13/06/2017.
 */

var xmlhttpenclosed = new XMLHttpRequest();
xmlhttpenclosed.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/enclosed", true);
xmlhttpenclosed.setRequestHeader("Accept", "application/json");
xmlhttpenclosed.send();

xmlhttpenclosed.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var ressDrawer = JSON.parse(xmlhttpenclosed.responseText);
        var rowDrawer= rowDrawerCreate();
        for (var i = 0; i < ressDrawer.length; i++) {
            var countersUnder = ressDrawer[i];
            window.onload= productCardCreate(rowDrawer,countersUnder.product_series,countersUnder.product_title,countersUnder.start_price, countersUnder.product_series_id,countersUnder.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};

var xmlhttpopen = new XMLHttpRequest();
xmlhttpopen.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/open", true);
xmlhttpopen.setRequestHeader("Accept", "application/json");
xmlhttpopen.send();

xmlhttpopen.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var ressDrawer = JSON.parse(xmlhttpopen.responseText);
        var rowDrawer= rowJackCreate();
        for (var i = 0; i < ressDrawer.length; i++) {
            var countersUnder = ressDrawer[i];
            window.onload= productCardCreate(rowDrawer,countersUnder.product_series,countersUnder.product_title,countersUnder.start_price, countersUnder.product_series_id,countersUnder.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};


var xmlhttpcover = new XMLHttpRequest();
xmlhttpcover.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/cover", true);
xmlhttpcover.setRequestHeader("Accept", "application/json");
xmlhttpcover.send();

xmlhttpcover.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var ressDrawer = JSON.parse(xmlhttpcover.responseText);
        var rowDrawer= rowFloorCreate();
        for (var i = 0; i < ressDrawer.length; i++) {
            var countersUnder = ressDrawer[i];
            window.onload= productCardCreate(rowDrawer,countersUnder.product_series,countersUnder.product_title,countersUnder.start_price, countersUnder.product_series_id,countersUnder.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};



function productCardCreate(row,htitle,series,price,series_id,image) {
    // var secCreate = sectionCreate();
    // var row = rowCreate();
    var column = columnCreate();
    var card = cardCreate();
    var cardImage = cardImageCreate();
    var img = imgCreate(image);
    var musk = muskCreate(series_id);
    var cardContent1=cardContent();
    var htag= hTitleCreate(htitle);
    var aTag= aCreate(series);
    var pTag= pCreate();
    var footer = cardFooterCreate(price);

    //  secCreate.appendChild(row);


    row.appendChild(column);
    column.appendChild(card);
    card.appendChild(cardImage);
    cardImage.appendChild(img);
    cardImage.appendChild(musk);
    card.appendChild(cardContent1);
    cardContent1.appendChild(aTag);
    cardContent1.appendChild(htag);
    cardContent1.appendChild(pTag);
    cardContent1.appendChild(footer);


};


function rowDrawerCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('enclosed').appendChild(rowDiv);
    return rowsec;
}

function rowJackCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('open').appendChild(rowDiv);
    return rowsec;
}
function rowFloorCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('cover').appendChild(rowDiv);
    return rowsec;
}



function columnCreate() {
    var columnDiv = document.createElement('div');
    columnDiv.className = "col-lg-4 col-md-12 mb-r";

    return columnDiv;
}

function cardCreate() {
    var cardDiv = document.createElement('div');
    cardDiv.className = "card";
    return cardDiv;
}

function cardImageCreate(){
    var cardImageDiv = document.createElement('div');
    cardImageDiv.className='view overlay hm-zoom z-depth-0';
    return cardImageDiv;
}

function imgCreate(image){
    var img =document.createElement('img');

    if(image==""){
        image='img/trailers.png';
    }

    img.onload;
    img.src=image;
    img.setAttribute("alt","Card image cap");
    img.className='img-fluid';
    return img;
}



function muskCreate(series_id){
    var a=document.createElement('a');
    var mask= document.createElement('div');
    mask.className='mask waves-effect waves-light';
    mask.id=series_id;
    mask.setAttribute('onclick','clickEvent('+series_id+')');
    return a.appendChild(mask);
}

function cardContent () {
    var cardContentDiv = document .createElement('div');
    cardContentDiv.className='card-block text-center';
    return cardContentDiv;

}

function hTitleCreate(title){
    var h4=document.createElement('h4');
    h4.className='card-title';
    var strong=document.createElement('strong');
    strong.innerHTML=title;
    h4.appendChild(strong);

    return h4;

}

function aCreate(series){
    var ha=document.createElement('a');
    ha.className='text-muted';
    var h5 = document.createElement('h5');
    h5.innerHTML=series;
    ha.appendChild(h5);
    return ha;
}
function pCreate(){
    var pcontent =document.createElement('p');
    pcontent.className='card-text';
   /* pcontent.innerHTML='Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.';
   */ return pcontent;
}

function cardFooterCreate(price){
    var divfooter =document.createElement('div');
    divfooter.className='card-footer';
    var span =document.createElement('span');
    span.className='left';
    span.innerHTML=price;
    divfooter.appendChild(span);
    return divfooter;

}