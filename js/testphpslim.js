/**
 * Created by MW Toolbox on 12/05/2017.
 */







var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var res = JSON.parse(xmlhttp.responseText);
        for (var i = 0; i < res.length; i++) {
            var counter = res[i];
            console.log(counter.counter_name);
        }
        document.write(counter.category_name+"   "+counter.category_id);
    }
};
xmlhttp.open('GET', "http://localhost/mwtool/testphpapp/myphp/products/1", true);
xmlhttp.send();