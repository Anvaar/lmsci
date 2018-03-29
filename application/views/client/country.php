<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Region > Country > Division</title>
<style type="text/css">

body {
	background: #000;
}
#widget {
	width: 780px;
	height: 480px;
	font: normal 10px verdana;
	text-align: center;
	margin: 40px auto;
	border: 5px #aaa;
	border-style: outset inset inset outset;
	background: url(http://www.grsites.com/textures/misc/misc142.jpg);
}
form {
	width: 98%;
	margin: 200px 0 60px 0;
}
select {
	width: 190px;
	font: normal 11px verdana;
	color: #fff;
	background: #000;
}
#txtregion {
	width: 98%;
	height: 16px;
	font: normal 12px verdana;
	letter-spacing: .4em;
	margin: auto;
	border-bottom: 1px black solid;
}
#txtplacename {
	width: 98%;
	height: 16px;
	font: normal 10px verdana;
	margin: auto;
}

</style>
<script type="text/javascript" src="city_state.js"></script>
</head>
<body>
<div id="widget">
<form>
Region&raquo; <select onchange="set_country(this,country,city_state)" size="1" name="region">
<option value="" selected="selected">SELECT REGION</option>
<option value=""></option>
<script type="text/javascript">
setRegions(this);
</script>
</select>
Country&raquo; <select name="country" size="1" disabled="disabled" onchange="set_city_state(this,city_state)"></select>
City/State&raquo; <select name="city_state" size="1" disabled="disabled" onchange="print_city_state(country,this)"></select>
</form>
<div id="txtregion"></div>
<div id="txtplacename"></div>
</div>
</body>
</html>
