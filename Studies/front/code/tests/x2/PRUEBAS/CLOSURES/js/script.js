

function changeSize(a) {
    return function() {
      document.body.style.fontSize = a + 'px';
    }
  }
  var size12 = changeSize(12);
  var size14 = changeSize(14);
  var size16 = changeSize(16);
