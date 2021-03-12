
var developer = {
"Front-end": {
"Angular": ["AngularJS", "Angular 2"],
"React": ["React native"],
"Vue": []
},
"Back-end": {
"PHP": ["Symfony", "Laravel"],
"NodeJs": ["Express", "NestJS"]
}
}
window.onload = function() {
var tipSel = document.getElementById("tip");
var tehnoSel = document.getElementById("tehnologija");
var pottipSel = document.getElementById("pottip");
for (var x in developer) {
tipSel.options[tipSel.options.length] = new Option(x, x);
}
tipSel.onchange = function() {

pottipSel.length = 1;
tehnoSel.length = 1;

for (var y in developer[this.value]) {
tehnoSel.options[tehnoSel.options.length] = new Option(y, y);
}
}
tehnoSel.onchange = function() {

pottipSel.length = 1;

var z = developer[tipSel.value][this.value];
for (var i = 0; i < z.length; i++) {
pottipSel.options[pottipSel.options.length] = new Option(z[i], z[i]);
}
}
}
