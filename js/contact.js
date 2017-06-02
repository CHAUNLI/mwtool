/**
 * Created by MW Toolbox on 10/05/2017.
 */
function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: {lat: -28.024, lng: 140.887}
    });

    // Create an array of alphabetical characters used to label the markers.


    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    var markers = locations.map(function(location,i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i]

        });
    });






    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
    {lat: -27.561367, lng: 153.026849},
    {lat: -27.558921, lng: 153.021109},
    {lat:-27.433083,lng:153.042839},
    {lat:-27.370172,lng:153.063247},
    {lat:-27.930555,lng:153.378857},
    {lat:-19.274277,lng:146.767386},
    {lat:-23.345288,lng:150.521081}
];

var labels =["Factory Center","Coopers Plains", "Albion", "Virginia","Gold Coast", "Townsville", "Rockhampton"]

