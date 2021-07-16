	
response.setContentType("application/x-json; charset=UTF-8");

function filter(){
    var url = "main.html";
    $.ajax({
        url:"data.php",
        type: "POST",
        dataType: "JSON",
        ccontentType: "application/json; charset=utf-8",
        data:{elem: elem},
        success: function(data){
            var data = JSON.parse(result);
            $("#zipcode").html(data.zipcode);
            $("#sido").html(data.sido);
            $("#gugun").html(data.gugun);
            $("#dong").html(data.dong);
            $("#bunji").html(data.bunji);
        }
    
    });
}