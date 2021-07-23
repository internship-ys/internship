	
response.setContentType("application/x-json; charset=UTF-8");

function filter(){

    const params = {
        zipcode : $("#zipcode").val(),
        sido : $("#sido").val(),
        gugun : $("#gugun").val(),
        dong: $("#dong").val(),
        bunji : $("#bunji").val()
     }

    $.ajax({
        url:"data.php",
        type: "POST",
        dataType: "JSON",
        ccontentType: "application/json; charset=utf-8",
        data:JSON.stringify(params),
        success: function(data){
            var data = JSON.parse(result);
            echo("success");
        }
    
    });
}