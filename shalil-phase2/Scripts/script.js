// Event listeners for submit and clear buttons
const submitButton = document.querySelector('button[type="submit"]');
const clearButton = document.querySelector('button[type="button"]');
submitButton.addEventListener('click', highlightEmptyFields);
clearButton.addEventListener('click', clearForm);


// Function to clear form
function clearForm(event) {
    if (confirm('Are you sure you want to clear the form?')) {
        document.querySelector('form').reset();
        event.preventDefault();
    }
}

// Function to highlight empty fields
function highlightEmptyFields(event) {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input, textarea');
    let isEmpty = false;
    
    inputs.forEach(input => {
        if (input.value.trim() === '') {
            input.style.border = '0.125em solid red';
            isEmpty = true;
        } else {
            input.style.border = '';
        }
    });

    if (isEmpty){
        alert('Please fill in all fields');
        event.preventDefault(); 
    }
}