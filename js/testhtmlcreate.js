/**
 * Created by MW Toolbox on 13/05/2017.
 */
(function(){
    var ul = document.createElement('ul');
    ul.setAttribute('class','navbar-nav mr-auto');

    var t, tt;
    productList = ['Electronics Watch','House wear Items','Kids wear','Women Fashion'];

    document.getElementById('navbarNav').appendChild(ul);
    productList.forEach(renderProductList);

    function renderProductList(element, index, arr) {
        var li = document.createElement('li');
        li.setAttribute('class','nav-item');

        var a=document.createElement('a');
        a.setAttribute('class','nav-link waves-effect waves-light');

        li.appendChild(a);
        ul.appendChild(li);

        t = document.createTextNode(element);

        a.innerHTML=a.innerHTML + element;
    }
})();