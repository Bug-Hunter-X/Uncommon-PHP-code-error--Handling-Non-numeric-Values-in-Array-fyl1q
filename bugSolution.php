function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] === 'number') {
      sum += numbers[i];
    } else {
      // Handle non-numeric values appropriately
      console.warn('Non-numeric value encountered:', numbers[i]);
      // Choose how to handle the non-numeric value:
      // 1. Ignore it (continue):  This is the current behavior. 
      // 2. Throw an error: throw new Error('Non-numeric value in array');
      // 3. Assign a default value: sum += 0; 
    }
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

let numbers2 = [1, 2, "a", 4, 5];
let sum2 = calculateSum(numbers2); // No error, handles "a"
console.log("Sum:", sum2); // Output: Sum: 12 (or 15 depending on error handling) 