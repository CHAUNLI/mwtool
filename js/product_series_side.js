/**
 * Created by MW Toolbox on 19/05/2017.
 */
var xmlhttpside = new XMLHttpRequest();
xmlhttpside.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/series_side", true);
xmlhttpside.setRequestHeader("Accept", "application/json");
xmlhttpside.send();

xmlhttpside.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var ress = JSON.parse(xmlhttpside.responseText);
        var row= rowCreate();
        for (var i = 0; i < ress.length; i++) {
            var counters = ress[i];
            window.onload= productCardCreate(row,counters.product_series,counters.product_title,counters.start_price,counters.product_series_id,counters.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};

/*function productCardCreate(row,htitle,series,price,series_id) {
    // var secCreate = sectionCreate();
    // var row = rowCreate();
    var column = columnCreate();
    var card = cardCreate();
    var cardImage = cardImageCreate();
    var img = imgCreate();
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


};*/


function rowCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_sec1123').appendChild(rowDiv);
    return rowsec;
}


/*
function columnCreate() {
    var columnDiv = document.createElement('div');
    columnDiv.className = "col-lg-4 col-md-12 mb-r";

    return columnDiv;
}

function cardCreate() {
    var cardDiv = document.createElement('div');
    cardDiv.className = "card card-cascade wider";
    return cardDiv;
}

function cardImageCreate(){
    var cardImageDiv = document.createElement('div');
    cardImageDiv.className='view hm-zoom';
    return cardImageDiv;
}

function imgCreate(){
    var img =document.createElement('img');
    img.onload;
    img.src='img/trailers.png';
    img.onclick= 'clickEvent()';
    img.className='img-fluid';
    return img;
}

function muskCreate(){
    var a=document.createElement('a');
    var mask= document.createElement('div');
    mask.className='mask waves-effect waves-light';
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
    pcontent.innerHTML='Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.';
    return pcontent;
}

function cardFooterCreate(price){
    var divfooter =document.createElement('div');
    divfooter.className='card-footer';
    var span =document.createElement('span');
    span.className='left';
    span.innerHTML=price;
    divfooter.appendChild(span);
    return divfooter;

}*/
