function myFunction(){
  var pr=(document.form1.province.value);
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
      
      switch(this.readyState) {
  case 1:
    alert("connessione server");
    break;
  case 2:
    alert("richiesta ricevuta");
    break;
  case 3:
    alert("elaborazione richiesta");
    break;
  case 4:
    if (this.status == 200) {  
      document.getElementById("paesi").innerHTML="<option>Paesi</option>" + xhttp.responseText;
    }
    break;
  };
  
  }
  
  
  xhttp.open("GET", "provaAjax.php?provincia="+pr, true);
  xhttp.send();
}