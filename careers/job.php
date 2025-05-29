<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/Gretex%20Corporate%20main/js/script.js"></script>

    <title>Careers - Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/Gretex%20Corporate%20main/css/careers/job.css">

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
                <a href="http://localhost/Gretex%20Corporate%20main">Home</a> / <a
                    href="http://localhost/Gretex%20Corporate%20main/careers/">Careers</a> / <span>Job</span>
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
                        <form action="" class="form-container">
                            <div class="form-field">
                                <label for="Name" class="label-field">Name<span class="form-required">*</span></label>
                                <input type="text" class="field" placeholder="Enter your Name here">
                            </div>

                            <div class="form-field">
                                <label for="email" class="label-field">Email<span class="form-required">*</span></label>
                                <input type="email" class="field" placeholder="Enter your Name here">
                            </div>

                            <div class="form-field">
                                <label for="phone" class="label-field">Phone<span class="form-required">*</span></label>
                                <input type="number" class="field" placeholder="Enter your Name here">
                            </div>

                            <div class="form-field">
                                <label for="message" class="label-field">Cover Letter<span
                                        class="form-required">*</span></label>
                                <textarea rows="8" cols="50" class="field"
                                    placeholder="Enter your cover letter here"></textarea>
                            </div>
                            <div class="submit-button">
                                <button class="about-button" href="">
                                    <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                    <span class="button-text">Submit Application</span>
                                    <i class="arrow-appear fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script src="<?php echo $baseUrl; ?>js/mobilemenu.js"></script>


</body>

</html>