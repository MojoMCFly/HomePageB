require('font-awesome/css/font-awesome.css');
require('../css/app.css');

$(document).ready(function(){
    $("#erklaerung").click(function(){
        $("#erklaerung-text").slideToggle();
    });
    $("#haftung").click(function(){
        $("#haftung-text").slideToggle();
    });
    $("#allgemein").click(function(){
        $("#allgemein-text").slideToggle();
    });
});
