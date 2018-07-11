<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  border-bottom: 4px solid orange;
  border-radius: 6px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2 style="text-align: center; font-family: monospace;font-size: 50px;">OUR TEAM MEMBERS</h2>

<br>
<h3 style="font-family: monospace;font-weight: bold;font-size: 30px;">PROJECT CO-ORDINATORS</h3>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="user.png" alt="Jane" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054; ">Dr. Aparna Dixit</h2>
        <p class="title">Project Co-ordinator</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user.png" alt="Mike" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Mr. Mohan Rao</h2>
        <p class="title">Project Co-ordinator</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="user.png" alt="John" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Shivam Shukla</h2>
        <p class="title">Student Team Leader</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
</div>
<h3 style="font-family: monospace;font-weight: bold;font-size: 30px;">STUDENTS</h3>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="user.png" alt="Jane" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Avika Pal</h2>
        <p class="title">Quiz Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user.png" alt="Mike" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Riya Singh</h2>
        <p class="title">Quiz Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
     <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="user.png" alt="John" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Saumya Agnihotri</h2>
        <p class="title">Quiz Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="user.png" alt="Jane" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Kashish Mehta</h2>
        <p class="title">Design Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
     <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user.png" alt="Mike" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Shudanshu Ojha</h2>
        <p class="title">Logo Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="user.png" alt="John" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Sumit Singh</h2>
        <p class="title">Web-Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
    <p><a href="gmail.com"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="user.png" alt="Jane" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Yash Srivastava</h2>
        <p class="title">Content Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
     <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user.png" alt="Mike" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Harsh Chaurasia</h2>
        <p class="title">Backend Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
       <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="user.png" alt="John" style="width:50%;">
      <div class="container">
        <h2 style="font-family: monospace;font-weight: lighter;color:#F05054;">Pawan Yadav</h2>
        <p class="title">Content Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      <p><a href="#"><img src="gmail.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="book.png" width="9%"  class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="kedin.png" width="9%" class="img-responsive"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="tweet.png" width="9%" class="img-responsive"></a></p>
      </div>
    </div>
  </div>
</div>


</body>
</html>
