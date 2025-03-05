<?php
include('header_link.php');
?>
    <style>
        body {
            background-color: #f0f8ff;
        }
        .container {
            max-width: 600px;
            margin-top: 100px;
        }
        .card {
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #6c63ff;
            border: none;
            width: 93%;
        }
        .btn-primary:hover {
            background-color: #5a52d3;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 10px;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 0 0.2rem rgba(108, 99, 255, 0.25);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h3 class="text-center mb-4">Reset Your Password</h3>

            <!-- Form Start -->
            <form id="resetPasswordForm" action="confirm_pass_action.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="pass" required>
                    <div class="invalid-feedback">Password is required.</div>
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label" >Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" required>
                    <div class="invalid-feedback">Passwords do not match.</div>
                </div>

                <div class="d-grid gap-2">
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                     <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script>
    // Form validation script
    const form = document.getElementById('resetPasswordForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        // Reset the form classes
        form.classList.remove('was-validated');

        // Validate password and confirm password match
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Passwords do not match');
            confirmPassword.classList.add('is-invalid');
        } else {
            confirmPassword.setCustomValidity('');
            confirmPassword.classList.remove('is-invalid');
        }

        // Add form validation
        form.classList.add('was-validated');
    });
</script> -->
<?php
include('footer_link.php');
?>
