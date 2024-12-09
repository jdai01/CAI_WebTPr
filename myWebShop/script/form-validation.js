document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll("form");

    // General form validation logic for all pages
    forms.forEach((form) => {
        form.addEventListener("submit", (e) => {
            let isValid = true;

            const usernameField = form.querySelector("#uName");
            const passwordField = form.querySelector("#password");
            const repeatPasswordField = form.querySelector("#repeatPassword");

            resetField(usernameField);
            resetField(passwordField);
            if (repeatPasswordField) resetField(repeatPasswordField);

            // Validate Username
            if (!validateUsername(usernameField.value)) {
                alert("Username should be at least 5 characters, and contain at least 1 capital letter and 1 lower case letter.");
                isValid = false;
            }

            // Validate Password
            if (!validatePassword(passwordField.value)) {
                alert("Password should have at least 10 characters.");
                isValid = false;
            }

            // Validate Password Repetition
            if (repeatPasswordField && passwordField.value !== repeatPasswordField.value) {
                alert("Passwords do not match. Please ensure both passwords are identical.");
                isValid = false;
            }

            if (!isValid) e.preventDefault();
        });
    });

    // New: Add validation logic for Customer Profile page
    const profileBox = document.querySelector(".profile-box");

    if (profileBox) {
        const usernameField = profileBox.querySelector("#uName");
        const passwordField = profileBox.querySelector("#password");
        const usernameSubmitButton = profileBox.querySelectorAll("input[type='submit']")[0];
        const passwordSubmitButton = profileBox.querySelectorAll("input[type='submit']")[1];

        // Validate username change
        usernameSubmitButton.addEventListener("click", (e) => {
            resetField(usernameField);
            if (!validateUsername(usernameField.value)) {
                alert("Username should be at least 5 characters, and contain at least 1 capital letter and 1 lower case letter.");
                isValid = false;
            }
        });

        // Validate password change
        passwordSubmitButton.addEventListener("click", (e) => {
            resetField(passwordField);
            if (!validatePassword(passwordField.value)) {
                alert("Password should have at least 10 characters.");
            }
        });
    }

    // // Helper functions
    // function validateUsername(username) {
    //     const minLength = 5;
    //     const hasUpperCase = /[A-Z]/.test(username);
    //     const hasLowerCase = /[a-z]/.test(username);
    //     return username.length >= minLength && hasUpperCase && hasLowerCase;
    // }

    // function validatePassword(password) {
    //     const minLength = 10;
    //     return password.length >= minLength;
    // }

    // function highlightField(field, isValid) {
    //     field.style.borderColor = isValid ? "green" : "red";
    // }

    // function resetField(field) {
    //     field.style.borderColor = "";
    // }
});


document.addEventListener("DOMContentLoaded", () => {
    const usernameForm = document.getElementById("usernameForm");
    const passwordForm = document.getElementById("passwordForm");

    usernameForm.addEventListener("submit", (e) => {
        const usernameField = document.getElementById("uName");
        const validationPassedField = document.getElementById("usernameValidationPassed");
        validationPassedField.value = "false"; // Reset value

        if (!validateUsername(usernameField.value)) {
            alert("Username should be at least 5 characters long, and contain both uppercase and lowercase letters.");
            e.preventDefault();
        } else {
            validationPassedField.value = "true"; // Indicate validation passed
        }
    });

    passwordForm.addEventListener("submit", (e) => {
        const passwordField = document.getElementById("password");
        const validationPassedField = document.getElementById("passwordValidationPassed");
        validationPassedField.value = "false"; // Reset value

        if (!validatePassword(passwordField.value)) {
            alert("Password must be at least 10 characters long.");
            e.preventDefault();
        } else {
            validationPassedField.value = "true"; // Indicate validation passed
        }
    });

    // function validateUsername(username) {
    //     const minLength = 5;
    //     const hasUpperCase = /[A-Z]/.test(username);
    //     const hasLowerCase = /[a-z]/.test(username);
    //     return username.length >= minLength && hasUpperCase && hasLowerCase;
    // }

    // function validatePassword(password) {
    //     return password.length >= 10;
    // }
});


// Helper functions
function validateUsername(username) {
    const minLength = 5;
    const hasUpperCase = /[A-Z]/.test(username);
    const hasLowerCase = /[a-z]/.test(username);
    return username.length >= minLength && hasUpperCase && hasLowerCase;
}

function validatePassword(password) {
    const minLength = 10;
    return password.length >= minLength;
}

function highlightField(field, isValid) {
    field.style.borderColor = isValid ? "green" : "red";
}

function resetField(field) {
    field.style.borderColor = "";
}