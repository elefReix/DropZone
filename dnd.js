var dnd;
function setup(){
  createCanvas(200,200);
  background(0);
  dnd = select ('#dnd');
  dnd.dragOver(highlight);
  dnd.dragOut(unhighlight);
}

function highlight(){
  dnd.style('background-color', '#ccc');
}

function unhighlight(){
  dnd.style('background-color', '#fff');
}
