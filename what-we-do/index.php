<?php include_once '../helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/Gretex%20Corporate%20main/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>What we do - Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/what-we-do/what-we-do-main.css">
</head>

<body>
    <?php include '../header.php'; ?>

    <div class="main-hero">
        <div class="hero-header">
            <h1>Empowering business with Financial Solutions</h1>
            <p>At Gretex, we are committed to maintaining strong and transparent relationships with our clients. We
                believe that open communication and timely disclosures are essential to building trust and credibility
                with our stakeholders</p>
        </div>
        <div class="hero-footer">
            <div class="breadcrumbs">
                <a href="<?php echo $baseUrl; ?>">Home</a> / <span>What we do</span>
            </div>
        </div>
    </div>

    <div class="general-container">

        <div class="about-services">
            <div class="about-service-row">
                <div class="about-service-col-left">
                    <p class="accent-text">Start with us</p>
                    <h2>Strategic Advisory for Growth, Capital & Compliance</h2>
                </div>
                <div class="about-service-col-right">
                    <p>we provide end-to-end financial and regulatory advisory that helps businesses raise capital,
                        manage change, and stay compliant with confidence. Our services are crafted for ambitious
                        startups, growing SMEs, large enterprises, and listed companies looking for expert-driven,
                        execution-ready solutions.</p>
                    <p>With a deep understanding of capital markets, corporate transactions, and compliance frameworks,
                        we go beyond advisory — we become your trusted partner in execution. From startups to listed
                        enterprises, we work closely with clients to unlock value, manage risk, and achieve strategic
                        clarity in an ever-evolving business environment.</p>
                </div>
            </div>
            <div class="about-service-metrics">
                <div class="about-services-metrics-row">
                    <div class="about-services-metrics-col">
                        <span>Years of experience</span>
                        <h2>10+</h2>
                    </div>
                    <div class="about-services-metrics-col">
                        <span>Years of experience</span>
                        <h2>10+</h2>
                    </div>
                    <div class="about-services-metrics-col">
                        <span>Years of experience</span>
                        <h2>10+</h2>
                    </div>
                    <div class="about-services-metrics-col">
                        <span>Years of experience</span>
                        <h2>10+</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-main-container">
        <div class="services-row">
            <div class="ghost-container">
                <div class="services-content-container">
                    <h2>Capital <br> Markets</h2>
                    <p>At the heart of every ambitious business lies the need for efficient capital. Our Capital Markets
                        advisory empowers companies to raise funds, unlock value, and meet regulatory objectives with
                        confidence.
                    </p>
                    <a href="<?php echo $baseUrl; ?>what-we-do/capital-markets"
                        class="know-more">Know more <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 24 24">
                            <path fill="#fff" fill-rule="evenodd"
                                d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                                clip-rule="evenodd" />
                        </svg></a>
                </div>
            </div>
            <div class="services-image-container">
                <img src="<?php echo $baseUrl; ?>assets/corporate-finance.png" alt="Corporate Finance">
            </div>
        </div>
    </div>

    <div class="services-main-container">
        <div class="services-row">
            <div class="services-image-container">
                <img src="<?php echo $baseUrl; ?>assets/corporate-finance.png" alt="Corporate Finance">
            </div>
            <div class="ghost-container">
                <div class="services-content-container-reverse">
                    <h2>Corporate <br> Finance</h2>
                    <p>We partner with businesses to unlock growth, optimize value, and secure the right capital at the
                        right time. Our Corporate Finance solutions are built on deep industry insights, rigorous
                        analysis, and a commitment to long-term value creation.
                    </p>
                    <a href="<?php echo $baseUrl; ?>what-we-do/corporate-finance/index.php"
                        class="know-more">Know more <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 24 24">
                            <path fill="#fff" fill-rule="evenodd"
                                d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                                clip-rule="evenodd" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>

    <div class="services-main-container">
        <div class="services-row">
            <div class="ghost-container">
                <div class="services-content-container">
                    <h2>Corporate <br> Restructuring</h2>
                    <p>In a rapidly evolving business landscape, strategic restructuring is key to staying competitive
                        and unlocking value. Our Corporate Restructuring services help companies realign their
                        structure, consolidate operations, and pursue growth opportunities through seamless execution
                        and regulatory compliance.
                    </p>
                    <a href="<?php echo $baseUrl; ?>what-we-do/corporate-restructuring/index.php"
                        class="know-more">Know more <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 24 24">
                            <path fill="#fff" fill-rule="evenodd"
                                d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                                clip-rule="evenodd" />
                        </svg></a>
                </div>
            </div>
            <div class="services-image-container">
                <img src="<?php echo $baseUrl; ?>assets/corporate-finance.png" alt="Corporate Finance">
            </div>
        </div>
    </div>

    <div class="services-main-container">
        <div class="services-row">
            <div class="services-image-container">
                <img src="<?php echo $baseUrl; ?>assets/corporate-finance.png" alt="Corporate Finance">
            </div>
            <div class="ghost-container">
                <div class="services-content-container-reverse">
                    <h2>Compliance <br> Advisory</h2>
                    <p>Compliance isn't just a checkbox — it's the foundation of smooth operations and credible
                        stakeholder relationships. We provide hands-on support to help you meet regulatory requirements
                        with accuracy and efficiency.
                    </p>
                    <a href="<?php echo $baseUrl; ?>what-we-do/compliance-advisory/index.php"
                        class="know-more">Know more <svg class="cta-arrow" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 24 24">
                            <path fill="#fff" fill-rule="evenodd"
                                d="M9 6.75a.75.75 0 0 1 0-1.5h9a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V7.81L6.53 18.53a.75.75 0 0 1-1.06-1.06L16.19 6.75z"
                                clip-rule="evenodd" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>

    <!-- service faq -->
    <div class="general-container faq-container">
        <div class="faq-header">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faqs">
            <div class="faq-col">
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is IPO?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>How to raise funds?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is Gretex?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is IPO?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>How to raise funds?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is Gretex?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
            </div>
            <div class="faq-col">
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is IPO?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>How to raise funds?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is Gretex?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is IPO?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>How to raise funds?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0Z"
                                fill="#141E47" />
                            <path
                                d="M20 30.0002L17.9423 22.0579L10 20.0002L17.9423 17.9425L20 10.0002L22.0577 17.9425L30 20.0002L22.0577 22.0579L20 30.0002Z"
                                fill="white" />
                        </svg>
                        <h2>What is Gretex?</h2>
                    </div>
                    <div class="faq-answer">
                        <p>We are absolutely glad to share our journey with Gretex. It has been a professional mentor &
                            advisor
                            for us. Their SME IPO expertise played a critical role in creating wealth, helping us get
                            listed.
                        </p>
                    </div>
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
                <a class="cta-button-main" href="<?php echo $baseUrl; ?>contact.php">
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


</body>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.custom-button-next',
            prevEl: '.custom-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    document.querySelectorAll('.faq-question').forEach(function (faqQuestion) {
        faqQuestion.addEventListener('click', function () {
            var faqItem = faqQuestion.closest('.faq-item');

            // Close all other FAQ items
            document.querySelectorAll('.faq-item').forEach(function (item) {
                if (item !== faqItem) {
                    item.classList.remove('open');
                }
            });

            // Toggle the clicked FAQ item (open/close)
            faqItem.classList.toggle('open');
        });
    });
</script>

</html>