// Function to display the current date
function displayCurrentDate() {
    const date = new Date();
    const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric' 
    };
    const formattedDate = date.toLocaleDateString('en-US', options);
    document.getElementById('date').textContent = formattedDate;
}

// Call the function when the page loads
window.onload = displayCurrentDate;
