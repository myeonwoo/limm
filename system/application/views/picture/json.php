<html>
<body>
<h2>JSON Object Creation in JavaScript</h2>

<p>
Name: <span id="jname"></span><br />  
Age: <span id="jage"></span><br /> 
Address: <span id="jstreet"></span><br /> 
Phone: <span id="jphone"></span><br /> 
</p>  

<script type="text/javascript">
    var JSONObject = {"name":"John Johnson",
                        "street":"Oslo West 16", 
                        "age":33,
                        "phone":"555 1234567"};

    var ob2 = [{"starttime":"9\/4\/2011 12:00 am","speed":0,"volume":"63"},{"starttime":"9\/4\/2011 1:00 am","speed":0,"volume":"65"},{"starttime":"9\/4\/2011 2:00 am","speed":0,"volume":"34"},{"starttime":"9\/4\/2011 3:00 am","speed":0,"volume":"29"},{"starttime":"9\/4\/2011 4:00 am","speed":0,"volume":"39"},{"starttime":"9\/4\/2011 5:00 am","speed":0,"volume":"40"},{"starttime":"9\/4\/2011 6:00 am","speed":0,"volume":"66"},{"starttime":"9\/4\/2011 7:00 am","speed":0,"volume":"85"},{"starttime":"9\/4\/2011 8:00 am","speed":0,"volume":"124"},{"starttime":"9\/4\/2011 9:00 am","speed":0,"volume":"195"},{"starttime":"9\/4\/2011 10:00 am","speed":0,"volume":"238"},{"starttime":"9\/4\/2011 11:00 am","speed":0,"volume":"275"},{"starttime":"9\/4\/2011 12:00 pm","speed":0,"volume":"299"},{"starttime":"9\/4\/2011 1:00 pm","speed":0,"volume":"314"},{"starttime":"9\/4\/2011 2:00 pm","speed":0,"volume":"318"},{"starttime":"9\/4\/2011 3:00 pm","speed":0,"volume":"328"},{"starttime":"9\/4\/2011 4:00 pm","speed":0,"volume":"290"},{"starttime":"9\/4\/2011 5:00 pm","speed":0,"volume":"305"},{"starttime":"9\/4\/2011 6:00 pm","speed":0,"volume":"304"},{"starttime":"9\/4\/2011 7:00 pm","speed":0,"volume":"232"},{"starttime":"9\/4\/2011 8:00 pm","speed":0,"volume":"194"},{"starttime":"9\/4\/2011 9:00 pm","speed":0,"volume":"159"},{"starttime":"9\/4\/2011 10:00 pm","speed":0,"volume":"91"},{"starttime":"9\/4\/2011 11:00 pm","speed":0,"volume":"70"},{"starttime":"9\/5\/2011 12:00 am","speed":0,"volume":"59"},{"starttime":"9\/5\/2011 1:00 am","speed":0,"volume":"42"},{"starttime":"9\/5\/2011 2:00 am","speed":0,"volume":"24"},{"starttime":"9\/5\/2011 3:00 am","speed":0,"volume":"23"},{"starttime":"9\/5\/2011 4:00 am","speed":0,"volume":"35"},{"starttime":"9\/5\/2011 5:00 am","speed":0,"volume":"54"},{"starttime":"9\/5\/2011 6:00 am","speed":0,"volume":"74"},{"starttime":"9\/5\/2011 7:00 am","speed":0,"volume":"96"},{"starttime":"9\/5\/2011 8:00 am","speed":0,"volume":"134"},{"starttime":"9\/5\/2011 9:00 am","speed":0,"volume":"215"},{"starttime":"9\/5\/2011 10:00 am","speed":0,"volume":"214"},{"starttime":"9\/5\/2011 11:00 am","speed":0,"volume":"296"},{"starttime":"9\/5\/2011 12:00 pm","speed":0,"volume":"330"},{"starttime":"9\/5\/2011 1:00 pm","speed":0,"volume":"363"},{"starttime":"9\/5\/2011 2:00 pm","speed":0,"volume":"391"},{"starttime":"9\/5\/2011 3:00 pm","speed":0,"volume":"343"},{"starttime":"9\/5\/2011 4:00 pm","speed":0,"volume":"289"},{"starttime":"9\/5\/2011 5:00 pm","speed":0,"volume":"271"},{"starttime":"9\/5\/2011 6:00 pm","speed":0,"volume":"252"},{"starttime":"9\/5\/2011 7:00 pm","speed":0,"volume":"260"},{"starttime":"9\/5\/2011 8:00 pm","speed":0,"volume":"209"},{"starttime":"9\/5\/2011 9:00 pm","speed":0,"volume":"146"},{"starttime":"9\/5\/2011 10:00 pm","speed":0,"volume":"103"},{"starttime":"9\/5\/2011 11:00 pm","speed":0,"volume":"54"}];
    
    
    document.getElementById("jname").innerHTML=JSONObject.name  
    document.getElementById("jage").innerHTML=JSONObject.age  
    document.getElementById("jstreet").innerHTML=JSONObject.street  
    document.getElementById("jphone").innerHTML=JSONObject.phone  
</script>

</body>
</html>