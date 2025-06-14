<?php include_once '../helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $baseUrl; ?>js/script.js"></script>

    <title>Contact Us - Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/contact.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>
    <?php include '../header.php'; ?>

    <div class="main-hero">
        <div class="hero-header">
            <h1>Reach out to us</h1>
            <p>Have questions or looking for expert financial guidance? Our team is here to help. Whether you're
                exploring funding opportunities, strategic advisory, or corporate restructuring, we're ready to assist
            </p>
        </div>
        <div class="hero-footer">
            <div class="breadcrumbs">
                <a href="<?php echo $baseUrl; ?>">Home</a> / <span>Services</span>
            </div>
        </div>
    </div>

    <div class="general-container">
        <div class="contact-us-main">
            <div class="contact-content-main">

                <div class="contact-header-main">
                    <span>/ START WITH US /</span>
                    <h2>Opportunities Don't Wait. Neither Should You.</h2>
                    <p>In a market where timing is everything, early access to the right guidance can set you apart.
                        Connect with our experts today—because the best deals are already in motion..</p>
                </div>

                <div class="contact-content-info-main">
                    <div class="contact-content-box">
                        <div class="contact-icon-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M4.063 1.25h3.751a.75.75 0 0 1 .702.486l1.456 3.87a.75.75 0 0 1 .035.401l-.73 3.912c.897 2.108 2.378 3.525 4.833 4.796l3.865-.75a.75.75 0 0 1 .41.036l3.882 1.48a.75.75 0 0 1 .483.7v3.584c0 1.626-1.432 2.945-3.108 2.58c-3.053-.664-8.71-2.353-12.672-6.315c-3.796-3.795-5.068-9.037-5.495-11.87c-.245-1.618 1.052-2.91 2.588-2.91"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="contact-content-info">
                            <h3>Phone no: +91 98368 21999</h3>
                        </div>
                    </div>

                    <div class="contact-content-box">
                        <div class="contact-icon-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000"
                                    d="M4.616 19q-.691 0-1.153-.462T3 17.384V6.616q0-.691.463-1.153T4.615 5h14.77q.69 0 1.152.463T21 6.616v10.769q0 .69-.463 1.153T19.385 19zM12 12.116l8-5.231L19.692 6L12 11L4.308 6L4 6.885z" />
                            </svg>
                        </div>
                        <div class="contact-content-info">
                            <h3>info@gretexgroup.com</h3>
                        </div>
                    </div>

                    <div class="contact-content-box">
                        <div class="contact-icon-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000"
                                    d="M12 23C5.925 23 1 18.075 1 12S5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11m1-17.5h-2v6.914l4 4L16.414 15L13 11.586z" />
                            </svg>
                        </div>
                        <div class="contact-content-info">
                            <h3>Mon - Sat, 10:00 AM to 07:00 PM </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-main">
                <div class="contact-form-header">
                    <h3>Get in Touch</h3>
                </div>
                <div class="contact-form">
                    <form id="contactForm" class="main-form" action="../routers/contact-submit.php" method="POST">

                        <div class="form-group">
                            <div class="form-field">
                                <label for="Name" class="label-field">Name<span class="form-required">*</span></label>
                                <input type="text" name="name" class="field" placeholder="Enter your name here"
                                    required>
                            </div>
                            <div class="form-field">
                                <label for="Email" class="label-field">Email<span class="form-required">*</span></label>
                                <input type="email" name="email" class="field" placeholder="Enter your email here"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="Phone no" class="label-field">Phone No<span
                                        class="form-required">*</span></label>
                                <input type="tel" name="phone" class="field" placeholder="Enter your phone here"
                                    pattern="^\d{10}$" maxlength="10" required>
                            </div>
                            <div class="form-field">
                                <label for="Company Name" class="label-field">Company Name<span
                                        class="form-required">*</span></label>
                                <input type="text" name="company" class="field"
                                    placeholder="Enter your company name here" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label for="Revenue" class="label-field">Revenue<span
                                        class="form-required">*</span></label>
                                <select name="revenue" id="Revenue" required>
                                    <option value="" disabled selected>Select your revenue</option>
                                    <option value="50-100 CR">50 - 100 CR</option>
                                    <option value="100-500 CR">100 - 500 CR</option>
                                    <option value="500 CR Above">500 CR Above</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="Profit After Tax" class="label-field">Profit After Tax<span
                                        class="form-required">*</span></label>
                                <select name="profit" id="Revenue" required>
                                    <option value="" disabled selected>Select Profit After Tax</option>
                                    <option value="10-20 CR">10 - 20 CR</option>
                                    <option value="21-50 CR">21 - 50 CR</option>
                                    <option value="50-100 CR">50 - 100 CR</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label for="message" class="label-field">Message<span
                                        class="form-required">*</span></label>
                                <textarea name="message" rows="8" cols="50" class="field"
                                    placeholder="Enter your message here" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <div id="recaptcha-container" class="g-recaptcha" data-sitekey="6Ld1yF0rAAAAAPg6vUtMiHGJ-sZ_3iKHOioxnNpZ"></div>
                            </div>
                        </div>

                        <div class="submit-button">
                            <button type="submit" class="about-button">
                                <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                <span class="button-text">Submit Application</span>
                                <i class="arrow-appear fa-solid fa-arrow-right"></i>
                            </button>
                        </div>

                        <div class="form-group" id="contactDisclaimer">
                            <p>By submitting this form, you agree to our <a href="<?php echo $baseUrl; ?>privacy-policy"
                                    target="_blank">Privacy Policy</a>. We will use your information to respond to your
                                inquiry and provide you with the requested services.</p>
                        </div>

                    </form>
                    <p id="contactMessage" class="response-message"></p>
                </div>
            </div>
        </div>
    </div>


    <div class="office-location">
        <div class="office-location-image">

        </div>
        <div class="office-location-content">
            <div class="office-location-content-header">
                <h3>Registered Office Address</h3>
                <p>Wing - A/401, Naman Midtown, Senapati Bapat Marg, Prabhadevi, Mumbai - 400013</p>
            </div>
            <div class="office-cta">
                <a
                    href="https://www.google.com/maps/place/Gretex+Corporate+Services+Limited/@19.0090978,72.8321948,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7cfe1061bf1d3:0x5db1b088871191b!8m2!3d19.0090927!4d72.8347697!16s%2Fg%2F11g9n9wsjy?entry=ttu&g_ep=EgoyMDI1MDMxMC4wIKXMDSoASAFQAw%3D%3D">
                    <span class="button-text">Get Directions</span>
                    <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="branch-offices">
        <div class="branch-offices-header">
            <h2>You can also Visit</h2>
        </div>
        <div class="branch-office-row">
            <div class="branch-office-col">
                <div class="branch-image">
                    <img src="<?php echo $baseUrl; ?>assets/one-bkc.png" alt="">
                </div>
                <div class="branch-address">
                    <h3>Corporate Office Address</h3>
                    <p>Office No. 1220, 12th Floor, B wing, One BKC, Plot No C-66, G Block, Bandra Kurla Complex,
                        Bandra East- Mumbai 400051</p>
                </div>
            </div>
            <div class="branch-office-col">
                <div class="branch-image">
                    <img src="<?php echo $baseUrl; ?>assets/one-bkc.png" alt="">
                </div>
                <div class="branch-address">
                    <h3>Corporate Office Address</h3>
                    <p>90, Phears Lane, 5th Floor,<br> Kolkata-700012</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact CTA section -->
    <div class="footer-cta-section">
        <div class="cta-section-left">
            <div class="cta-header">
                <h4>Fuel Your Company's Growth with Strategic Financial Solutions</h4>
                <p>Looking to expand your business, raise capital, or explore new financial opportunities? We specialize
                    in tailored merchant banking solutions that empower companies to scale with confidence. Get in touch
                    with us today and let's unlock new growth possibilities together.</p>
            </div>
            <div class="cta-section-button">
                <a class="cta-button-main" href="<?php echo $baseUrl; ?>contact">
                    <span class="button-text">Contact us</span>
                    <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 24 24">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="cta-section-right">

        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script src="<?php echo $baseUrl; ?>js/mobilemenu.js"></script>

    <script>
        document.querySelector('input[name="phone"]').addEventListener('input', function (e) {
            this.value = this.value.replace(/[^\d]/g, '').slice(0, 10); // Only digits, max 10
        });


        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('.main-form');
            const thankYouMessage = document.getElementById('contactMessage'); // message container
            const recaptchaContainer = document.getElementById('recaptcha-container'); // div around recaptcha

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Clear previous error states
                form.querySelectorAll('.field, select, textarea').forEach(field => {
                    field.style.border = '';
                });
                recaptchaContainer.classList.remove('error');

                let isValid = true;
                const formData = new FormData(form);

                // Check for empty required fields
                ['name', 'email', 'phone', 'company', 'revenue', 'profit', 'message'].forEach(name => {
                    const input = form.querySelector(`[name="${name}"]`);
                    if (!formData.get(name)) {
                        input.style.border = '1px solid red';
                        isValid = false;
                    }
                });

                // Validate phone
                const phone = formData.get('phone');
                if (!/^\d{10}$/.test(phone)) {
                    const phoneInput = form.querySelector('[name="phone"]');
                    phoneInput.style.border = '1px solid red';
                    isValid = false;
                }

                // Check reCAPTCHA
                if (grecaptcha.getResponse().length === 0) {
                    recaptchaContainer.classList.add('error');
                    recaptchaContainer.setAttribute('title', 'Captcha is required');
                    isValid = false;
                }

                if (!isValid) return;

                // Submit via fetch
                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.text())
                    .then(response => {
                        form.style.display = 'none';
                        thankYouMessage.textContent = response;
                        thankYouMessage.style.display = 'block';
                    })
                    .catch(() => {
                        form.style.display = 'none';
                        thankYouMessage.textContent = 'Something went wrong. Please try again.';
                        thankYouMessage.style.display = 'block';
                    });
            });
        });
    </script>

</body>


</html>