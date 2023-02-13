const isFalsy = (value) => {
  return value === false || value === 0 || value === -0 || value === 0n || value === "" || value == null || value == NaN;
};

const array = [false, 0, -0, 0n, "", null, undefined, NaN, true, "false", 747, Infinity];

array.forEach((element) => {
  console.log(isFalsy(element));
});


