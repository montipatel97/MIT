<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a lecturer:</option>
<option value="1">Prof. Hanupat Pawar</option>
<option value="2">Prof. Vikas Kulal</option>
<option value="3">Prof. Jayashri Nalkar</option>
<option value="4">Prof. Mohan Kulkarni</option>
<option value="5">Prof. Y.K. Subbarao</option>
<option value="6">Prof. Rahul Kadu</option>
</select>
</form>
<br>
<form action="welcome.php" method="post">
Ask a question <textarea name="comment" rows="6" cols="40"></textarea>
<input type="submit">
</form>
    <!--<input type="button"value="Ask a question"onclick="display();">or-->
    <button type="button"onclick="display()">Ask a question</button>
    </form>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }
        
        th {text-align: left;}
        </style>
        </body>
     
</html>