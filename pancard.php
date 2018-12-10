<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <input type="text" id="textPanNo" maxlength="10"onchange="return fun();">
        <span id="pan"></span>
    </body>
    <script>
        function fun() { 
  var Obj = document.getElementById("textPanNo");
        if (Obj.value != "") {
            ObjVal = Obj.value;
            var panPat = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
            if (ObjVal.search(panPat) == -1) {
                 document.getElementById("pan").style.color = "red";
              document.getElementById("pan").innerHTML="in valid";
                Obj.focus();
                return false;
            }
          else
            {
                 document.getElementById("pan").style.color = "green";
              document.getElementById("pan").innerHTML="valid";
              }
        }
  } 
    </script>
</html>
