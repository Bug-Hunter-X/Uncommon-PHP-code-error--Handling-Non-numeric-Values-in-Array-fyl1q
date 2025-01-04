function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

// Bug: The function doesn't handle non-numeric values in the array.
let numbers2 = [1, 2, "a", 4, 5];
let sum2 = calculateSum(numbers2); // throws error
console.log("Sum:", sum2); // Output: NaN