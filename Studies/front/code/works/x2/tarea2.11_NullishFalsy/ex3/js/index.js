let isFalsy = (value) => {
  return value === false || value === 0 || value === -0 || value === 0n || value === "" || value == null || value === NaN;
};

const dog = {
  element1: false,
  element2: 0,
  element3: -0,
  element4: 0n,
  element5: "",
  element6: null,
  element7: undefined,
};

for (const index in dog) {
  if (Object.hasOwnProperty.call(dog, index)) {
    const element = dog[index];
    console.log(isFalsy(element));
  }
}