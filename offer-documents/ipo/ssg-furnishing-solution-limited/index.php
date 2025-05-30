<?php include_once '../../helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo $baseUrl; ?>js/script.js"></script>

    <title>SSG Furnishing Solution Limited | Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/Ipo/ipo-global.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/Ipo/ssg-furnishing-solution-limited.css">

</head>

<body>

    <?php include '../../../header.php'; ?>

    <div class="main-hero">
        <div class="hero-header">
            <h1>SSG Furnishing Solution Limited</h1>
            <p>Veeram Ornaments Ltd (VOL) is an integrated Wholesaler, Trader & Retailer of
                branded Jewellery & Ornaments. VOL is also into trading business of silver and distributor of readymade
                gold & silver Jewellery & Ornaments.</p>
        </div>
        <div class="hero-footer">
            <div class="breadcrumbs">
                <a href="<?php echo $baseUrl; ?>">Home</a> / <a
                    href="<?php echo $baseUrl; ?>ipo">IPO</a> / <span>SSG Furnishing Solution
                    Limited</span>
            </div>
        </div>
    </div>

    <div class="document-container">
        <div class="document-row">

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

    <?php include '../../../footer.php'; ?>


</body>

</html>