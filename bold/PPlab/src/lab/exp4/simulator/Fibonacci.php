<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
  .erp{
    padding-left: 2em;

    display: inline-block;
    width: 100%;
    top: 0;
    background-color: #FF3B3F;
    color: white;
   padding: 12px 16px;
   text-align: center;

  }
  .block1{
    position: fixed left;
    display: inline-block;
    width: 45em;
    height: 20em;
    overflow: hidden;
    border: 1px solid grey;

    margin-top: 3em;
    margin-left: 1em;
  }
    .block2{
  position: fixed right;

    display: inline-block;
    width: 45em;
    height: 20em;
    overflow: hidden;
    border: 1px solid grey;
    margin-top: 3em;
    margin-left: 3em;
  }
     .block3{

    position: fixed left;
    display: inline-block;
    width: 45em;
    height: 20em;
    overflow: auto;
    border: 1px solid grey;
    margin-top: 4em;
    margin-left: 1em;
  }
     .block4{

    position: fixed right;
    display: inline-block;
    width: 45em;
    height: 20em;
    overflow: hidden;
    border: 1px solid grey;
    margin-top: 4em;
    margin-left: 3em;
  }

  .header1{
position: absolute;
    padding-top: 1em;
    display: inline-block;
  width: 39.4em;
  height: 2.9em;
  border: 1px solid black;
  border-top-left-radius: 9px;
  border-top-right-radius: 9px;
  margin-top: -10px;
  margin-left:-1px;
  background-color: #eee;
  text-align: center;
  font-size:16px;
  }
  .block1 ul li{
    margin-top: 2em;
    font-size: 20px;

  }
  .tn{
    margin-top: 4em;
  }

  input{
    margin-left: 1em;
    margin-top: 1em;
    width: 40em;
  }
  #btn_1{
    margin-left: 17.8em;
    margin-top: 1.1em;
  }
  #btn_2{
    margin-top: 2em;
    margin-left: 6em;
    width: 10em;
  }
  #btn_3{
    margin-top: 2em;
    margin-left: 9em;
    width: 10em;
  }
  .step1 pre{
    margin-top: 4em;
  }
  .block4 #res_1{
    margin-top: 3em;
  }
  @media (min-width: 320px) and (max-width:350px){



.navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 240%;
    margin-bottom: 8%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 4%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 222%;

  margin-bottom: 18.5%;
    

 }
}
@media (min-width: 350px) and (max-width:400px){



.navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 190%;
    margin-bottom: 7%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 4%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 180%;

  margin-bottom: 18.5%;
    

 }
}
@media (min-width: 401px) and (max-width:480px){


.navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 150%;
    margin-bottom: 5.9%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 4%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 144.3%;

  margin-bottom: 18.5%;
    

 }
}
@media (min-width: 481px) and (max-width:580px){

.navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 145%;
    margin-bottom: 4.6%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 4%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 140%;

  margin-bottom: 18.5%;
    

 }
}
@media (min-width: 581px) and (max-width:680px){

.navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 116%;
    margin-bottom: 3.6%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 3%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 113%;

  margin-bottom: 17%;
    

 }
}
@media (min-width: 681px) and (max-width:768px){


   .navbar-left{
 
 margin-top: -6%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{

 }
  .block2{
    
    margin-top: -130%;
    margin-left: 94%;
    margin-bottom: 2.6%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 3%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 93%;

  margin-bottom: 16%;
    

 }
}
@media (min-width: 769px) and (max-width: 1024px){

 .navbar-left{
 
 margin-top: -1%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{
      margin-top: 5%;
      margin-left: 5%;
 }
  .block2{
    
    margin-top: -130%;
    margin-left: 90%;
    margin-bottom: 2.6%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 5%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 89%;

  margin-bottom: 16%;
    

 }



}
@media (min-width: 1025px){

.navbar-left{
 
 margin-top: -1%;
}
.navbar-toggle{
  margin-top: 2%;
}
    .block1{
      margin-top: 5%;
      margin-left: 5%;
 }
  .block2{
    
    margin-top: -130%;
    margin-left: 90%;
    margin-bottom: 2.6%;
    margin-right: 5%;
   
  }
 
  .block3{
    
     margin-left: 5%;
     margin-top: 1%;
     margin-bottom: 14%;
    

 }

  .block4{
    margin-top: -130%;
     margin-left: 89%;

  margin-bottom: 16%;
    

 }



}
@media (min-width: 1326px){
  .block1{
  margin-left: 3%;
}
.block3{
  margin-left: 3%;

}
.block2{
   margin-top: -22%;
     margin-left: 52%;

  margin-bottom: 4%;
    
}

.block4{
     margin-top: -38%;
     margin-left: 52%;

     margin-bottom:15.2%;
    
}
}
</style>
<body>
	<div class="top">
    	<nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#f4511e; border:0px; ">
    		<div class="container">
    			  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
      	    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
     <h1 style="font-size: 44px; color: white;">Analysis of Loops</h1>
     </ul>
 </div>
</nav>
</div>
 <div class="container-fluid">
<div class="block1" style="margin-top: 9em;">
	<div class="header1">Problem?</div>
	<ul>
		<li>To find the Fibonacci Series.</li>

	</ul>


</div>
<div class="block2">
<div class="header1"> Iniatialize</div>
<div class="tn">
<input type="text" id="input_1" placeholder="Enter the Number(nterms) :"><br>
<button class="btn btn-default" id="btn_1">Submit</button><br>
<button class="btn btn-primary" id="btn_2">Start</button>
<button class="btn btn-primary" id="btn_3">Reset</button>
</div>
</div>
<div class="block3">
<div class="header1 ">Step Execute</div><br><br><b>
<div class="step1" id="step1" style="display:none;text-align:left;">
		<p id="f1">n1 = 0</p>
		<p id="f2">n2 = 1</p>
		<p id="f3">count = 0</p>
		<p id="f4">if nterms <= 0:</p>
		<p id="f5" style="padding-left:10px;">print("Please enter a positive integer")</p>
		<p id="f6">elif nterms == 1:</p>
		<p id="f7" style="padding-left:10px;">print("Fibonacci sequence upto",nterms,":")</p>
		<p id="f8" style="padding-left:10px;">print(n1)</p>
		<p id="f9">else:</p>
		<p id="f10" style="padding-left:10px;">print("Fibonacci sequence upto",nterms,":")</p>
    <p id="f11" style="padding-left:10px;">while count < nterms:</p>
    <p id="f12" style="padding-left:20px;">print(n1,end=' , ')</p>
    <p id="f13" style="padding-left:20px;">nth = n1 + n2</p>
    <p id="f14" style="padding-left:20px;">n1 = n2</p>
    <p id="f15" style="padding-left:20px;">n2 = nth</p>
    <p id="f16" style="padding-left:20px;">count += 1</p>
 
  </div>
 </b>
	</div>
    </div>
</div>
<div class="block4">
<div class="header1">Result</div>
 <p id="res_1" style="display:none;">Fibonacci sequence upto nterms is :</p>
    <p id="res_2"></p>
</div>
</div>
<br><br><br><br>
<script src="fibonacci.js"></script>
</body>
</html>
