<!DOCTYPE html>
<html>
		<head><title>Senshi.com</title>
			<script src="_js/showHouse.js"></script>
			<script src="//code.jquery.com/jquery.min.js"></script>
			<script src="https://ttv-api.s3.amazonaws.com/twitch.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
},
{font-family: Arial, Helvetica, sans-serif;}
.bg {
    /* The image used */
    background-image: url("_img/grass.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.house{
	position: absolute;
	top: 300px;
	left: 300px;
	width: 100px;
	height: 100px;
}
.house2{
position: absolute;
	top: 300px;
	left: 500px;
	width: 100px;
	height: 100px;
}
.house3{
position: absolute;
	top: 300px;
	left: 700px;
	width: 100px;
	height: 100px;
}
.builder{
	position: absolute;
	top: 600px;
	left: 400px;
	width: 100px;
	height: 100px;
}
</style>
</head>
<body>
	<div class="bg",style="position: relative; left: 0; top: 0;">
	<img src="_img/builder.jpg" id="image1" class="builder" onclick=buildMenu(this) />
		<img id="house1" src="_img/house.png" class="house" style="display: none;" onClick=buildHouse(this) /> 
		<img id="house2" src="_img/blueHouse.jpeg" class="house2" style="display: none;"onClick=buildHouse(this) /> 
		<img id="house3" src="_img/yellowHouse.jpg" class="house3" style="display: none;" onClick=buildHouse(this)/> 
		<img src="http://ttv-api.s3.amazonaws.com/assets/connect_dark.png" class="twitch-connect" href="#" />
		<div id="login-info">
		<img id="picture" src="" alt="">
		<a id="visit" href="#"></a>
</div>	
</div>
</body>
</html>