function filter(send){

    var param = "key="+send;
    
    $.ajax({
        url:"data.php",
        type: "POST",
        dataType: "JSON",
        //contentType: "application/json; charset=utf-8",
        data: param,
        success: function(data){            
        createadd(data);
        }
    });
    }
    
    function createadd(data){
      //console.log(data);
      const element = document.getElementById('result');
      element.innerText = '';
    
      var txt="";
    
      for (var i = 0; i < data.length; i++) {
    
        addObj = data[i];
        
        zipcode = addObj['zipcode'];
        sido = addObj['sido'];
        gugun = addObj['gugun'];
        dong = addObj['dong'];
        bunji = addObj['bunji'];
        bunji_2 = addObj['bunji_2'];
    
        txt= zipcode+" "+sido+" "+gugun+" "+dong+" "+bunji+" "+bunji_2+" ";
    
        //document.getElementById("result").innerHTML = txt;
    
        const newDiv = document.createElement('div');
    
        newDiv.setAttribute('address',txt);
    
        element.style.fontWeight="bolder";
        newDiv.style.border= "0.5px solid lightgrey";
        newDiv.style.padding= "7px";
        newDiv.style.cursor="pointer";
        newDiv.onmouseover=function(){ this.style.backgroundColor = "#CCCCCC"; };
        newDiv.onmouseout=function(){this.style.backgroundColor = "";};
        newDiv.onclick=function(){ test(this); };
        const newText = document.createTextNode(txt);
        newDiv.appendChild(newText);
        element.appendChild(newDiv);
    
      }
    }
    
    function test(obj){
    
      //console.log(obj.getAttribute('address'));
      document.getElementById("add").innerHTML = obj.getAttribute('address');
      
      const element = document.getElementById('result');
      element.innerText = '';

      document.getElementById('s').value = null;
    
    }
