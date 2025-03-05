<?php
include('navber.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>

    <style type="text/css">
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
}

/* Header */
header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 2rem;
    color: #444;
}

header p {
    font-size: 1rem;
    color: #666;
}

/* Contact Form Section */
.contact-form {
    background:sandybrown;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.contact-form h2 {
    margin-bottom: 20px;
    font-size: 1.5rem;
    color: #444;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.contact-form button {
    background: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background: #0056b3;
}

/* Footer */
footer {
    text-align: center;
    margin-top: 20px;
    font-size: 0.9rem;
    color: #666;
}

footer a {
    color: #007BFF;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}
.contact_form_area{
    width: 100%;
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <p>We’re here to assist you with any questions or concerns!</p>
    </header>

    <!-- <main>
        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form id="contactForm" action="contact_us_action.php" method="POST" onsubmit="return validateForm();">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main> -->
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left Part -->
            <div class="col-md-6 bg-primary text-white d-flex align-items-center justify-content-center">
            <div class="contact_form_area">
        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form id="contactForm" action="contact_us_action.php" method="POST" onsubmit="return validateForm();">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
</div> 
            </div>

            <!-- Right Part -->
            <div class="col-md-6 bg-success text-white d-flex align-items-center justify-content-center">
                <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29640.64122957814!2d87.74986264999998!3d21.777158649999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0326e5394d8237%3A0x7bb6b4d525857f71!2sContai%2C%20West%20Bengal%20721401!5e0!3m2!1sen!2sin!4v1732183439792!5m2!1sen!2sin" width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h1>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Your Store. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
    </footer>

   <script type="text/javascript">// Form Validation
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !email || !subject || !message) {
        alert("All fields are required!");
        return false;
    }

    // Basic email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        alert("Please enter a valid email address.");
        return false;
    }

    return true;
}
</script>

<?php
include('footer.php');

?>
