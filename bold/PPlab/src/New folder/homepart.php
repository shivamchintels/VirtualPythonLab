<!DOCTYPE html>
<html>
<head>
	<title>Virtual lab</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.top{

		margin-top: 1em;
	}
    #bs{
    	font-weight: lighter;
    	font-size: 25px;
    	font-family: monospace;
    	margin-top: 2em;
    }
    #bs li a{
    	margin-left: 2em;
    	margin-right: 1em;
    }
    #bs li a:hover{
    	border-bottom: 3px solid blue;
    	color: orange;
    }
    .sticky-container{
    padding:0px;
    margin:0px;
    position:absolute;
    right:5.5em;
    top:250px;
    width:0px;
    border-radius: 6px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}

.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
.division label{
     
	font-family: cursive;
	margin-left: 2em;
	font-size: 26px;
}
.block{
    font-family: Aerial;
    font-size: 24px;
    position: fixed;
	margin-left: 0em;
	width: 20%;
	margin-top: .5em;
	height: 10em;
	border: 0px solid black;
}
.block ul ol a{
	text-decoration: none;
}
.block ul ol a:hover{
	color: #d45111;
}
.container{
	position: fixed;
    overflow: auto;
	margin-left: 21em;
	border-left: 1.3px solid #eee;
	width: 66em;
	height: 20em;
}
.container label{
	margin-bottom: 1em;
	font-size: 21px;
}
.container  ul li a{

	text-decoration: none;
	font-size: 16px;
}
</style>
    <body>
    	<div class="top">
    	<nav class="navbar navbar-default" style=" background-color:white; border-bottom: 1em solid orange;border-top:0px; ">
    		<div class="container-fluid">
    			  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      	    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
      <img src="vlabs1.png" class="img-responsive main-logo" width="20%">
    		</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
            	<li><a href="lab/index.php">Explore P.lab</a></li>
            	<li><a href="#">Contact</a></li>
            </ul>


    		</div>
    		</div>
    	</nav>

    </div>
    <div class="sticky-container">
    <ul class="sticky">
        <li>
            
            <a href="https://www.facebook.com/pages/Virtual-Labs-IIT-Delhi/301510159983871"  target="_blank"><img src="Facebook.png" width="32" height="32"></a>
        </li>
        <li>
            
            <a href="https://twitter.com/TheVirtualLabs" target="_blank"><img src="Twitter.png" width="32" height="32"</a>
        </li>
        <li>
            
            <a href="https://plus.google.com/codexworld" target="_blank"><img src="Google+.png" width="32" height="32"></a>
        </li>
        <li>
           
           <a href="http://linkedin.com" target="_blank"> <img src="Linkedin.png" width="32" height="32"></a>
        </li>
        <li>
            
            <a href="https://www.youtube.com/watch?v=mVBYNXLaDdg" target="_blank">
<img src="YouTube.png" width="32" height="32"></a>
        </li>
    </ul>
</div>
<div class="division">
	<label>Computer Sience & Engineering</label>
</div>
  <div class="block">
  	<ul>
  		<ol><a href="homeintro.php">Introduction</a></ol>
  		<ol><a href="homepage.php">List of experiments</a></ol>
  		<ol><a href="">Target Audience</a></ol>
  		<ol><a href="">Courses Aligned</a></ol>
  		<ol><a href="">Prerequisites</a></ol>
  		<ol><a href="">Feedback</a></ol>
  	</ul>
  </div>
</body>
</html>