$(document).ready(function(){
    $("#mySearchBar").on("keyup", function(){
        var value = $(this).val().toLowerCase();
        $("#myAwesomeTable tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

function insertTable(data){
    
    var table = document.getElementById('tableBody')
    for (var i = 0; i < data.length; i++){
        var row =  ` <tr>
                    <td>${data[i].name}</td>
                    <td>${data[i].age}</td>
                    <td>${data[i].address}</td>                                        
                     </tr> `
 table.innerHTML += row
 console.log(data, "data works")
    }
  
}

var response = new Object();
var usersArr = [];

$.ajax({
    type:"POST",  //Request type
    url: "http://localhost:8888/PHPAPI/awesomeApi.php", 
    dataType : 'json',
    context:response,
    success:function(response, data) {
        usersArr = response.data[0].users;
        console.log(usersArr, "user array")
        insertTable(usersArr)
        
        var string1 = JSON.stringify(data);
        response = $.parseJSON(string1);
        if (response.errorMessage) {
            alert(resp.errorMessage);
        }
        if (response.favoriteErrorMessage) {
            alert(resp.favoriteErrorMessage);
        } 
    } 
})
