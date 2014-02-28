var infox = {
	"name" : "Jimmy Joe",
	"links" : [{
		"facebook" : "fb/takeonechief"
	}, {
		"twitter" : "t/takeonechief"
	}, {
		"pinterest" : "pt/takeonechief"
	}, {
		"linkedin" : "li/takeonechief",
		"linkedin2" : "li/takeonechief2"
	}],
	"school" : "berkeley",
	"major" : "philosopy"
};

var info = {
	"name" : "Jimmy Joe",
	"links" : {
		"facebookw" : "fb/takeonechief",
		"twitter" : "t/takeonechief",
		"pinterest" : "pt/takeonechief",
		"linkedin" : "li/takeonechief"
	},
	"school" : "berkeley",
	"major" : "philosopy"
};

var output ='';

for (key in info.links) {
	if (info.links.hasOwnProperty(key)) {
		output += '<li>' + '<a href=" ' + info.links[key] + '" >' + key + '</a></li>';
	}
}

var update = document.getElementById('links');
update.innerHTML = output;

function plus(a, b) {
	return (console.log(a + b), console.log(this), console.log(arguments)
	);
}

var output2 ='';

for ( i = 0; i < infox.links.length; i++) {

	for (key in infox.links[i]) {
		if (infox.links[i].hasOwnProperty(key)) {
			output2 += '<li>' + '<a href=" ' + infox.links[i][key] + '" >' + key + '</a></li>';
		}
	}
}

var update2 = document.getElementById('links2');
update2.innerHTML = output2;
