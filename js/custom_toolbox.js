/**
 * Created by MW Toolbox on 17/06/2017.
 */
/**
 * Created by MW Toolbox on 12/06/2017.
 */
var xmlCusCanopy = new XMLHttpRequest();
xmlCusCanopy.open('GET', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/custom_toolbox", true);

xmlCusCanopy.send();

xmlCusCanopy.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var cusCanopy = JSON.parse(xmlCusCanopy.responseText);

        for (var i = 0; i < cusCanopy.length; i++) {
            var cusContent = cusCanopy[i];
            window.onload = indexCreate(cusContent.name,cusContent.sketch_model,cusContent.index_id);
            // window.onload= productCardCreate(rowDrawer,countersUnder.product_series,countersUnder.product_title,countersUnder.start_price, countersUnder.product_series_id);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }

    }
};



function indexCreate(title,img_model,index_id){
    var coll=colCreate();
    var card=cardCreate();
    var musk=muskCreate(img_model,index_id);
    var cardBlock=cardBlocks(title);


    coll.appendChild(card);
    card.appendChild(musk);
    card.appendChild(cardBlock);
};


function colCreate(){
    var divCol= document.createElement('div');
    divCol.className = "col-lg-4 col-md-12 mb-r";
    var col=document.getElementById('custom_toolbox').appendChild(divCol);
    return col;
};

function cardCreate(){
    var card=document.createElement('div');
    card.className="card";
    return card;
};

function muskCreate(img_model,index_id){
    var musk = document.createElement('div');
    musk.className="view overlay hm-white-slight z-depth-0";
    var image = document.createElement('img');
    image.setAttribute("src",img_model);
    image.className="img-fluid";
    var muskLight=document.createElement('a');
    /*muskLight.setAttribute("href","custom_page_canopy.html");*/
    var muskDiv=document.createElement('div');
    muskDiv.className="mask waves-effect waves-light";
    muskDiv.id=index_id;
    muskDiv.setAttribute('onclick','clickCustomCanopyEvent('+index_id+')');
    musk.appendChild(image);
    musk.appendChild(muskLight);
    muskLight.appendChild(muskDiv);
    return musk;
};

function cardBlocks(title){
    var cardBlo= document.createElement('div');
    cardBlo.className="card-block";

    var activator= document.createElement('a');
    activator.className="activator";
   // var icon= document.createElement('i')
   // icon.className="fa fa-share-alt";

    var cardTitle= document.createElement('h4');
    cardTitle.className="card-title";
    cardTitle.innerHTML=title;


   // var hr= document.createElement('hr');

   // var cardText=document.createElement('p');

    cardBlo.appendChild(activator);
   // activator.appendChild(icon);
    cardBlo.appendChild(cardTitle);
   // cardBlo.appendChild(hr);
    //cardBlo.appendChild(cardText);

    return cardBlo;

};