// Create an event listener to get data from form when submit button is pressed
document.querySelector('#contact-form-details').addEventListener('submit',function(event) {
    event.preventDefault()
    // Save data in const from event listener
    const form = event.currentTarget;
    // Put form event data into list of FormData
    const formData = new FormData(form)

    // Save and trim individual data from FromData form
    const name = formData.get('name').trim();
    const email = formData.get('email').trim();
    const company = formData.get('company').trim();
    const message = formData.get('message').trim();
    if (!name) {
        alert('Please input your name');
        return;    
    }
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Please make use of a valid E-mail');
        return;
    }
    if (!message) {
        alert('Please provide a message to send')
        return;
    }

    fetch('./send-message.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name, email, company, message }),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Something went wrong');        
        }
        return response.json();
    })
    .then(data => {
        console.log('Success: ', data);
        alert('Message sent!');
        form.reset(); // form.reset doesn't exist?
    })
    .catch(error => {
        console.error('Error: ', error)
        alert('An error occured. Try again later.');
    });
});

