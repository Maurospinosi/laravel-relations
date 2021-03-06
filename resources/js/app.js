require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

$(function(){

    $.ajax({
        'url':"http://localhost:8000/api/comics",
        'method' : 'GET',
        'success' : function(data){
            return renderComics(data);
        },
        'error' : function(err){
            alert('Errore');
        },
    });

});
    
var source = $('#comic-template').html();
var template = Handlebars.compile(source);

function renderComics(data){
    for (var i = 0 ; i<data.length; i++){

        var context = { 
            'title' : data[i].title, 
            'cover' : data[i].cover,
            'id' : data[i].id,
        };

        var html = template(context);
        $('.ajax_list').append(html);
    }
}
