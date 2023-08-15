<html>
<head>
<style>
body{
	background:url('images2.jpg');
	background-size:cover;
	height:50vh;
	padding-top:10px;
}
.rans{
	top:25px;
	left:20px;
	padding-top:50px;
	padding-left:60px;
	font-size:50px;
	font-style:bolt;
	color:#fff107;
	background-color:green;
	width:520px;
	height:560px;
	margin:auto;
	border-radius:10px;
	opacity:0.8;
    
}
.rans input{
	margin-top:30px;
	width:200px;
	height:35px;
	font-size:16px;
	border-radius:6px;
	
	
	
}
.rans input[name="Enter email"]{
	background-color:white;
	width:400px;
	opacity:0.8;
	background : transparent;
	outline: none;
	border-bottom:1px solid yellow;
}
.rans input[name="Gender"]{
	margin-top:20px;
	padding:5px;
	font-style:center;
	width:25px;
	color:white;
	background : transparent;
	
}
.rans input[type="checkbox"]{
	width:25px;
	margin-top:5px;
	color:white;
	background-color:blue;
	
}
.rans input[type="submit"]{
	margin-top:10px;
	border-radius:50px;
	margin-left:280px;
	heigth:50px;
	background:blue;
	color:green;
	
	}
.rans input[type="submit"]:hover{
	background-color:yellow;
	color:blue;
	
}
.rans li{
	font-style:center;
	font-size:25px;
	color:white;
	list-style:none;
}


</style>
</head>
<body>
<div class="rans">
Registration From<br>
<input type="text" placeholder="first name" name=" First name">	
<input type="text" placeholder="Last name" name=" last name">	
<input type="text" placeholder="Enter email" name=" Enter email"><br>	
<input type="text" placeholder="Mobile no." name="Mobile num." maxlength="10"><br>
<input type="password" placeholder="password" name=" password">	<br>
<input type="password" placeholder="Renter password" name="password"><br>
<li><input type="radio" value="Male" name="Gender">Male
<input type="radio" value="Fimail" name="Gender">Female	<br>
<input type="checkbox"  name=" ">Are you sure?	<br></li>
<input type="submit" value="Registration" name="Fname"><br>	
</div>
</body>
</html>