// Get DOM elements
const num1Input = document.getElementById('num1');
const num2Input = document.getElementById('num2');
const operationSelect = document.getElementById('operation');
const calculateBtn = document.getElementById('calculate-btn');
const errorElement = document.getElementById('error');
const resultContainer = document.getElementById('result-container');
const resultElement = document.getElementById('result');

// Hide result container initially
resultContainer.style.display = 'none';

// Add event listener to calculate button
calculateBtn.addEventListener('click', calculate);

function calculate() {
    // Reset previous errors and results
    errorElement.textContent = '';
    errorElement.style.display = 'none';
    resultContainer.style.display = 'none';
    
    // Get input values
    const num1 = num1Input.value.trim();
    const num2 = num2Input.value.trim();
    const operation = operationSelect.value;
    
    // Validate inputs
    if (num1 === '' || num2 === '') {
        showError('Please enter both numbers');
        return;
    }
    
    const number1 = parseFloat(num1);
    const number2 = parseFloat(num2);
    
    if (isNaN(number1) || isNaN(number2)) {
        showError('Please enter valid numbers');
        return;
    }
    
    // Perform calculation based on selected operation
    let calculatedResult;
    switch (operation) {
        case 'add':
            calculatedResult = number1 + number2;
            break;
        case 'subtract':
            calculatedResult = number1 - number2;
            break;
        case 'multiply':
            calculatedResult = number1 * number2;
            break;
        case 'divide':
            if (number2 === 0) {
                showError('Cannot divide by zero');
                return;
            }
            calculatedResult = number1 / number2;
            break;
        default:
            calculatedResult = number1 + number2;
    }
    
    // Format the result to avoid extremely long decimal numbers
    const formattedResult = calculatedResult.toFixed(calculatedResult % 1 === 0 ? 0 : 2);
    
    // Display the result
    resultElement.textContent = formattedResult;
    resultContainer.style.display = 'block';
}

function showError(message) {
    errorElement.textContent = message;
    errorElement.style.display = 'block';
}
