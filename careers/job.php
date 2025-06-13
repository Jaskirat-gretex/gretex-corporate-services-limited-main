<?php include_once '../helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $baseUrl; ?>js/script.js"></script>

    <title>Careers - Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/careers/job.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <?php include '../header.php'; ?>

    <div class="main-hero">
        <div class="hero-header">
            <h1>Job Title</h1>
            <p>At Gretex, we are always looking for talented individuals to join our team. If you are passionate about
                what you do and are looking for a challenging yet rewarding career, we would love to hear from you.</p>
        </div>
        <div class="hero-footer">
            <div class="breadcrumbs">
                <a href="<?php echo $baseUrl; ?>">Home</a> / <a href="<?php echo $baseUrl; ?>careers/">Careers</a> /
                <span>Job</span>
            </div>
        </div>
    </div>

    <div class="general-container">
        <div class="core-job-info">
            <div class="job-info">
                <div class="job-overview">
                    <h2>Overview</h2>
                    <p>As a Performance Marketing Intern at Gretex, you will have the opportunity to gain hands-on
                        experience in digital marketing while supporting the execution of performance-driven campaigns
                        to
                        promote our banking products and services.</p>
                </div>
                <div class="job-responsibilities">
                    <h2>Key Responsibilities</h2>
                    <p>Assist in the development and implementation of performance marketing strategies to achieve
                        business objectives, including customer acquisition, lead generation, and revenue growth.
                        Support the execution of digital marketing campaigns across various channels</p>
                    <p>
                        Help monitor and analyze campaign performance metrics, such as CTR, CPC, CPA, ROI, and ROAS, and
                        contribute insights to
                        optimize campaign effectiveness. Collaborate with cross-functional teams. Stay updated on
                        industry
                        trends, best practices, and emerging technologies in performance marketing to contribute to
                        innovative
                        campaign strategies. Assist in preparing regular reports and presentations on campaign
                        performance.</p>
                </div>
                <div class="job-qualifications">
                    <h2>Qualifications</h2>
                    <ul>
                        <li>Currently enrolled in a Bachelor's degree program in Marketing, Advertising, Business, or
                            related field.</li>
                        <li>Strong interest in digital marketing and eagerness to learn about performance marketing in
                            the
                            financial services industry</li>
                        <li>Understanding of digital marketing concepts and platforms, such as Google Ads, Facebook Ads,
                            LinkedIn Ads, etc. </li>
                        <li>Analytical mindset with the ability to interpret data and draw insights to support decision
                            making. Excellent communication and teamwork skills, with a willingness to collaborate
                            across
                            teams and departments.</li>
                        <li>Self-motivated and proactive attitude with a strong desire to contribute and learn in a fast
                            paced environment.</li>
                        <li>Knowledge of financial products and services, banking regulations, and compliance
                            requirements
                            is a plus.</li>
                    </ul>
                </div>
            </div>

            <div class="job-vitals">
                <div class="apply-form">
                    <h2>Apply Now</h2>

                    <div class="job-form">
                        <form action="../routers/job-application.php" enctype="multipart/form-data"
                            class="form-container" id="jobForm" method="POST">
                            <div class="form-field">
                                <label for="Name" class="label-field">Name<span class="form-required">*</span></label>
                                <input type="text" name="name" class="field" placeholder="Enter your Name here"
                                    required>
                            </div>

                            <div class="form-field">
                                <label for="email" class="label-field">Email<span class="form-required">*</span></label>
                                <input type="email" name="email" class="field" placeholder="Enter your Name here"
                                    required>
                            </div>

                            <div class="form-field">
                                <label for="phone" class="label-field">Phone<span class="form-required">*</span></label>
                                <input type="tel" name="phone" class="field" placeholder="Enter your phone here"
                                    pattern="^\d{10}$" maxlength="10" required>
                            </div>

                            <div class="form-field">
                                <label for="message" class="label-field">Cover Letter<span
                                        class="form-required">*</span></label>
                                <textarea rows="8" cols="50" name="message" class="field"
                                    placeholder="Enter your cover letter here" required></textarea>
                            </div>

                            <div class="form-field">
                                <label for="cv" class="label-field">Upload CV (only PDF or Word supported) <span
                                        class="form-required">*</span></label>
                                <input type="file" name="cv" accept=".pdf,.doc,.docx" id="" required>
                            </div>

                            <div class="form-group">
                                <div class="form-field">
                                    <div id="recaptcha-container" class="g-recaptcha"
                                        data-sitekey="6Ld1yF0rAAAAAPg6vUtMiHGJ-sZ_3iKHOioxnNpZ"></div>
                                </div>
                            </div>

                            <div class="submit-button">
                                <button class="about-button" href="">
                                    <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                    <span class="button-text">Submit Application</span>
                                    <i class="arrow-appear fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <div class="form-group" id="formDisclaimer">
                                <p>By submitting this form, you agree to our <a
                                        href="<?php echo $baseUrl; ?>privacy-policy" target="_blank">Privacy Policy</a>.
                                    We will use your information to respond to your
                                    inquiry and provide you with the requested services.</p>
                            </div>
                        </form>
                        <p id="response-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script src="<?php echo $baseUrl; ?>js/mobilemenu.js"></script>

    <script>
        document.querySelector('input[name="phone"]').addEventListener('input', function (e) {
            this.value = this.value.replace(/[^\d]/g, '').slice(0, 10); // Only digits, max 10
        });

        document.getElementById('jobForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const responseBox = document.getElementById('response-message');

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData
                });

                const result = await response.text();

                // Success message
                if (result.includes('Thank you')) {
                    form.style.display = 'none';
                    responseBox.textContent = 'Thank you for submitting your application!';
                    responseBox.style.color = 'green';
                } else {
                    // Error message
                    responseBox.textContent = result;
                    responseBox.style.color = 'red';
                }
            } catch (err) {
                responseBox.textContent = 'Something went wrong. Please try again.';
                responseBox.style.color = 'red';
            }
        });


    </script>


</body>

</html>