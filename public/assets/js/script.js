document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Message sent successfully!');
        // Here you can handle form submission or add validation if needed
    });
});