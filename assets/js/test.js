$(document).ready(function(){
    $("#mySearchBar").on("keyup", function(){
        var value = $(this).val().toLowerCase();
        $("#myAwesomeTable tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});



var response = new Object();
$.ajax({
    type:"POST",  //Request type
    url: "http://localhost:8888/PHPAPI/awesomeApi.php", 
    dataType : 'json',
    context:response,
    success:function(data, status, xhr) {
        var string1 = JSON.stringify(data);
        response = $.parseJSON(string1);
        
        if (response.errorMessage) {
            alert(response.errorMessage);
        }
        if (response.favoriteErrorMessage) {
            alert(response.favoriteErrorMessage);
        } 
    } 
})