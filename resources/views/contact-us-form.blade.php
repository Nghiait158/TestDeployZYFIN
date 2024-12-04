<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZYFIN_TrinhVanTrungNghia</title>
    <link rel="stylesheet" href="{{('/Frontend/css/contact.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>
<body>
    <div class="contact-form">
        <div class="image-section">
            <img src="{{ ('/Frontend/img/hand2.jpg') }}" alt="" > 
            <div class="text-overlay">
                <h1>Let's create something great together</h1>
                <p>Our team will contact you soon.</p>
            </div>
        </div>
        <div class="form-section">
            <form id="contactForm" action="{{URL::to('/saveinfoContact')}}" method="post">
                @csrf
                <h2>Contact details</h2>
                <div class="input-form">
                    <input type="text" class="input-field" name="contactName" id="contactName" placeholder="" >
                    <label for="contactName" class="label">Name<span>*</span></label>
                    <span id="nameError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                </div>
                <div class="email_country">
                    <div class="input-form">
                        <input type="text" class="input-field" name="contactEmail" id="contactEmail" placeholder="" >
                        <label for="contactEmail" class="label">E-mail address<span>*</span></label>
                        <span id="emailError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                    </div>
                    <div class="input-form">
                        <input type="text" class="input-fieldCountry" name="contactCountry" id="contactCountry" placeholder="Country" >
                    </div>
                </div>
                <div class="input-form">
                    <input type="text" class="input-field" name="contactCompany" id="contactCompany" placeholder="" >
                    <label for="contactCompany" class="label">Company Name<span>*</span></label>
                    <span id="companyError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                </div>
            
                <div class="input-form">
                    <select class="input-fieldSupport" name="contactSupport" id="contactSupport" required>
                        <option value="" disabled selected></option> 
                        <option value="Sales">Sales</option>
                        <option value="Career">Career</option>
                        <option value="Partnership">Partnership</option>
                        <option value="Billing">Billing</option>
                        <option value="Media">Media</option>
                        <option value="Others">Others</option>
                    </select>
                    <label class="label" for="contactSupport">Choose support<span>*</span></label>
                    <span id="supportError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                </div>
            
                <h2>Project details</h2>
                <div class="input-form">
                    <textarea id="contactDetails" class="input-field" name="contactDetails" ></textarea>
                    <label for="contactDetails" class="label">How can we help you?<span>*</span></label>
                    <span id="detailsError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                </div>
                <h5>* Required Fields</h5>
                <div class="checkbox">
                    <input type="checkbox" id="privacy" required>
                    <label for="privacy">
                        I agree to share my information with NashTech as per the <a href="/privacy">privacy policy</a>.
                    </label>
                    <span id="privacyError" class="error"></span> <!-- Đảm bảo id là duy nhất -->
                </div>
                
                <button type="submit" id="submitBtn" disabled>Submit</button>
            </form>
            
        </div>
    </div>
    <script>
        const input = document.querySelector("#contactCountry");
        const iti = window.intlTelInput(input, {
            initialCountry: "us", 
            preferredCountries: ["us", "vn"],
            separateDialCode: false, 
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" 
        });

        const countryData = iti.getSelectedCountryData();
        input.value = countryData.name;

        input.addEventListener("countrychange", function () {
            const updatedCountryData = iti.getSelectedCountryData();
            input.value = updatedCountryData.name;
        });
        input.addEventListener("click", function () {
            iti.open(); 
        });

        const checkbox = document.getElementById('privacy');
        const submitButton = document.getElementById('submitBtn');

        checkbox.addEventListener('change', function () {
            if (checkbox.checked) {
                submitButton.disabled = false;
                submitButton.classList.add('active');  
            } else {
                submitButton.disabled = true;
                submitButton.classList.remove('active');  
            }
        });


// -----------------Validation--------

        document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); 

        let isValid = true; 

        document.querySelectorAll('.error').forEach(function(error) {
            error.textContent = '';
        });
        const contactName = document.getElementById('contactName');
        if (contactName.value.trim() === '') {
            document.getElementById('nameError').textContent = 'Name is required';
            isValid = false;
        }

        const contactEmail = document.getElementById('contactEmail');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (contactEmail.value.trim() === '') {
            document.getElementById('emailError').textContent = 'Email is required';
            isValid = false;
        } else if (!emailPattern.test(contactEmail.value)) {
            document.getElementById('emailError').textContent = 'Invalid email format';
            isValid = false;
        }

        const contactCompany = document.getElementById('contactCompany');
        if (contactCompany.value.trim() === '') {
            document.getElementById('companyError').textContent = 'Company Name is required';
            isValid = false;
        }

        const contactDetails = document.getElementById('contactDetails');
        if (contactDetails.value.trim() === '') {
            document.getElementById('detailsError').textContent = 'Details are required';
            isValid = false;
        }

        if (isValid) {
            document.getElementById('contactForm').submit();
        }
    });

    </script>
</body>
</html>