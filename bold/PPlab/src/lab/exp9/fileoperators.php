<!DOCTYPE html>
<html>
<head>
	<title>File Operators</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fileoperators.css">
</head>
<body>
<div class="top">
      <nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#f4511e; border:0px; ">
        <div class="container-fluid">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
    <h1 style="color: white;padding-left: 3em;font-family: monospace;font-size: 35px; ">PYTHON<br> PROGRAMMING LANGUAGE</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\.php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="#" class="link2" style="color: #fff;">Quiz</a></li>
              <li class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Explore
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
      <li><a href="aboutlab.php">About lab</a></li>
      <li><a href="../index1.php">Explore Vlab</a></li>
    </ul>
 
            </ul>


        </div>


        </div>
        
      </nav>

    </div>
<?php include 'headerandsidelinks.php';?>	
<div class="as">
	<h1><b>File Operators</h1><br>


<h2><b>Introduction</b></h2><hr>

File operations in any programming is very essential. Files are used to save and transfer data. They can be of any form, a text file or a media file. They all serve the same purpose. <br>

Here you will learn about the various methods of file operations in Python programming language.<br><br>


<h2><b>Theory</b></h2><hr>

Python provides us with various file operations. A file can be created, edited, read and even copied. <br><br>
<h2><b>Creating a file</b></h2><hr>

To create a file, we need an object to store the file in. Here the role of object is to create a reference of the file.<br>
<div class="forwa">
	<b>
		Syntax : <br>object = open('file_name', 'mode')
	</b>
</div>
After all the desired operations are done, you need to close the file as well. This is done to save the file without properly.<br>
<div class="forwa">
	<b>
		Syntax :<br> object.close()
	</b>
	
</div>



While creating or opening a file, we need to enter the mode that we want it to open in. Some of the modes are :<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Name of mode</th>
        <th>Keywords</th>
        <th>Syntax</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Read</td>
        <td>r</td>
        <td>open('file_name', 'r')</td>
      </tr>
      <tr>
        <td>Write</td>
        <td>w</td>
        <td>open('file_name', 'w')</td>
      </tr>
      <tr>
        <td>Append</td>
        <td>a</td>
        <td>open('file_name', 'a')</td>
      </tr>
    </tbody>
  </table>


<br>
<div class="forwa">
	<b>
		Example :<br>

a = open('file.txt', 'w')<br>
a.write("Hello!, My name is Jake.")<br>
print(a.read())<br>
a.close()<br>


Output : Hello!, My name is Jake.

	</b>
</div>


The above example is of creating a file and printing it.<br>



<h2><b>Objective</b></h2><hr>

1.	To learn about the various file operations allowed in Python programming language.<br>
 
2.	To implement those operations in solving a problem.<br><br>



<h2><b>Manual</b></h2><hr>

In this lab you will learn about the file operations in Python by implementing them in creating and copying a file in the simulator.<br><br>



<h2><b>Procedure</b></h2><hr>

1.	Read the instructions in of the simulator.<br>
2.	Read the problem statement.<br>
3.	Press NEXT to proceed.<br>
4.	A code will be displayed.<br>
5.	Press NEXT again to see the execution of the code.<br>
6.	Relevant line in the code will be highlighted.</b><br><br><br>


</div>
</body>
</html>