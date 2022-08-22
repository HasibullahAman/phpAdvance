<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BasicCalculatorUsingAjax</title>
</head>
<body>
<!-- <div style="margin-left:40%;">
Num1: <input type="text" id="no1" >
    <br>
    <br>
    Num2: <input type="text" id="no2">
    <br>
    <br>
    <button type="button" onclick="calc('add')">+</button>
    <button type="button" onclick="calc('sub')">-</button>
    <button type="button" onclick="calc('mul')">*</button>
    <button type="button" onclick="calc('div')">/</button><br><br>
    Result: <span id="result"></span>
</div>
<script>
    function calc(reqType){ 
        var xhr = new XMLHttpRequest();
        var no1 = document.getElementById('no1').value;
        var no2 = document.getElementById('no2').value;
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('result').innerHTML = xhr.responseText;
            }
        }
        xhr.open("GET","source.php?req="+reqType+"&n1="+no1+"&n2="+no2,true);
        xhr.send();
    }    
</script> -->
No1: <input type="text" id="no1"></br>
No2: <input type="text" id="no2"></br>
<button type="button" onclick="calc('add')">+</button>
<button type="button" onclick="calc('sub')">-</button>
<button type="button" onclick="calc('mult')">*</button>
<button type="button" onclick="calc('div')">/</button></br></br>
Result: <span id="result"></span>
<script>
    function calc(reqType) {
        var xhr= new XMLHttpRequest();
        var no1= document.getElementById("no1").value;
        var no2= document.getElementById("no2").value;
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("result").innerHTML= xhr.responseText;
            }
            
        }
        xhr.open("GET","source.php?req="+reqType+"&n1="+no1+"&n2="+no2,true)
        xhr.send();

    }
</script>
</body> 
</html>