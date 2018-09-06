
onClick = "getIndex(this);"

function getIndex(node) {
  console.log(node.value)
  var childs = node.childNodes;
  for (i = 0; i < childs.length; i++) {
    if (node == childs[i]) break;
    console.log(`loop ${i}`)
  }
  console.log(childs)

globalpiece = node.value -1;
document.getElementById("changerButton").click();

}

// var lis = document.getElementById("rig").getElementsByTagName('li');
//
//   for (var i=0; i<lis.length; i++) {
//       lis[i].addEventListener('click', getIndex(this));
//   }
