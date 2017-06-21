/**
 * Created by krzysztofgrys on 6/19/17.
 */
var apiUrl = "http://localhost:8800/api/v1/book"

$(document).ready(function(){
    $('#myForm').one('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: apiUrl,
            data: jQuery.param({title: $('#title').val(), author:$('#author').val()}),
            success: function(data)
            {
                location.reload();
            }
        });

    });

});
$( "#deleteBook[id]" ).click(function() {
    alert( "Handler for .click() called." );
});

function delete_book() {

    if (confirm('Jesteś pewny?')) {
        $.ajax({
            type: "DELETE",
            url: apiUrl+"/"+event.srcElement.id,
            success: function(data)
            {
                location.reload();
            }
        });
    }

}