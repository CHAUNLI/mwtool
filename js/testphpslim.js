
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var res = JSON.parse(xmlhttp.responseText);
        var row = rowCreate();
        for (var i = 0; i < res.length; i++) {
            var counter = res[i];
           window.onload= productCardCreate(row,counter.product_series,counter.product_title,counter.start_price);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};
xmlhttp.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/series", true);
xmlhttp.setRequestHeader("Accept", "application/json");
xmlhttp.send();

function creationRow (lenths){

    for (irow = 0; irow <lenths/3+1; irow++){

    }
}


function productCardCreate(row,htitle,series,price) {
   // var secCreate = sectionCreate();
   // var row = rowCreate();
    var column = columnCreate();
    var card = cardCreate();
    var cardImage = cardImageCreate();
    var img = imgCreate();
    var musk = muskCreate();
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

function sectionCreate() {
    var sectionDiv = document.createElement('div');
    sectionDiv.id='sec';
    sectionDiv.className='section';
    document.body.appendChild(sectionDiv);
    return sectionDiv;
}

function rowCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_sec').appendChild(rowDiv);
    return rowsec;
}


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
    cardImageDiv.className='view overlay hm-white-slight';
    return cardImageDiv;
}

function imgCreate(){
    var img =document.createElement('img');
    img.onload;
    img.src='img/trailers.png';
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

}
/*function hello() {
    var iDiv = document.createElement('div');
    iDiv.id = 'block';
    iDiv.className = 'card';
    document.body.appendChild(iDiv);

    var iiDiv = document.createElement('div');
    iiDiv.className = 'view overlay hm-white-slight';

    var s = document.getElementById('block');
    s.appendChild(iiDiv);

    var img = document.createElement('img');
    img.className='img-fluid';
    img.onload;
    img.src='img/truck.jpg';
    iiDiv.appendChild(img);


    var a = document.createElement('a');
    a.href='#';
    var divMask= document.createElement('div');
    divMask.className='mask waves-effect waves-light';
    a.appendChild(divMask);

    iiDiv.appendChild(a);


    var divCard= document.createElement('div');
    divMask.setAttribute('class','card-block');
    iDiv.appendChild(divCard);
    s.appendChild(iDiv)

    var h4 =document.createElement('h4');
    h4.setAttribute('class','card-title');
    h4.innerHTML=" card title test ";
    divCard.appendChild(h4);
    var p =document.createElement('p');
    p.setAttribute('class','card-text');
    p.innerHTML="description";
    divCard.appendChild(p);
    var button=document.createElement('a');
    button.setAttribute('class','btn btn-primary');
    button.setAttribute('href','#');
    button.innerHTML="button";
    divCard.appendChild(button);
};*/





