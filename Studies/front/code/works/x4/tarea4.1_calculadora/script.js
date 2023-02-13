

const calculator = document.createElement("div");
calculator.className = "calculator";

const display = document.createElement("p");
display.className = "display";
display.textContent = "0";

calculator.appendChild(display);

const buttons = document.createElement("table");

const values = [["CE", "↼", "%", "+"], ["7", "8", "9", "-"], ["4", "5", "6", "*"], ["1", "2", "3", "÷"], ["0", "±", ",", "="]];
const classNames = ["ce", "back", "percent", "plus", "seven", "eight", "nine", "minus", "four", "five", "six", "multiply", "one", "two", "three", "divide", "zero", "plus-minus", "comma", "equal"];

values.forEach((value, index) => {
  const row = document.createElement("tr");
  row.className = "row";
  for (let j = 0; j < value.length; j++) {
    const btn = document.createElement("td");
    btn.className = "btn";
    const button = document.createElement("button");
    button.textContent = value[j];
    button.className = classNames[index * 4 + j];
    btn.appendChild(button);
    row.appendChild(btn);
  }
  buttons.appendChild(row);
});

calculator.appendChild(buttons);

document.body.appendChild(calculator);

// buttons selectors

const ce = document.querySelector(".ce");
const back = document.querySelector(".back");
const percent = document.querySelector(".percent");
const plus = document.querySelector(".plus");

const seven = document.querySelector(".seven");
const eight = document.querySelector(".eight");
const nine = document.querySelector(".nine");
const minus = document.querySelector(".minus");

const four = document.querySelector(".four");
const five = document.querySelector(".five");
const six = document.querySelector(".six");
const multiply = document.querySelector(".multiply");

const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const divide = document.querySelector(".divide");

const zero = document.querySelector(".zero");
const plusMinus = document.querySelector(".plus-minus");
const comma = document.querySelector(".comma");
const equal = document.querySelector(".equal");



// event listeners
ce.addEventListener("click", () => {
  display.textContent = "0";
});

back.addEventListener("click", () => {
  if (display.textContent!== "0") {
    if (display.textContent.length === 1) {
      display.textContent = "0";
    } else {
      display.textContent = display.textContent.slice(0, -1);
    }
  }
});

percent.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent /= 100;
  } else {
    display.textContent = "0";
  }
});

plus.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent += "+";
  } else {
    display.textContent = "0";
  }
});

minus.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent += "-";
  } else {
    display.textContent = "0";
  }
});

multiply.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent += "*";
  } else {
    display.textContent = "0";
  }
});

divide.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent += "/";
  } else {
    display.textContent = "0";
  }
});

plusMinus.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent = -display.textContent;
  } else {
    display.textContent = "0";
  }
});

comma.addEventListener("click", () => {
  if (display.textContent !== "0") {
    display.textContent += ",";
  } else {
    display.textContent = "0";
  }
});


// Number buttons

one.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "1";
  } else {
    display.textContent += "1";
  }
});

two.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "2";
  } else {
    display.textContent += "2";
  }
});

three.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "3";
  } else {
    display.textContent += "3";
  }
});

four.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "4";
  } else {
    display.textContent += "4";
  }
});

five.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "5";
  } else {
    display.textContent += "5";
  }
});

six.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "6";
  } else {
    display.textContent += "6";
  }
});

seven.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "7";
  } else {
    display.textContent += "7";
  }
});

eight.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "8";
  } else {
    display.textContent += "8";
  }
});

nine.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "9";
  } else {
    display.textContent += "9";
  }
});

zero.addEventListener("click", () => {
  if (display.textContent === "0") {
    display.textContent = "0";
  } else {
    display.textContent += "0";
  }
});
