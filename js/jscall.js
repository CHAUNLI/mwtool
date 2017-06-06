/**
 * Created by MW Toolbox on 19/05/2017.
 */


var rowDrawer= rowDrawerCreate();
var column = columnCreate();
var card = cardCreate();
var cardImage = cardImageCreate();
var img = imgCreate();

rowDrawer.appendChild(column);
column.appendChild(card);
card.appendChild(cardImage);
cardImage.appendChild(img);

function rowDrawerCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_drawer').appendChild(rowDiv);
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
    cardImageDiv.className='view hm-zoom';
    return cardImageDiv;
}

function imgCreate(){
    var img =document.createElement('img');

    img.onload;
    img.src='img/trailers.png';

    img.className='img-fluid';
    return img;
}



function clickEvent(series_id){
    window.open('product.html?vt='+series_id);
    this.id;
}

