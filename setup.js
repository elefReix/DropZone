var dropzone;
function setup(){
  var canvas = createCanvas(200,200);
  background(0);
}

function goFile(file){
createP(file.name);
var img = createImg(file.data);
img.size(100,100);
}
