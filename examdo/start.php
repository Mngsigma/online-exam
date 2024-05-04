
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
var index,score=0;
var q;
        var question=['pm of india','not akeyword','2+4=?'];
        var option1=['narendra modi','for','55'];
        var option2=['kej','int','33'];
        var option3=['rah','chat','6'];
        var option4=['soniya','float','7'];
        var answer=[1,3,3];
        function finish()
        {   
            alert("Attempt Question:"+score+"/10");
            clearInterval(k);
        }
        function show(v)
        {   index=v;
            q=v;
            document.getElementById('q').innerHTML='Quetion:('+(++q)+')'+'<br>' +question[v];
            document.getElementById('op1').innerHTML="<input type='radio' name='x' id='a' value=1>"+option1[v];
            document.getElementById('op2').innerHTML="<input type='radio' name='x' id='b' value=2>"+option2[v];
            document.getElementById('op3').innerHTML="<input type='radio' name='x' id='c' value=3>"+option3[v];
            document.getElementById('op4').innerHTML="<input type='radio' name='x' id='d' value=4>"+option4[v];
        
        }
        
        function next()
        {
            if(index==2)
            {
               show(0);
            }
          else{
            show(index+1);
          }}
        function pre()
        {if(index==0)
            {
               show(2);
            }
          else{
            show(index-1);
          }}
          function ans()
          {
            var uans;
            if(document.getElementById("a").checked==true)
            {
                 uans=document.getElementById("a").value;
            }
            if(document.getElementById("b").checked==true)
            {
                 uans=document.getElementById("b").value;
            }
            if(document.getElementById("c").checked==true)
            {
                 uans=document.getElementById("c").value;
            }
            if(document.getElementById("d").checked==true)
            {
                 uans=document.getElementById("d").value;
            }
            if(uans==answer[index])
            {
              alert("Right");
              score=score+1;
            }
            else{
                alert("wrong");
                score=score+1;
            }
          }
          var h=29,m=59;
var k=setInterval(function(){
    document.getElementById("x").innerHTML="Time Left "+h+":"+m;
    m--;
    if(m==-1)
    {
        m=59;
        h--;
    }
    if(h==-1)
    {
        clearInterval(k);
    }
    
}, 1000);


        
    </script> 

</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">

<div class="container-fluid"style='background-color:green;'>
<div class="navbar-header">
<a class="navbar-brand" style="color:white"; href="#">Coding Sigma</a>
</div>
  <!-- Links -->
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="exam.php">Home</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="adminlogin.php">Subjects</a>
    </li>
    <li class="nav-item">
      <a style='color:white;' class="nav-link" href="donorslogin.php">Upcomming Exam</a>
    </li>
    <li class="nav-item">
        <a style='color:white;' class="nav-link" href="patientlogin.php">Rank</a>
      </li>
      <li class="nav-item">
        <a style='color:white;' class="nav-link" href="logout.html">About</a>
      </li>
      
  </ul>
</div>

</nav>

  
<center> <h1>C++ EXAM</h1>
<h5 id='x'></h5>
    <input type="button" value="1" onClick='show(0)' style="background-color:green; color:white;">
    <input type="button" value="2" onClick='show(1)' style="background-color:green; color:white;">
    <input type="button" value="3" onClick='show(2)' style="background-color:green; color:white;">
    <input type="button" value="4" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="5" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="6" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="7" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="8" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="9" onClick='show()' style="background-color:green; color:white;">
    <input type="button" value="10" onClick='show()' style="background-color:green; color:white;"> 
    <h4 id="q"></h4>
    
    <p id="op1"></p>
    <p id="op2"></p>
    <p id="op3"></p>
    <p id="op4"></p>
    
    <br>
  
    <input type="button" value="next" onClick='next()' style="background-color:green; color:white;"> 
    <input type="button" value="pre" onClick='pre()' style="background-color:green; color:white;">
    <input type="button" value="ans" onClick='ans()' style="background-color:green; color:white;">

<input type="button" value="finish" onClick='finish()' style="background-color:green; color:white;">


</center>

</body>
</html>



