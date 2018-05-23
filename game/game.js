var name = prompt("plase input those you loved but having chouble in choose the one you like most, they could be seprated by semmicom:");
console.log("name is: " + name);


var str = "";
var names = [];
var j = 0;
for (var i = 0;i < name.length; i++) {

if (name[i] === "," || i === name.length - 1)
	 {
	  
	 if (name[i] === ",") {
	    names[j] = str;
	    str = "";
	    j++;	
	}
	 else 
	 	{
	    str += name[i];
	    names[j] = str;
	    str = ""; 		
	 	}   
	}
	else
		{
			str += name[i];
		}    	
}
console.log("Names are: " + names);

var n = parseInt((j+1) * Math.random(),10);

for (var i = 0;i < j+1;i++) {
    console.log("I know someone called " + names[i]);
}

console.log("n = " + n);
console.log("The girl you love most is " + names[n]);

document.getElementById("pirc").setAttribute("src","game/" + names[n] +".jpg");
document.getElementById("name").innerHTML = "The one dested for you is " + names[n];
