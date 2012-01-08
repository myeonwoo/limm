window.onload = initAll;
var usedNums = new Array(76);

function initAll() {
  if (document.getElementById) {
    document.getElementById("reload").onclick = anotherCard;
    newCard();
  }
  else {
    alert("Sorry, your browser doesn't support this script");
  }
}

function newCard() {
  for (var i=0; i<24; i++) {
    setSquare(i);
  }
}

function setSquare(thisSquare) {
  var currSquare = "square" + thisSquare;
  var colPlace = new Array(0,1,2,3,4,0,1,2,3,4,0,1,3,4,0,1,2,3,4,0,1,2,3,4);
  var colBasis = colPlace[thisSquare] * 15;
  var newNum;

  do {
    newNum = colBasis + getNewNum() + 1;
  }
  while (usedNums[newNum]);

  usedNums[newNum] = true;
  document.getElementById(currSquare).innerHTML = newNum;
}

function getNewNum() {
  return Math.floor(Math.random() * 15);
}

function anotherCard() {
  for (var i=1; i<usedNums.length; i++) {
    usedNums[i] = false;
  }
  
  newCard();
  return false;
}
 

function initAll3() {  
  var ans = prompt("Enter a number","");
  try {
    if (!ans || isNaN(ans) || ans<0) {
      throw new Error("Not a valid number");
    }
    alert("The square root of " + ans + " is " + Math.sqrt(ans));
  }
  catch (errMsg) {
    alert(errMsg.message);
  }
}

function initAl2() {
  switch(navigator.platform) {
    case "Win32":
      alert("You're running Windows");
      break;
    case "MacPPC":
      alert("You have a PowerPC-based Mac");
      break;
    case "MacIntel":
    case "X11":
      alert("You have an Intel-based Mac");
      break;
    default:
      alert("You have " + navigator.platform);
  }
}


function initAll1() {
  document.getElementById("redirect").onclick = clickHandler;
}

function clickHandler() {
  //alert("Ow, that hurt!");
  //window.location = "http://localhost/limm/hello/jswelcome";
  //return false;
  
  if (this.toString().indexOf("http://www.google.com") < 0) {
    alert("We are not responsible for the content of pages outside our site");
  } else
    return false;
}