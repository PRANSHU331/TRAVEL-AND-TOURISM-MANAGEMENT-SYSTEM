<!DIOCTYPE HTML trnsperent nevigation bar and menus>
<html>
<head>
<style>
body{margin:0;
     padding:0;
	 font-family:Arial;
	 }
nav{position:fixed;
    top:0;
	left:0;
	width:100%;
	height:100px;
	padding :10px 90px;
	box-sizing:border-box;
	background:rgba(0,0,0,0.5);}
nav .logo{padding:22px 20px;
          height:80px;
		  float:left;
		  font-size:24px;
		  font-width:bold;
		  text-transfrom:uppercase;
		  color:WHITE;}

nav ul{list-style:none;
       float:right;
	   margin:0;
	   padding:0;
	   display:flex;}



nav ul li a{line-height:80px;
            color:white;
			padding:12px 30px;
			text-decoration :none;
			text-transform:uppercase;
			font-size:15px;
			font-width:bold;}
nav ul a:hover{backgroung:rgba(0,0,0,0,7);
               border-redius:6px;}



nav ul li a.active{background:red;
                   color:blue;
				   border-redius:8px;}


section{width:100%;
        height:100px;
		background:url('images2.jpg');
		background-size:cover;
		background-position:none;}
.navbar a:hover{height:30px;
	background:lightblue;
}		
		
</style>
</head>

<body>
<div class="wrap">
    <nav>
	     <div class="logo">PRANSHU</div>
		 <ul class="navbar"><br><br><br>
		     <li><a class="active" href="#">Home</a></li>
			 <li><a href="#">News</a></li>
			 <li><a href="#">Blog</a></li>
			 <li><a href="#">Feedback</a></li>
			 
			 <li><a href="tansparent.php">ragistration</a></li>
			 <li><a href="rks.php">login</a></li>
		</ul>
	</nav>
     <section></section>
</div>	

</body>
</html>

<html>
<head><style>
.pranshu{width:100%;
         height:550px;
		 background-color:lightblue;}
</style>
</head>
<body>
<div class="pranshu">
    <marquee direction="ltr" behavior="alternate" scrollamount="5" >
	
	 
		<a href="13.jpg"><img src="13.jpg"width="800px" height="550px" ></a>
   		<a href="19.jpg"><img src="19.jpg" width="800px" height="550px"></a>
        <a href="don.jpg"><img src="don.jpg" width="800px" height="550px"></a>
		<a href="12.jpg"><img src="12.jpg" width="800px" height="550px"></a>
    </marquee></div>
</body>
</html>


































