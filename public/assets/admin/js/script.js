// Corporate Donation Form Script
document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const donationForm = document.getElementById('donationForm');
    const amountCustomRadio = document.getElementById('amountCustom');
    const customAmountContainer = document.querySelector('.custom-amount-container');
    const customAmountInput = document.getElementById('customAmount');
    const cardNumberInput = document.getElementById('cardNumber');
    const expirationDateInput = document.getElementById('expDate');
    const donateButton = document.getElementById('donateButton');
    const processingIndicator = document.getElementById('processingIndicator');
    const thankYouMessage = document.getElementById('thankYouMessage');
    const newDonationBtn = document.getElementById('newDonationBtn');

    // Set up event listeners
    setupDonationAmountOptions();
    setupFormValidation();
    // setupCreditCardFormatting();

    // Handle Form Submission
    donationForm.addEventListener('submit', handleFormSubmit);

    // Handle "Make Another Donation" button
    newDonationBtn.addEventListener('click', resetForm);

    /**
     * Set up donation amount options behavior
     */
    function setupDonationAmountOptions() {
        // Show/hide custom amount field based on selection
        const radioButtons = document.querySelectorAll('input[name="donationAmount"]');

        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                if (amountCustomRadio.checked) {
                    customAmountContainer.classList.remove('hidden');
                    customAmountInput.setAttribute('required', true);
                    customAmountInput.focus();
                } else {
                    customAmountContainer.classList.add('hidden');
                    customAmountInput.removeAttribute('required');
                }
            });
        });
    }

    /**
     * Set up real-time form validation
     */
    function setupFormValidation() {
        // Email validation
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('blur', function() {
            const email = emailInput.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailPattern.test(email)) {
                emailInput.style.borderColor = '#f44336';
                showValidationMessage(emailInput, 'Please enter a valid email address');
            } else {
                emailInput.style.borderColor = '';
                removeValidationMessage(emailInput);
            }
        });

        // Phone validation
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('blur', function() {
            const phone = phoneInput.value.trim().replace(/\D/g, '');

            if (phone && phone.length < 10) {
                phoneInput.style.borderColor = '#f44336';
                showValidationMessage(phoneInput, 'Please enter a valid phone number');
            } else {
                phoneInput.style.borderColor = '';
                removeValidationMessage(phoneInput);
            }
        });

        // Custom amount validation
        customAmountInput.addEventListener('input', function() {
            const amount = parseFloat(customAmountInput.value);

            if (isNaN(amount) || amount < 100) {
                customAmountInput.style.borderColor = '#f44336';
                showValidationMessage(customAmountInput, 'Minimum donation amount is $100');
            } else {
                customAmountInput.style.borderColor = '';
                removeValidationMessage(customAmountInput);
            }
        });
    }

    /**
     * Set up credit card input formatting
     */
    // function setupCreditCardFormatting() {
    //     // Format card number with spaces
    //     cardNumberInput.addEventListener('input', function(e) {
    //         let value = e.target.value.replace(/\s+/g, '').replace(/\D/g, '');
    //         let formatted = '';

    //         for (let i = 0; i < value.length; i++) {
    //             if (i > 0 && i % 4 === 0) {
    //                 formatted += ' ';
    //             }
    //             formatted += value[i];
    //         }

    //         e.target.value = formatted;
    //     });

    //     // Format expiration date with slash
    //     expirationDateInput.addEventListener('input', function(e) {
    //         let value = e.target.value.replace(/\D/g, '');

    //         if (value.length > 2) {
    //             value = value.substring(0, 2) + '/' + value.substring(2, 4);
    //         }

    //         e.target.value = value;
    //     });
    // }

    /**
     * Show validation message below input
     */
    function showValidationMessage(element, message) {
        removeValidationMessage(element);

        const errorMessage = document.createElement('div');
        errorMessage.className = 'validation-message';
        errorMessage.textContent = message;
        errorMessage.style.color = '#f44336';
        errorMessage.style.fontSize = '0.85rem';
        errorMessage.style.marginTop = '0.25rem';

        element.parentNode.appendChild(errorMessage);
    }

    /**
     * Remove validation message
     */
    function removeValidationMessage(element) {
        const existingMessage = element.parentNode.querySelector('.validation-message');
        if (existingMessage) {
            existingMessage.remove();
        }
    }

    /**
     * Handle form submission
     */
    function handleFormSubmit(e) {
        e.preventDefault();

        // Validate form
        if (!validateForm()) {
            return;
        }

        // Show processing indicator
        donateButton.classList.add('hidden');
        processingIndicator.classList.remove('hidden');

        // Simulate API call (would be replaced with actual payment processing)
        setTimeout(function() {
            // Hide form and show thank you message
            donationForm.classList.add('hidden');
            thankYouMessage.classList.remove('hidden');

            // Reset processing state
            donateButton.classList.remove('hidden');
            processingIndicator.classList.add('hidden');

            // Log form data for demonstration purposes
            console.log('Donation processed successfully');
            console.log('Form data:', collectFormData());
        }, 2000);
    }

    /**
     * Validate the entire form before submission
     */
    function validateForm() {
        let isValid = true;

        // Check required fields
        const requiredInputs = donationForm.querySelectorAll('[required]');
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                input.style.borderColor = '#f44336';
                isValid = false;
            } else {
                input.style.borderColor = '';
            }
        });

        // Check donation amount is selected
        const donationSelected = document.querySelector('input[name="donationAmount"]:checked');
        if (!donationSelected) {
            isValid = false;
            alert('Please select a donation amount');
        }

        // Validate custom amount if selected
        if (amountCustomRadio.checked) {
            const amount = parseFloat(customAmountInput.value);
            if (isNaN(amount) || amount < 100) {
                customAmountInput.style.borderColor = '#f44336';
                showValidationMessage(customAmountInput, 'Minimum donation amount is $100');
                isValid = false;
            }
        }

        // Validate card number (simple validation for demo)
        const cardNumber = cardNumberInput.value.replace(/\s+/g, '');
        if (cardNumber.length < 16) {
            cardNumberInput.style.borderColor = '#f44336';
            showValidationMessage(cardNumberInput, 'Please enter a valid card number');
            isValid = false;
        }

        // Validate expiration date
        const expDate = expirationDateInput.value;
        if (!expDate.match(/^\d{2}\/\d{2}$/)) {
            expirationDateInput.style.borderColor = '#f44336';
            showValidationMessage(expirationDateInput, 'Please enter a valid expiration date (MM/YY)');
            isValid = false;
        }

        return isValid;
    }

    /**
     * Collect all form data into an object
     */
    function collectFormData() {
        const formData = {};

        // Company information
        formData.companyName = document.getElementById('companyName').value;
        formData.contactName = document.getElementById('contactName').value;
        formData.email = document.getElementById('email').value;
        formData.phone = document.getElementById('phone').value;

        // Donation details
        const donationAmount = document.querySelector('input[name="donationAmount"]:checked').value;
        formData.donationAmount = donationAmount === 'custom'
            ? document.getElementById('customAmount').value
            : donationAmount;

        formData.frequency = document.getElementById('frequency').value;
        formData.projectAllocation = document.getElementById('projectAllocation').value;

        // Options
        formData.receiveReceipt = document.getElementById('receiveReceipt').checked;
        formData.recognition = document.getElementById('recognition').checked;
        formData.newsletter = document.getElementById('newsletter').checked;

        return formData;
    }

    /**
     * Reset the form to start over
     */
    function resetForm() {
        donationForm.reset();
        donationForm.classList.remove('hidden');
        thankYouMessage.classList.add('hidden');
        customAmountContainer.classList.add('hidden');

        // Clear any validation styling
        const inputs = donationForm.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.style.borderColor = '';
            removeValidationMessage(input);
        });
    }
});





document.addEventListener('DOMContentLoaded', () => {
    // Get form elements
    const form = document.getElementById('registrationForm');
    const sections = document.querySelectorAll('.form-section');
    const nextButtons = document.querySelectorAll('.next-btn');
    const prevButtons = document.querySelectorAll('.prev-btn');
    const progressBar = document.getElementById('formProgress');
    const formSuccess = document.getElementById('formSuccess');

    // Calculate total sections
    const totalSections = sections.length;

    // Handle next button clicks
    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Get the next section ID
            const nextSectionId = button.getAttribute('data-next');
            const nextSection = document.getElementById(nextSectionId);
            const currentSection = button.closest('.form-section');

            // Validate current section before proceeding
            if (validateSection(currentSection)) {
                // Hide current section
                currentSection.classList.remove('active');

                // Show next section
                nextSection.classList.add('active');

                // Update progress bar
                updateProgress();
            }
        });
    });

    // Handle previous button clicks
    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Get the previous section ID
            const prevSectionId = button.getAttribute('data-prev');
            const prevSection = document.getElementById(prevSectionId);
            const currentSection = button.closest('.form-section');

            // Hide current section
            currentSection.classList.remove('active');

            // Show previous section
            prevSection.classList.add('active');

            // Update progress bar
            updateProgress();
        });
    });

    // Handle form submission
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Get the active section
        const activeSection = document.querySelector('.form-section.active');

        // Validate the active section
        if (validateSection(activeSection)) {
            // Simulate form submission with a delay
            const submitButton = document.querySelector('.submit-btn');
            submitButton.disabled = true;
            submitButton.textContent = 'Processing...';

            setTimeout(() => {
                // Hide the form
                form.style.display = 'none';

                // Show success message
                formSuccess.style.display = 'block';

                // Reset the form (optional)
                form.reset();
            }, 1500);
        }
    });

    // Function to validate a section
    function validateSection(section) {
        let isValid = true;

        // Get all required inputs in the section
        const requiredInputs = section.querySelectorAll('[required]');

        // Check each required input
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                showError(input, 'This field is required');
            } else {
                clearError(input);

                // Additional validation based on input type
                if (input.type === 'email' && !validateEmail(input.value)) {
                    isValid = false;
                    showError(input, 'Please enter a valid email address');
                } else if (input.id === 'phone' && !validatePhone(input.value)) {
                    isValid = false;
                    showError(input, 'Please enter a valid phone number');
                } else if (input.id === 'serialNumber' && !validateSerialNumber(input.value)) {
                    isValid = false;
                    showError(input, 'Serial number must be alphanumeric with 10-15 characters');
                }
            }
        });

        return isValid;
    }

    // Function to show error message
    function showError(input, message) {
        // Remove any existing error message
        clearError(input);

        // Create error message element
        const errorMessage = document.createElement('div');
        errorMessage.className = 'error-message';
        errorMessage.textContent = message;
        errorMessage.style.color = 'var(--error)';
        errorMessage.style.fontSize = '0.8rem';
        errorMessage.style.marginTop = '0.25rem';

        // Add red border to input
        input.style.borderColor = 'var(--error)';

        // Insert error message after the input
        input.parentNode.insertBefore(errorMessage, input.nextSibling);

        // Focus on the input
        input.focus();
    }

    // Function to clear error message
    function clearError(input) {
        // Reset input border
        input.style.borderColor = '';

        // Remove error message if it exists
        const parent = input.parentNode;
        const errorMessage = parent.querySelector('.error-message');
        if (errorMessage) {
            parent.removeChild(errorMessage);
        }
    }

    // Function to validate email format
    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Function to validate phone number
    function validatePhone(phone) {
        // Basic validation - can be customized based on requirements
        const regex = /^\+?[0-9\s\-\(\)]{8,20}$/;
        return regex.test(phone);
    }

    // Function to validate serial number
    function validateSerialNumber(serial) {
        // Alphanumeric, 10-15 characters
        const regex = /^[a-zA-Z0-9]{10,15}$/;
        return regex.test(serial);
    }

    // Function to update progress bar
    function updateProgress() {
        // Find the index of the active section
        const activeSectionIndex = [...sections].findIndex(section =>
            section.classList.contains('active')
        );

        // Calculate progress percentage
        const progress = ((activeSectionIndex + 1) / totalSections) * 100;

        // Update progress bar width
        progressBar.style.width = `${progress}%`;
    }

    // Add input event listeners to clear errors when user types
    const allInputs = document.querySelectorAll('input, textarea, select');
    allInputs.forEach(input => {
        input.addEventListener('input', () => {
            clearError(input);
        });
    });

    // Initialize form
    updateProgress();
});
