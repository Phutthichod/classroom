<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
<script>
let a = "";
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		a = JSON.parse(this.responseText);
		console.log(a);
    //  document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "page2.php", true);
  xhttp.send();
}
</script>
</body>
</html>