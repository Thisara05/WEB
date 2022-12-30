var f1 = 1;
var f2 = 2;
var f3 = 3;
var f4 = 4;
for (let i=0; i<1000; i++) 
	{
		setTimeout(function() 
		{
			document.getElementById("slbt2").style.background = "red";
			document.getElementById("slbt1").style.background = "transparent";
			document.getElementById("slbt3").style.background = "transparent";
			document.getElementById("slbt4").style.background = "transparent";
			document.getElementById("fimg").style.marginLeft = "-100%";
		},4000 * f1);
		f1 = f1 + 4;
		setTimeout(function() 
		{
			document.getElementById("slbt3").style.background = "red";
			document.getElementById("slbt1").style.background = "transparent";
			document.getElementById("slbt4").style.background = "transparent";
			document.getElementById("slbt2").style.background = "transparent";
			document.getElementById("fimg").style.marginLeft = "-200%";
		},4000 * f2);
		f2 = f2 + 4;
		setTimeout(function() 
		{
			document.getElementById("slbt4").style.background = "red";
			document.getElementById("slbt1").style.background = "transparent";
			document.getElementById("slbt2").style.background = "transparent";
			document.getElementById("slbt3").style.background = "transparent";
			document.getElementById("fimg").style.marginLeft = "-300%";
		},4000 * f3);
		f3 = f3 + 4;
		setTimeout(function() 
		{
			document.getElementById("slbt1").style.background = "red";
			document.getElementById("slbt2").style.background = "transparent";
			document.getElementById("slbt3").style.background = "transparent";
			document.getElementById("slbt4").style.background = "transparent";
			document.getElementById("fimg").style.marginLeft = "0%";
		},4000 * f4);
		f4 = f4 + 4;
	};

function sl(x)
{
	if (x==1) 
	{
		document.getElementById("fimg").style.marginLeft = "0%";
		document.getElementById("slbt1").style.background = "red";
		document.getElementById("slbt2").style.background = "transparent";
		document.getElementById("slbt3").style.background = "transparent";
		document.getElementById("slbt4").style.background = "transparent";
	}
	if (x==2) 
	{
		document.getElementById("fimg").style.marginLeft = "-100%";
		document.getElementById("slbt2").style.background = "red";
		document.getElementById("slbt1").style.background = "transparent";
		document.getElementById("slbt3").style.background = "transparent";
		document.getElementById("slbt4").style.background = "transparent";
	}
	if (x==3) 
	{
		document.getElementById("fimg").style.marginLeft = "-200%";
		document.getElementById("slbt3").style.background = "red";
		document.getElementById("slbt2").style.background = "transparent";
		document.getElementById("slbt1").style.background = "transparent";
		document.getElementById("slbt4").style.background = "transparent";
	}
	if (x==4) 
	{
		document.getElementById("fimg").style.marginLeft = "-300%";
		document.getElementById("slbt4").style.background = "red";
		document.getElementById("slbt2").style.background = "transparent";
		document.getElementById("slbt3").style.background = "transparent";
		document.getElementById("slbt1").style.background = "transparent";
	}
}