<?php include_once '../../helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Business Details - Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/investor-relations/business-details.css">


</head>

<body>
    <?php include '../../header.php'; ?>

    <div class="main-hero">
        <div class="hero-header">
            <h1>Business Details</h1>
            <p>At Gretex, we are committed to maintaining strong and transparent relationships with our investors. We
                believe that open communication and timely disclosures are essential to building trust and credibility
                with our stakeholders</p>
        </div>
        <div class="hero-footer">
            <div class="breadcrumbs">
                <a href="<?php echo $baseUrl; ?>">Home</a> / <a
                    href="<?php echo $baseUrl; ?>investor-relations">Investor Relations</a> /
                <span>Business Details</span>
            </div>
        </div>
    </div>

    <div class="general-container">

    </div>


    <!-- Contact CTA section -->
    <div class="footer-cta-section">
        <div class="cta-section-left">
            <div class="cta-header">
                <h4>Fuel Your Company's Growth with Strategic Financial Solutions</h4>
                <p>Looking to expand your business, raise capital, or explore new financial opportunities? We
                    specialize in tailored merchant banking solutions that empower companies to scale with confidence.
                    Get in touch with us today and let's unlock new growth possibilities together.</p>
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

    <?php include '../../footer.php'; ?>
    <script src="<?php echo $baseUrl; ?>js/mobilemenu.js"></script>


</body>

</html>