<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: rgb(42, 44, 37);
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: rgb(42, 44, 37);
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;AI
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #575a53;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(119, 126, 190);
  padding: 10px;
  text-align: center;
  color: rgb(15, 3, 3);
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>PORTFOLIO</h2>
<hr>191106031</hr>



<header>
      <h2>SHRAVAN MUNIYOOR     <img src="propic.jpg" alt="Girl in a jacket" width="300" height="300"> </h2>
</header>

<section>
  <nav style="background-color: rgb(42, 44, 37);">
    <ul>
      <li><a href="index.html">About Me</a></li>
      


      
    
    </ul>
  </nav>
  
  <article>
    <h1>GOA COLLEGE OF ENGINEERING</h1>
    <p>Who am I
      <br>
        My name is Shravan muniyoor.
        I am a student at Goa college of Engineering. 
        I am in the department of Information Technology.
        Finished my Higher secondary from MUshtifund Highersecondary School.
        I finished my Highschool From kendriya vidyalaya Bambolim camp.
      </p>  
        
  </article>
</section>

<footer>
  <p>Goa Engineering College</p>
</footer>

</body>