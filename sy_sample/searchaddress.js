function filter(send){

  var param = "key="+send;
  $.ajax({
      url:"searchaddress.php",
      type: "POST",
      dataType: "JSON",
      data: param,
      success: function(data){
           createadd(data);
      },

  });

  }

  function createadd(data){
  console.log(data);
  const element = document.getElementById('result');
  element.innerText = '';

  var txt="";

  for (var i = 0; i < data.length; i++) {
  addObj = data[i];
      ZIPCODE = addObj['ZIPCODE'];
      SIDO = addObj['SIDO'];
      GUGUN = addObj['GUGUN'];
      DONG = addObj['DONG'];
      BUNJI = addObj['BUNJI'];
      RI = addObj['RI'];
      txt=ZIPCODE+" "+SIDO+" "+GUGUN+" "+DONG+" "+BUNJI+" "+RI+" ";
     //txt+=data[i].ZIPCODE+"  "+data[i].SIDO+"  "+data[i].GUGUN+"  "+data[i].DONG+"  "+data[i].BUNJI+"  "+data[i].RI+"<br>";

  const newDiv = document.createElement('div');
  element.style.fontWeight="bolder";
  newDiv.style.border= "0.5px solid lightgrey";
  newDiv.style.padding= "7px";
  newDiv.style.cursor="pointer";
  newDiv.onclick=function(){ test(this); };
  newDiv.onmouseover=function(){ this.style.backgroundColor= "rgb(255, 248, 183)"; };
  newDiv.onmouseout=function(){ this.style.backgroundColor= ""; };
  const newText = document.createTextNode(txt);
  newDiv.appendChild(newText);
  element.appendChild(newDiv);

  newDiv.setAttribute('address',txt);
  }

  }

  function test(obj){

  document.getElementById('add').innerHTML=obj.getAttribute( 'address' );
  const element = document.getElementById('result');
  element.innerText = '';
  document.getElementById('s').value = null;

  }