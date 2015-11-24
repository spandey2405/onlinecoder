<html>
<head>
    <script src="jquery-1.10.2.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>

<select id="type">
    <option value="POST">POST
    <option value="GET">GET
    <option value="PUT">PUT

    <option value="DEL">DEL
    </option></select><input type="text" class="url" id ="url" placeholder="http://api.url.com"><input class ="btn" type="button" id="Submit" value="Check">

<!--<div id="Result" style="background:gainsboro;width:100%;height:600px;margin-top: 20px;"></div>-->
<div class="my-box">
    <a href="javascript:;" id="myView1">User Put</a>
    <a href="javascript:;" id="myView2">User Get</a>
    <a href="javascript:;" id="myView3">Get Token</a>
</div>
<div class="tab-box">
    <a href="javascript:;" class="tabLink activeLink" id="cont-1">Request</a>
    <a href="javascript:;" class="tabLink " id="cont-2">Response</a>
</div>

<textarea class="tabcontent paddingAll" id="cont-1-1" style="height:220px;;background:#2E2E2E;;color:wheat;" placeholder='Request Data Json
{
  "type":"PUT",
"payloads": {"Email":"x.ty@gmail.com","Password":"XXXXXX","Username":"xty"},
"request_id": 123435236
}'></textarea>

<pre class="tabcontent paddingAll hide" id="cont-2-1"></pre>
<script type="text/javascript" src="js.js"></script>

</body>
</html>
