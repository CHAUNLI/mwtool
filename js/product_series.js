/**
 * Created by MW Toolbox on 18/05/2017.
 */


var xmlhttp1 = new XMLHttpRequest();
var trayhttp = new XMLHttpRequest();
var powerhttp = new XMLHttpRequest();

xmlhttp1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var res = JSON.parse(xmlhttp1.responseText);

        var row2= row2Create();
        for (var i = 0; i < res.length; i++) {
            var counter = res[i];
            window.onload= productCardCreate(row2,counter.product_series,counter.product_title,counter.start_price,counter.product_series_id,counter.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }
        document.getElementById("load").style.display = "none";
        document.getElementById("unique_sec").style.display = "block";

    }
};


trayhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var res = JSON.parse(trayhttp.responseText);

        var rowTray= rowTrayCreate();
        for (var i = 0; i < res.length; i++) {
            var counter = res[i];
            window.onload= productCardCreate(rowTray,counter.product_series,counter.product_title,counter.start_price,counter.product_series_id,counter.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }
        document.getElementById("load1").style.display = "none";
        document.getElementById("unique_tray").style.display = "block";
    }
};


powerhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var res = JSON.parse(powerhttp.responseText);

        var rowPower= rowPowerCreate();
        for (var i = 0; i < res.length; i++) {
            var counter = res[i];
            window.onload= productCardCreate(rowPower,counter.product_series,counter.product_title,counter.start_price,counter.product_series_id,counter.series_image);
            //console.log(counter.product_series);
            //document.write(counter.product_title+" -> "+counter.product_series);

        }
        document.getElementById("load2").style.display = "none";
        document.getElementById("unique_power").style.display = "block";

    }
};

xmlhttp1.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/series_top", true);
xmlhttp1.setRequestHeader("Accept", "application/json");
xmlhttp1.send();

trayhttp.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/series_tray", true);
trayhttp.setRequestHeader("Accept", "application/json");
trayhttp.send();

powerhttp.open('POST', "http://www.mwtoolboxqld.com.au/testphpapp/myphp/products/series_coated", true);
powerhttp.setRequestHeader("Accept", "application/json");
powerhttp.send();

function row2Create() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_sec').appendChild(rowDiv);
    return rowsec;
}


function rowTrayCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_tray').appendChild(rowDiv);
    return rowsec;
}

function rowPowerCreate() {
    var rowDiv = document.createElement('div');
    rowDiv.className = "row";
    var rowsec = document.getElementById('unique_power').appendChild(rowDiv);
    return rowsec;
}