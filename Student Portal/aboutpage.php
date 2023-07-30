<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url('back1.jpg');
  background-size: cover;
  background-size: 100% 100%;
}

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
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color:white;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.container1 {
  position: relative;
}
.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius:50%;
}
.container1:hover .image {
  opacity: 0.3;
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Page</h1>
  <p>Student portal </p>
  <p>A Student Portal that acts an online portal between students & teacher. The System Is Designed For Particular Branch Like Diploma.</p>
  <p>Student can Edit Some Details In Profile,See There Mid Semester Marks,Events,Materials and Test Marks.</p>
  <p>A student  portal  project  that  acts  an  online  portal  between  students  and  teacher.  the system   is  designed  for  a  particular  branch  like  diploma. It contains  admin who  can  manage   teacher can manage  profile and upload  a reading  material, assignment, practical list, papers, marks of students, assignment due date,  and student can see staff details.</p>
</div>

<h2 style="text-align:center; color:white;">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
	<div class="container1">
      <img src="j1.jpg" class="image" style="width:100%">
      <div class="container">
        <h2>Jaimin Suthar</h2>
        <p class="title">Developer</p>
		<p><button class="button">Contact</button></p>
        <p>jaiminsuthar@gmail.com</p>
		</div>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
	<div class="container1">
      <img src="a1.jpg" class="image" style="width:100%">
      <div class="container">
        <h2>Abhay Bava</h2>
        <p class="title">Developer</p>
		<p><button class="button">Contact</button></p>
        <p>abhay@gmailcom</p>
		</div>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<div class="container1">
      <img src="k1.jpg" class="image" style="width:100%">
      <div class="container">
        <h2>Krina Patel</h2>
        <p class="title">Developer</p>
		<p><button class="button">Contact</button></p>
        <p>krina@gmail.com</p>
		</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
