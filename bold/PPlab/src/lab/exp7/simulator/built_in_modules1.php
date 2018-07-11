<!DOCTYPE html>
<html>
<head>
  <title>Simulator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="built_in_modules.css">
</head>
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
     <h1 style="font-size: 44px; color: white;">Analysis of Modules</h1>
     </ul>
 </div>
</nav>
</div>

  <div class="straight">
<div class="block1" style="margin-top: 9em;">
  <div class="header1">Problem?</div><br><br>

    <label><li>Please Provide a Single Input :</li>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For : Math
     and<li> No Input</li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For : datetime.</label>
  <div class="select">
    <select class="form-control" id="option" required="required">
      <option value="">-- Select Module -- </option>
      <option value="math1">Math</option>
      <option value="dt1">datetime</option>
      <option value="random1">random</option>
      <option value="operator1">operator</option>
    </select>
    <br><br>
  </div>
<br>
<div class="tn">
<input type="text" class="form-control" id="input_1" placeholder="Enter the First Number"><br><br>
<input type="text" class="form-control" id="input_2" placeholder="Enter the Second Number"><br><br>
<button class="btn btn-default" id="btn_1">Start</button><br>
<button class="btn btn-primary" id="btn_2">Next</button>
<button class="btn btn-primary" id="btn_3">Reset</button>
</div>
</div>
</div>

<div class="block3">
<div class="header2">Step Execute</div>
  <div class="step1" id="math" style="display:none;text-align:left; padding-left: 1em;"><br><br><b>
    <p id="m1">import math</p>
    <p id="m2"></p>
    <p id="m3">a = math.sqrt(num)</p>
    <p id="m4">print("The Square Root is :",a)</p>
    <p id="m5">b = math.floor</p>
    <p id="m6">print("The Floor is :",b)</p>
    <p id="m7">c = math.ceil()</p>
    <p id="m8">print("The Ceil is :",c)</p></b>
  </div>
  <div class="step1" id="dt" style="display:none;text-align:left;padding-left: 1em;"><br><br><b>
    <p id="t1">import math</p>
    <p id="t2"></p>
    <p id="t3">a = datetime.date</p>
    <p id="t4">print("The Date is :",a)</p>
    <p id="t5">b = datetime.time</p>
    <p id="t6">print("The Time is :",b)</p>
    <p id="t7">c = datetime.year</p>
    <p id="t8">print("The Year is :",c)</p></b>
  </div>
  <div class="step1" id="random" style="display:none;text-align:left;padding-left: 1em;"><br><br><b>
    <p id="r1">import random</p>
    <p id="r2"></p>
    <p id="r3">a = random.randint(a, b)</p>
    <p id="r4">print("The Random Number Between the Range is :",a)</p>
    <p id="r5">b = random.random()</p>
    <p id="r6">print("The Random Number is :",b)</p>
  </div>
  <div class="step1" id="operator" style="display:none;text-align:left;padding-left: 1em;"><br><br><b>
    <p id="o1">import operator</p>
    <p id="o2"></p>
    <p id="o3">a = operator.add(a,b)</p>
    <p id="o4">print("The Addition is :",a)</p>
    <p id="o5">b = operator.sub(a,b)</p>
    <p id="o6">print("The Subtraction is :",b)</p>
    <p id="o7">c = operator.mul(a,b)</p>
    <p id="o8">print("The Multiplication is :",c)</p></b>
  </div>
</div>

<div class="block4">
<div class="header3">Result</div>
<table>
    <tr>
      <th>Variables</th>
      <th>Values</th>
    </tr>
    <tr>
      <td id="row1"></td>
    </tr>
    <tr>
      <td id="row2" style="display:none"></td>
    </tr>
    <tr>
      <td id="row3" style="display:none">a :</td>
      <td id="row3_0"></td>
    </tr>
    <tr>
      <td id="row4" style="display:none">b :</td>
      <td id="row4_0"></td>
    </tr>
    <tr>
      <td id="row5" style="display:none">c :</td>
      <td id="row5_0"></td>
    </tr>
    <tr>
      <td id="row6">Output :</td>
    </tr>
    <tr>
      <td id="row7" style="display:none">The Square Root is :</td>
      <td id="row7_0" style="display:none">The Date is :</td>
      <td id="row7_1" style="display:none">The Square Root is :</td>
      <td id="row7_3" style="display:none">The Addition is :</td>
      <td id="row7_4" style="display:none">The Random Number Between the Range is :</td>
      <td id="row7_2"></td>
    </tr>
    <tr>
      <td id="row8" style="display:none">The Floor is :</td>
      <td id="row8_0" style="display:none">The Time is :</td>
      <td id="row8_2" style="display:none">The Subtraction is :</td>
      <td id="row8_3" style="display:none">The Random Number is :</td>
      <td id="row8_1"></td>
    </tr>
    <tr>
      <td id="row9" style="display:none">The Ceil is :</td>
      <td id="row9_0" style="display:none">The Year is :</td>
      <td id="row9_2" style="display:none">The Multiplication is :</td>
      <td id="row9_1"></td>
    </tr>
    <tr>
      <td id="row10"></td>
      <td id="row10_0"></td>
      <td id="row10_1"></td>
      <td id="row10_2"></td>
    </tr>
  </table>
</div>


<script src="built_in_modules.js"></script>
</body>
</html>
