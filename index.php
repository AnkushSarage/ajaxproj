<!DOCTYPE html>
<html>
<head>
<style>
    <script>
    function HideButtons () { $('volume1, volume2, volume3').hide(); }
    </script>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

</head>
<body>

<h1>News Letters</h1>
<form  method="post" >
 <input type="button" value="VOLUME" class="button" onclick="myFunction();"> &nbsp;	&nbsp; &nbsp;	&nbsp;
 <input type="button" value="ISSUE" class="button" id=issue  onclick="HideButtons();"><br> <br>

<div id="myDIV" hidden="hidden">
<input type="button" value="VOLUME_1" id="volume1" class="button">
<input type="button" value="VOLUME_2" id="volume2" class="button">
<input type="button" value="VOLUME_3" id="volume3" class="button">
</div>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {    
        x.style.display = "none";
    }
}
</script>

</form>

</body>
</html>


