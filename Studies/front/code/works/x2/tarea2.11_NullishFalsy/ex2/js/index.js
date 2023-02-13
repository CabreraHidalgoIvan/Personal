/**
 *
 * @param value
 * @returns {boolean}
 */
let isFalsy = (value) => {
  return value === false || value === 0 || value === -0 || value === 0n || value === "" || value == null || value === NaN;
};

let array = [false, 0, -0, 0n, "", null, undefined, NaN, true, "false", 747, Infinity];

array.forEach((element) => {
  console.log(isFalsy(element));
});

for (const element of array) {
  console.log(isFalsy(element));
}

for (const index in array) {
  if (Object.hasOwnProperty.call(array, index)) {
    const element = array[index];
    console.log(isFalsy(element));
  }
}