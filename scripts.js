document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('appointment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Validate the form (basic example)
        let isValid = true;
        form.querySelectorAll('input, textarea').forEach(input => {
            if (!input.value) {
                isValid = false;
                alert(`Please fill in the ${input.previousElementSibling.textContent}`);
            }
        });

        if (isValid) {
            // Optionally send an AJAX request or show a success message
            alert('Appointment request submitted successfully!');
            form.reset();  // Clear the form fields
        }
    });
});
