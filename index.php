<?php include_once 'helpers/urlfetcher.php'; ?>
<?php $baseUrl = getBaseUrl(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Gretex Corporate Services Limited</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>css/index.css">

</head>

<body>

    <?php include "header.php"; ?>

    <!-- Main Carousel -->
    <div class="slider">
        <!-- Slider main container -->
        <div class="swiper swiper-main">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div id="slide-1" class="background-image"
                        style="background: linear-gradient(89.53deg, rgba(0, 0, 0, 0.8) 38.02%, rgba(0, 0, 0, 0.3) 60.4%, rgba(0, 0, 0, 0) 71.79%), url(assets/swiper-main-image.png); height: 100vh;">
                        <div class="main-tagline" id="main-headline-text">
                            <h1 class="headline">Don't just look for money, Look for the right Advisors!</h1>
                            <p class="description">Gretex is a SEBI Registered Category- I Merchant Banker with
                                established track record of more than 6 years in the Merchant Banking field. We earned
                                the prestigious award as a 'Top Volume Performer for SME IPO in India in FY 2017-18 and
                                FY 2020-21' by BSE Limited.</p>

                            <div class="cta-buttons">
                                <a class="main-cta-button" href="<?php echo $baseUrl; ?>what-we-do">
                                    <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                    <span class="button-text">Our Services</span>
                                    <i class="arrow-appear fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div id="slide-2" class="background-image"
                        style="background: linear-gradient(89.53deg, rgba(0, 0, 0, 0.8) 38.02%, rgba(0, 0, 0, 0.3) 60.4%, rgba(0, 0, 0, 0) 71.79%), url(assets/swiper-main-image.png); height: 100vh;">
                        <div class="main-tagline" id="main-headline-text">
                            <h1 class="headline">Don't just look for money, Look for the right Advisors!</h1>
                            <p class="description">Gretex is a SEBI Registered Category- I Merchant Banker with
                                established track record of more than 6 years in the Merchant Banking field. We earned
                                the prestigious award as a 'Top Volume Performer for SME IPO in India in FY 2017-18 and
                                FY 2020-21' by BSE Limited.</p>

                            <div class="cta-buttons">
                                <a class="about-button" href="<?php echo $baseUrl; ?>what-we-do">
                                    <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                    <span class="button-text">Our Services</span>
                                    <i class="arrow-appear fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div id="slide-3" class="background-image"
                        style="background: linear-gradient(89.53deg, rgba(0, 0, 0, 0.8) 38.02%, rgba(0, 0, 0, 0.3) 60.4%, rgba(0, 0, 0, 0) 71.79%), url(assets/swiper-main-image.png); height: 100vh;">
                        <div class="main-tagline" id="main-headline-text">
                            <h1 class="headline">Don't just look for money, Look for the right Advisors!</h1>
                            <p class="description">Gretex is a SEBI Registered Category- I Merchant Banker with
                                established track record of more than 6 years in the Merchant Banking field. We earned
                                the prestigious award as a 'Top Volume Performer for SME IPO in India in FY 2017-18 and
                                FY 2020-21' by BSE Limited.</p>

                            <div class="cta-buttons">
                                <a class="about-button" href="<?php echo $baseUrl; ?>what-we-do">
                                    <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                                    <span class="button-text">Our Services</span>
                                    <i class="arrow-appear fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swipe-buttons">
                <div class="button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <div class="button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="general-container">
        <div class="about-gretex">

            <div class="about-visual">
                <div class="about-video-container">
                    <img src="assets/corporate.png" alt="">
                    <div class="about-video-play play-button" id="playButton">
                        <div class="play-button-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"
                                class="play-icon">
                                <defs>
                                    <mask id="ipSPlay0">
                                        <g fill="none" stroke-linejoin="round" stroke-width="4">
                                            <path fill="#fff" stroke="#fff"
                                                d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" />
                                            <path fill="#000" stroke="#000"
                                                d="M20 24v-6.928l6 3.464L32 24l-6 3.464l-6 3.464z" />
                                        </g>
                                    </mask>
                                </defs>
                                <path fill="#000" d="M0 0h48v48H0z" mask="url(#ipSPlay0)" />
                            </svg>
                            <div class="pulse-circle"></div>
                            <div class="pulse-circle"></div>
                        </div>
                        <span>Play video</span>
                    </div>
                </div>
                <div id="lightbox" class="lightbox hidden">
                    <button id="closeButton" class="close-button">&times;</button>
                    <div class="lightbox-content">
                        <video class="story-media" id="lightboxVideo" controls>
                            <source src="assets/videos/360onejourney_77d57ed114.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="about-metrics">
                    <div class="metric metric-1">
                        <h3 class="number" data-target="51" data-format="+">0</h3>
                        <p class="metric-description">No. of IPOs <br> Completed</p>
                    </div>
                    <div class="metric metric-2">
                        <h3 class="number" data-target="673.74" data-format="₹Cr">0</h3>
                        <p class="metric-description">Total Funds <br> raised</p>
                    </div>
                    <div class="metric metric-3">
                        <h3 class="number" data-target="5252.84" data-format="₹Cr">0</h3>
                        <p class="metric-description">Total Market Cap <br> (as of 8/03/2024)</p>
                    </div>
                </div>
            </div>

            <div class="about-content">
                <div class="content-header">
                    <h2>Welcome to a new era of Merchant Banking</h2>
                </div>
                <div class="content-body">
                    <p>Gretex is a SEBI Registered Category- I Merchant Banker with established track record of more
                        than 6 years in the Merchant Banking field.</p>
                    <p>We earned the prestigious award as a 'Top Volume Performer for SME IPO in India in FY 2017-18 and
                        FY 2020-21' by BSE Limited. Wealth Creation and providing Unique Solutions for clients is our
                        forte. We achieved the reputation of one of the Top Financial and Consultancy firms in India,
                        providing quality services in the space of IPO, Valuation, Corporate Advisory and other
                        financial services.</p>
                </div>
                <div class="about-cta">
                    <a class="about-button" href="<?php echo $baseUrl; ?>what-we-do">
                        <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                        <span class="button-text">Our Services</span>
                        <i class="arrow-appear fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="services-main">
        <div class="services-main-header">
            <span>What We Do</span>
            <h2>Delivering Financial Advisiory To Our Clients</h2>
        </div>
        <div class="services-main-content">
            <!-- Slider main container -->
            <div class="services-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <div class="swiper-slide">
                        <div class="services-container">
                            <div class="services-container-image">
                                <img src="./assets/capital-markets-thumbnail.png" alt="">
                            </div>
                            <div class="services-container-content">
                                <h3>Capital Markets</h3>
                                <p>End-to-end capital market solutions for fundraising, regulatory compliance, and
                                    successful market entry or listing.</p>
                                <a href="<?php echo $baseUrl; ?>what-we-do/capital-markets"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-container">
                            <div class="services-container-image">
                                <img src="./assets/corporate-finance-thumbnail.png" alt="">
                            </div>
                            <div class="services-container-content">
                                <h3>Corporate Finance</h3>
                                <p>Customized financial strategies that align capital structure with long-term business
                                    objectives and growth opportunities.</p>
                                <a href="<?php echo $baseUrl; ?>corporate-finance"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-container">
                            <div class="services-container-image">
                                <img src="./assets/corporate-restructuring-min.png" alt="">
                            </div>
                            <div class="services-container-content">
                                <h3>Corporate Restructuring</h3>
                                <p>Strategic restructuring services to optimize operations, restore financial health,
                                    and enhance shareholder value.</p>
                                <a href="<?php echo $baseUrl; ?>what-we-do/corporate-restructuring"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-container">
                            <div class="services-container-image">
                                <img src="./assets/corporate-advisiory-thumbnail.png" alt="">
                            </div>
                            <div class="services-container-content">
                                <h3>Compliance Advisiory</h3>
                                <p>End-to-end regulatory guidance to ensure corporate compliance, reduce risk, and build
                                    stakeholder trust..</p>
                                <a href="<?php echo $baseUrl; ?>what-we-do/compliance-advisiory"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="services-custom-buttons">
                <div class="service-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <div class="service-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>

        </div>
    </div>


    <div class="core-usps">
        <div class="usp-image-container">
            <img src="<?php echo $baseUrl; ?>assets/employees-working.png" alt="">
        </div>
        <div class="usp-header">
            <span>Our Capabilities</span>
            <h2>Client focused, Data Driven Approach</h2>
        </div>
        <div class="usp-main">
            <div class="usp-main-row">
                <div class="usp-col">
                    <div class="usp-icon-box">
                        <svg id="fi_2438078" enable-background="new 0 0 512 512" height="96" viewBox="0 0 512 512"
                            width="96" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m459.669 82.906-196-81.377c-4.91-2.038-10.429-2.039-15.338 0l-196 81.377c-7.465 3.1-12.331 10.388-12.331 18.471v98.925c0 136.213 82.329 258.74 208.442 310.215 4.844 1.977 10.271 1.977 15.116 0 126.111-51.474 208.442-174.001 208.442-310.215v-98.925c0-8.083-4.865-15.371-12.331-18.471zm-27.669 117.396c0 115.795-68 222.392-176 269.974-105.114-46.311-176-151.041-176-269.974v-85.573l176-73.074 176 73.074zm-198.106 67.414 85.964-85.963c7.81-7.81 20.473-7.811 28.284 0s7.81 20.474-.001 28.284l-100.105 100.105c-7.812 7.812-20.475 7.809-28.284 0l-55.894-55.894c-7.811-7.811-7.811-20.474 0-28.284s20.474-7.811 28.284 0z">
                                </path>
                            </g>
                        </svg>
                        <div class="usp-content">
                            <h3>Integrity</h3>
                            <p>We uphold the highest ethical standards, ensuring transparency and trust in every
                                financial solution we provide. Our clients rely on us for honesty and accountability in
                                all our dealings.</p>
                        </div>
                    </div>
                </div>
                <div class="usp-col">
                    <div class="usp-icon-box">
                        <svg id="Layer_1" width="96" height="96" enable-background="new 0 0 512 512"
                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m511 246.003c0-7.352-5.981-13.334-13.336-13.336h-28.668c-4.395-40.756-20.146-78.775-45.893-110.772l20.278-20.278c2.516-2.516 3.901-5.864 3.902-9.43 0-3.566-1.386-6.916-3.902-9.431l-14.137-14.137c-5.199-5.199-13.659-5.201-18.86 0l-20.278 20.278c-31.996-25.745-70.016-41.497-110.772-45.893v-28.669c-.001-7.352-5.984-13.335-13.337-13.335h-19.993c-7.354 0-13.336 5.982-13.336 13.336v28.669c-40.757 4.396-78.775 20.147-110.771 45.893l-20.279-20.279c-2.516-2.515-5.864-3.9-9.429-3.901-.001 0-.001 0-.002 0-3.565 0-6.915 1.386-9.43 3.901l-14.138 14.138c-5.199 5.2-5.199 13.66 0 18.859l20.279 20.279c-25.747 31.997-41.498 70.016-45.893 110.772h-28.669c-7.354 0-13.336 5.983-13.336 13.336v19.993c0 7.354 5.982 13.336 13.336 13.336h28.669c4.395 40.756 20.147 78.775 45.892 110.772l-20.279 20.278c-5.199 5.2-5.199 13.66.001 18.86l14.138 14.138c2.601 2.6 6.016 3.899 9.43 3.899 3.415 0 6.83-1.3 9.431-3.899l20.278-20.279c31.997 25.746 70.016 41.497 110.772 45.892v28.67c0 7.354 5.983 13.336 13.337 13.336h19.993c7.354 0 13.336-5.982 13.336-13.336v-28.67c40.757-4.395 78.776-20.147 110.771-45.892l20.28 20.281c2.6 2.599 6.015 3.898 9.429 3.898 3.415-.001 6.831-1.301 9.431-3.899l14.139-14.14c5.196-5.199 5.196-13.658-.001-18.859l-20.279-20.278c25.746-31.997 41.498-70.016 45.893-110.772h28.668c7.354 0 13.337-5.982 13.337-13.336zm-91.186-164.186 10.37 10.37-43.225 43.224c-1.5 1.5-2.343 3.535-2.343 5.657s.843 4.157 2.344 5.657l4.94 4.94-36.208 4.642 4.643-36.208 4.941 4.941c3.123 3.124 8.188 3.124 11.313 0zm-171.147-3.689v-61.128h14.666l-.001 61.127c0 2.122.843 4.156 2.343 5.657 1.501 1.5 3.535 2.343 5.657 2.343h6.987l-22.319 28.885-22.32-28.884h6.986c4.418 0 8.001-3.582 8.001-8zm-156.48 3.688 43.223 43.224c3.125 3.125 8.19 3.125 11.313 0l4.941-4.94 4.642 36.207-36.207-4.641 4.94-4.94c1.501-1.5 2.344-3.535 2.344-5.657s-.843-4.156-2.343-5.657l-43.223-43.226zm-75.187 166.851h61.128c2.122 0 4.156-.843 5.657-2.343 1.5-1.5 2.343-3.535 2.343-5.657v-6.987l28.883 22.32-28.884 22.32v-6.987c0-4.418-3.582-8-8-8l-61.127-.001zm75.186 181.516-10.37-10.37 43.225-43.223c1.5-1.501 2.343-3.535 2.343-5.657s-.843-4.157-2.344-5.657l-4.94-4.94 36.207-4.642-4.642 36.207-4.94-4.941c-3.126-3.124-8.19-3.122-11.314 0zm171.147 3.689v61.128h-14.666l.001-61.128c0-2.122-.843-4.156-2.343-5.657-1.501-1.5-3.535-2.343-5.657-2.343h-6.986l22.318-28.883 22.319 28.884h-6.986c-4.417-.001-8 3.581-8 7.999zm156.48-3.687-43.223-43.225c-1.501-1.501-3.535-2.344-5.657-2.344s-4.156.843-5.657 2.343l-4.94 4.941-4.642-36.207 36.207 4.642-4.941 4.94c-3.124 3.125-3.124 8.189 0 11.314l43.225 43.224zm-8.094-51.463-7.789-7.789 4.936-4.936c3.286-3.282 4.395-8.058 2.893-12.463-1.493-4.377-5.283-7.463-9.889-8.052l-49.185-6.306c-3.736-.472-7.41.775-10.072 3.438-2.663 2.664-3.915 6.335-3.435 10.071l6.304 49.182c.59 4.606 3.676 8.396 8.052 9.889 4.405 1.506 9.18.396 12.46-2.887l4.939-4.94 7.789 7.789c-28.862 22.817-62.914 36.926-99.388 41.178v-11.025h6.979.008c4.642 0 8.799-2.593 10.851-6.768 2.039-4.15 1.541-9.012-1.299-12.686l-30.319-39.237c-2.305-2.981-5.786-4.69-9.552-4.69-3.767 0-7.248 1.709-9.553 4.691l-30.317 39.234c-2.841 3.675-3.34 8.536-1.301 12.688 2.051 4.175 6.208 6.768 10.846 6.768h.007 6.985v11.025c-36.474-4.253-70.527-18.362-99.39-41.178l7.789-7.789 4.936 4.936c3.283 3.287 8.061 4.391 12.463 2.893 4.377-1.493 7.463-5.283 8.052-9.889l6.305-49.182c.48-3.737-.771-7.408-3.435-10.072-2.662-2.662-6.325-3.92-10.074-3.438l-49.184 6.305c-4.605.591-8.395 3.677-9.888 8.052-1.502 4.403-.395 9.178 2.889 12.46l4.939 4.938-7.789 7.789c-22.817-28.862-36.926-62.915-41.178-99.389h11.025v6.979c-.003 4.646 2.591 8.806 6.768 10.858 1.695.833 3.508 1.242 5.311 1.242 2.612 0 5.202-.86 7.376-2.541l39.234-30.318c2.982-2.305 4.693-5.786 4.693-9.553s-1.711-7.249-4.692-9.552l-39.236-30.317c-3.676-2.842-8.536-3.339-12.688-1.299-4.177 2.052-6.77 6.212-6.767 10.852v6.985h-11.025c4.253-36.473 18.361-70.526 41.178-99.389l7.79 7.789-4.936 4.935c-3.286 3.282-4.395 8.058-2.893 12.463 1.493 4.377 5.283 7.462 9.889 8.052l49.183 6.305c.524.067 1.047.1 1.565.1 3.183 0 6.219-1.247 8.509-3.538 2.663-2.664 3.915-6.335 3.435-10.071l-6.304-49.182c-.59-4.607-3.676-8.396-8.052-9.89-4.403-1.502-9.18-.395-12.459 2.888l-4.94 4.939-7.789-7.789c28.861-22.817 62.915-36.925 99.388-41.178v11.025h-6.979c-.003 0-.005 0-.008 0-4.642 0-8.8 2.593-10.851 6.768-2.039 4.15-1.541 9.012 1.299 12.686l30.319 39.236c2.304 2.982 5.786 4.692 9.552 4.692 3.767 0 7.249-1.71 9.553-4.692l30.317-39.234c2.841-3.674 3.339-8.536 1.301-12.686-2.051-4.176-6.208-6.77-10.849-6.77-.001 0-.003 0-.004 0h-6.985v-11.025c36.474 4.253 70.527 18.362 99.389 41.179l-7.789 7.789-4.935-4.935c-3.283-3.288-8.062-4.396-12.463-2.893-4.378 1.493-7.464 5.283-8.053 9.889l-6.307 49.184c-.479 3.738.774 7.409 3.438 10.072 2.29 2.29 5.324 3.537 8.507 3.536.519 0 1.041-.033 1.565-.1l49.181-6.305c4.607-.59 8.396-3.675 9.89-8.051 1.503-4.404.396-9.179-2.888-12.46l-4.939-4.939 7.789-7.789c22.816 28.863 36.925 62.916 41.178 99.389h-11.025v-6.979c.003-4.645-2.59-8.805-6.768-10.857-4.149-2.04-9.013-1.542-12.687 1.298l-39.234 30.319c-2.982 2.305-4.693 5.786-4.693 9.553s1.711 7.248 4.692 9.552l39.234 30.318c2.175 1.682 4.765 2.542 7.377 2.542 1.802 0 3.615-.409 5.309-1.241 4.177-2.052 6.771-6.211 6.77-10.853v-6.985h11.025c-4.25 36.47-18.359 70.524-41.176 99.387zm22.154-115.389c-4.418 0-8 3.582-8 8v6.987l-28.884-22.32 28.884-22.321v6.987c0 4.418 3.582 8 8 8h61.127v14.667zm-177.873-116.564c-60.229 0-109.229 49-109.229 109.23s49 109.23 109.229 109.23 109.23-49.001 109.23-109.23-49.001-109.23-109.23-109.23zm-55.315 184.229c12.529-18.129 33.163-29.146 55.316-29.146s42.787 11.016 55.315 29.145c-15.485 11.452-34.623 18.233-55.316 18.233-20.694 0-39.831-6.781-55.315-18.232zm55.315-49.072c-18.009 0-32.659-14.651-32.659-32.66s14.65-32.659 32.659-32.659 32.659 14.65 32.659 32.659-14.65 32.66-32.659 32.66zm67.382 38.441c-10.307-14.221-24.726-24.721-41.064-30.204 13.428-8.671 22.342-23.758 22.342-40.896 0-26.831-21.828-48.659-48.659-48.659s-48.659 21.828-48.659 48.659c0 17.139 8.915 32.225 22.342 40.896-16.339 5.484-30.757 15.984-41.065 30.205-16.004-16.747-25.848-39.429-25.848-64.368 0-51.407 41.822-93.23 93.229-93.23s93.23 41.823 93.23 93.23c0 24.938-9.843 47.62-25.848 64.367z" />
                        </svg>
                        <div class="usp-content">
                            <h3>Customer-Centric</h3>
                            <p>Our clients are at the heart of everything we do. We tailor our solutions to their unique
                                financial goals, providing personalized services that foster long-term success.</p>
                        </div>
                    </div>
                </div>
                <div class="usp-col">
                    <div class="usp-icon-box">
                        <svg id="Layer_1" width="96" height="96" enable-background="new 0 0 512 512"
                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m398.891 322.327-19.345-7.446c-2.824-10.327-6.931-20.233-12.248-29.545l8.42-18.956c1.343-3.024.686-6.563-1.655-8.904l-9.85-9.85c-4.858-43.731-34.917-78.938-74.835-91.857 15.335-10.723 25.393-28.498 25.393-48.589 0-32.678-26.585-59.264-59.263-59.264s-59.264 26.586-59.264 59.264c0 20.09 10.058 37.865 25.393 48.588-40.056 12.963-70.189 48.366-74.891 92.304-.022.209-.028.417-.034.625l-8.778 8.778c-2.34 2.341-2.997 5.88-1.654 8.904l8.422 18.961c-5.316 9.312-9.422 19.214-12.246 29.537l-19.349 7.448c-3.088 1.188-5.126 4.156-5.126 7.466v37.898c0 3.31 2.038 6.277 5.126 7.466l19.345 7.446c2.826 10.328 6.933 20.234 12.248 29.545l-8.42 18.954c-1.343 3.025-.686 6.564 1.654 8.905l26.799 26.799c2.341 2.339 5.879 2.996 8.904 1.654l18.965-8.423c9.311 5.315 19.214 9.421 29.533 12.245l7.449 19.351c1.188 3.088 4.156 5.126 7.466 5.126h37.898c3.31 0 6.277-2.038 7.466-5.126l7.446-19.345c10.327-2.825 20.232-6.932 29.544-12.248l18.956 8.42c3.023 1.343 6.564.688 8.904-1.655l26.798-26.799c2.34-2.34 2.997-5.879 1.654-8.903l-8.423-18.964c5.316-9.312 9.423-19.215 12.246-29.534l19.35-7.448c3.088-1.188 5.126-4.156 5.126-7.466v-37.898c.002-3.308-2.036-6.275-5.124-7.464zm-186.646-215.146c0-23.855 19.408-43.264 43.264-43.264s43.263 19.408 43.263 43.264-19.407 43.264-43.263 43.264-43.264-19.409-43.264-43.264zm43.262 59.263c40.428 0 75.189 25.574 88.068 62.159-1.703-.433-3.535-.325-5.214.42l-18.963 8.423c-9.312-5.316-19.215-9.422-29.535-12.245l-7.448-19.351c-1.188-3.088-4.156-5.126-7.466-5.126h-37.897c-3.31 0-6.277 2.038-7.466 5.126l-7.448 19.351c-10.32 2.823-20.224 6.929-29.535 12.245l-18.964-8.423c-2.051-.912-4.331-.882-6.321-.052 12.775-36.779 47.627-62.527 88.189-62.527zm132.51 195.754-18.076 6.958c-2.461.947-4.298 3.048-4.908 5.613-2.746 11.536-7.3 22.521-13.537 32.649-1.383 2.246-1.569 5.03-.499 7.441l7.869 17.718-19.029 19.03-17.711-7.867c-2.409-1.07-5.194-.882-7.442.5-10.125 6.236-21.112 10.792-32.656 13.539-2.566.61-4.667 2.446-5.614 4.908l-6.956 18.071h-26.912l-6.959-18.077c-.947-2.462-3.048-4.298-5.613-4.908-11.536-2.746-22.521-7.3-32.648-13.536-2.248-1.385-5.032-1.57-7.441-.499l-17.719 7.869-19.03-19.03 7.864-17.708c1.07-2.412.884-5.196-.5-7.443-6.235-10.124-10.79-21.111-13.539-32.658-.61-2.566-2.447-4.666-4.908-5.613l-18.071-6.956v-26.912l18.075-6.958c2.462-.947 4.298-3.048 4.908-5.613 2.746-11.539 7.301-22.524 13.536-32.651 1.384-2.246 1.57-5.03.5-7.441l-7.868-17.716 19.03-19.03 17.718 7.869c2.409 1.071 5.195.885 7.441-.499 10.129-6.237 21.113-10.791 32.648-13.536 2.566-.61 4.667-2.446 5.614-4.908l6.959-18.077h26.911l6.958 18.077c.947 2.462 3.048 4.298 5.614 4.908 11.536 2.745 22.521 7.299 32.648 13.535 2.246 1.386 5.032 1.568 7.441.5l17.718-7.869 19.03 19.029-7.863 17.709c-1.07 2.411-.884 5.195.5 7.442 6.236 10.125 10.791 21.112 13.538 32.657.61 2.566 2.446 4.667 4.908 5.614l18.071 6.956zm-132.243-97.102c-45.417 0-82.367 36.95-82.367 82.368 0 45.417 36.95 82.367 82.367 82.367 45.419 0 82.369-36.95 82.369-82.367 0-45.418-36.95-82.368-82.369-82.368zm0 148.735c-36.595 0-66.367-29.772-66.367-66.367 0-36.596 29.772-66.368 66.367-66.368 36.596 0 66.369 29.772 66.369 66.368 0 36.595-29.773 66.367-66.369 66.367zm18.974-103.784-30.311 30.312-7.636-7.637c-8.235-8.235-21.635-8.233-29.868 0-3.979 3.979-6.17 9.283-6.17 14.935s2.191 10.955 6.17 14.933l20.407 20.408c5.312 5.312 11.68 8.005 17.8 8.005 5.295 0 10.406-2.016 14.488-6.098l44.988-44.988c8.234-8.235 8.234-21.634-.001-29.869-8.234-8.234-21.631-8.234-29.867-.001zm18.555 11.315c.956.956 1.483 2.242 1.483 3.619 0 1.378-.527 2.664-1.484 3.62l-44.988 44.988c-3.595 3.601-8.305-.551-9.66-1.906l-20.407-20.408c-.956-.956-1.483-2.242-1.483-3.619 0-1.378.527-2.664 1.484-3.62.98-.981 2.3-1.472 3.62-1.472 1.319 0 2.639.49 3.619 1.472l13.293 13.293c3.126 3.124 8.19 3.122 11.314 0l35.967-35.968c1.965-1.961 5.281-1.961 7.242.001zm-233.956-192.209 21.067 16.933-7.092 26.084c-1.129 4.156.394 8.477 3.878 11.008 1.813 1.316 3.922 1.979 6.035 1.979 1.949-.001 3.903-.563 5.632-1.695l22.614-14.804 22.614 14.804c3.602 2.359 8.183 2.25 11.667-.284 3.484-2.531 5.007-6.853 3.877-11.009l-7.092-26.082 21.067-16.933c3.357-2.698 4.667-7.089 3.335-11.186-1.331-4.097-4.971-6.878-9.271-7.087l-26.997-1.316-9.593-25.269c-.001 0-.001 0-.001-.001-1.527-4.021-5.298-6.619-9.606-6.619-.001 0-.002 0-.003 0-4.309.001-8.079 2.601-9.604 6.62l-9.593 25.269-26.995 1.316c-4.302.209-7.941 2.99-9.273 7.086s-.023 8.486 3.334 11.186zm37.446-3.79c4.087-.194 7.666-2.793 9.116-6.616l5.572-14.678 5.571 14.675c1.451 3.826 5.03 6.425 9.107 6.618l15.681.765-12.236 9.835c-3.188 2.562-4.552 6.765-3.479 10.706l4.119 15.149-13.137-8.599c-1.709-1.119-3.668-1.679-5.627-1.679-1.96 0-3.919.56-5.629 1.679l-13.135 8.598 4.12-15.153c1.069-3.942-.296-8.143-3.479-10.7l-12.237-9.836zm-1.751 168.389 21.067-16.933c3.357-2.698 4.667-7.089 3.335-11.186-1.331-4.097-4.971-6.878-9.271-7.087l-26.996-1.315-9.594-25.27c-.001-.001-.001-.001-.001-.002-1.528-4.02-5.299-6.617-9.606-6.617s-8.078 2.598-9.607 6.619l-9.594 25.27-26.994 1.315c-4.302.209-7.941 2.99-9.273 7.086s-.023 8.486 3.334 11.187l21.067 16.933-7.092 26.084c-1.129 4.156.394 8.477 3.878 11.008 1.813 1.316 3.922 1.979 6.035 1.979 1.949-.001 3.903-.563 5.632-1.695l22.614-14.803 22.614 14.803c3.603 2.358 8.184 2.247 11.668-.285 3.485-2.532 5.006-6.854 3.875-11.008zm-12.943-10.124c-3.188 2.562-4.552 6.765-3.479 10.706l4.118 15.148-13.136-8.598c-3.422-2.239-7.841-2.237-11.255 0l-13.136 8.599 4.12-15.154c1.069-3.942-.296-8.143-3.479-10.7l-12.236-9.835 15.68-.765c4.083-.198 7.658-2.797 9.107-6.616l5.572-14.678 5.571 14.675c1.45 3.822 5.025 6.421 9.107 6.619l15.68.765zm421.395-77.617c-1.331-4.098-4.972-6.88-9.272-7.089l-26.997-1.316-9.595-25.27c-1.526-4.021-5.297-6.619-9.605-6.619-4.311 0-8.081 2.599-9.607 6.619l-9.593 25.27-26.997 1.316c-4.302.209-7.942 2.991-9.273 7.089-1.33 4.098-.021 8.487 3.336 11.183l21.067 16.934-7.091 26.083c-1.13 4.155.393 8.477 3.877 11.008 3.485 2.533 8.065 2.643 11.667.284l22.614-14.804 22.614 14.805c1.729 1.131 3.683 1.693 5.631 1.693 2.115 0 4.226-.662 6.039-1.98 3.483-2.532 5.004-6.854 3.873-11.007l-7.091-26.082 21.065-16.932c3.358-2.698 4.668-7.088 3.338-11.185zm-60.822-27.995.005.014c-.002-.006-.004-.01-.005-.014-.001-.001-.001-.001 0 0zm23.475 45.987c-3.185 2.559-4.55 6.759-3.479 10.705l4.118 15.149-13.135-8.599c-3.418-2.238-7.836-2.238-11.256 0l-13.135 8.599 4.12-15.153c1.069-3.939-.295-8.139-3.479-10.701l-12.236-9.835 15.68-.765c4.082-.198 7.656-2.795 9.107-6.615l5.572-14.678 5.572 14.678c1.451 3.82 5.025 6.417 9.105 6.615l15.681.765zm-127.69-157.286 21.067 16.934-7.091 26.083c-1.13 4.155.393 8.477 3.877 11.008 1.812 1.316 3.922 1.979 6.035 1.979 1.949 0 3.903-.563 5.632-1.695l22.614-14.803 22.614 14.802c3.603 2.361 8.183 2.25 11.667-.282 3.484-2.531 5.007-6.852 3.877-11.01l-7.091-26.081 21.066-16.934c3.357-2.698 4.667-7.089 3.335-11.186-1.331-4.097-4.971-6.878-9.271-7.087l-26.997-1.315-9.593-25.27c-.001 0-.001-.001-.001-.002-1.528-4.02-5.299-6.617-9.606-6.617s-8.078 2.598-9.607 6.619l-9.593 25.27-26.995 1.315c-4.302.209-7.941 2.99-9.273 7.086s-.024 8.486 3.334 11.186zm37.455-3.79c4.082-.198 7.656-2.795 9.107-6.615l5.572-14.679 5.572 14.679c1.451 3.82 5.025 6.417 9.106 6.615l15.681.765-12.236 9.835c-3.188 2.561-4.552 6.765-3.479 10.705l4.119 15.149-13.137-8.599c-1.71-1.119-3.669-1.679-5.628-1.679-1.96 0-3.919.56-5.627 1.679l-13.135 8.599 4.119-15.153c1.069-3.939-.295-8.139-3.479-10.701l-12.236-9.835z" />
                        </svg>
                        <div class="usp-content">
                            <h3>Expertise</h3>
                            <p>With years of experience and deep industry knowledge, we deliver strategic insights and
                                innovative financial solutions that empower businesses to grow and thrive in competitive
                                markets.</p>
                        </div>
                    </div>
                </div>
                <div class="usp-col">
                    <div class="usp-icon-box">
                        <svg id="fi_2618576" enable-background="new 0 0 512 512" height="96" viewBox="0 0 512 512"
                            width="96" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m255.995 101.946c5.522 0 10-4.478 10-10v-50.94c0-5.522-4.477-10-10-10s-10 4.477-10 10v50.94c.001 5.522 4.478 10 10 10z">
                                </path>
                                <path
                                    d="m180.812 118.373c1.901 3.017 5.148 4.669 8.469 4.669 1.822 0 3.667-.498 5.322-1.541 4.672-2.944 6.072-9.119 3.128-13.792l-26.644-42.275c-2.945-4.672-9.12-6.073-13.791-3.128-4.672 2.944-6.072 9.119-3.128 13.792z">
                                </path>
                                <path
                                    d="m317.42 121.504c1.655 1.041 3.498 1.538 5.318 1.538 3.322 0 6.571-1.654 8.472-4.673l26.616-42.275c2.942-4.674 1.539-10.847-3.135-13.791-4.676-2.941-10.847-1.537-13.79 3.135l-26.616 42.275c-2.942 4.675-1.538 10.848 3.135 13.791z">
                                </path>
                                <path
                                    d="m508.776 266.432-17.375-30.695c-2.722-4.808-8.824-6.498-13.627-3.776-4.807 2.721-6.497 8.822-3.776 13.627l17.367 30.682c.87 1.542.644 3.029.432 3.778-.204.721-.766 2.052-2.236 2.864l-26.778 14.833c-2.379 1.314-5.484.484-6.781-1.804l-6.803-12.034c-.028-.054-.06-.104-.089-.157l-70.33-124.394c-.869-1.531-.649-2.999-.441-3.738.201-.715.759-2.036 2.229-2.849l26.81-14.836c2.409-1.334 5.438-.524 6.755 1.81l15.674 27.693c2.721 4.807 8.824 6.496 13.628 3.777 4.807-2.72 6.497-8.822 3.777-13.628l-15.667-27.681c-6.682-11.846-21.864-16.095-33.846-9.472l-26.809 14.836c-5.801 3.206-9.992 8.505-11.8 14.924-1.706 6.052-1.096 12.37 1.697 17.915l-14.768 4.28c-6.291 1.82-10.109 2.807-12.228 2.807-.009 0-.017 0-.025 0-1.459-.005-3.05-.562-7.591-2.282-2.06-.78-4.625-1.752-7.778-2.852l-26.165-9.147c-14.471-5.054-20.998-4.782-30.454-3.919l-44.616 3.993c-20.339 1.802-33.306 6.39-40.464 14.347l-25.426-7.367c2.736-5.521 3.323-11.778 1.633-17.775-1.808-6.415-5.996-11.713-11.791-14.919l-26.794-14.843c-11.992-6.629-27.183-2.378-33.866 9.465l-77.204 136.523c-3.305 5.819-4.123 12.587-2.301 19.058 1.81 6.426 6 11.73 11.79 14.932l26.794 14.841c3.831 2.118 7.993 3.124 12.1 3.124 8.725 0 17.207-4.539 21.766-12.588l2.831-5.008c7.726 3.401 14.213 8.342 18.634 14.192-4.318 5.046-7.038 11.273-7.801 18.046-1.008 8.957 1.522 17.745 7.124 24.75 5.554 6.945 13.496 11.327 22.377 12.359-.94 8.881 1.6 17.583 7.159 24.51 5.746 7.184 13.867 11.375 22.362 12.364-.936 8.868 1.595 17.562 7.137 24.493 5.551 6.96 13.495 11.351 22.385 12.383-.941 8.888 1.599 17.595 7.158 24.523 6.626 8.284 16.408 12.597 26.283 12.596 7.372 0 14.796-2.404 20.994-7.354l20.938-16.754c1.663-1.327 3.174-2.794 4.533-4.374l11.96 9.554c6.185 4.936 13.592 7.334 20.954 7.333 9.88-.001 19.678-4.319 26.313-12.611 3.497-4.372 5.711-9.362 6.711-14.513 3.497 1.21 7.189 1.835 10.953 1.834 1.262 0 2.532-.07 3.806-.211 8.96-.995 16.972-5.401 22.539-12.383 5.569-6.938 8.109-15.639 7.17-24.519 8.489-.991 16.614-5.181 22.377-12.362 5.74-7.177 8.044-16.013 7.142-24.511 8.876-1.034 16.814-5.415 22.355-12.344 5.606-6.986 8.147-15.761 7.154-24.711-.754-6.794-3.476-13.042-7.802-18.102 4.408-5.848 10.882-10.795 18.613-14.194l2.837 5.018c4.556 8.046 13.034 12.583 21.761 12.583 4.109-.001 8.275-1.007 12.11-3.127l26.779-14.834c5.788-3.2 9.976-8.496 11.793-14.911 1.832-6.465 1.031-13.233-2.262-19.068zm-452.783 29.504c-1.3 2.296-4.407 3.124-6.776 1.813l-26.793-14.84c-1.463-.81-2.021-2.136-2.225-2.855-.209-.745-.432-2.224.45-3.774l77.216-136.55c.884-1.567 2.55-2.445 4.28-2.445.842 0 1.698.207 2.488.644l26.786 14.838c.003.002.006.004.009.005 1.466.811 2.023 2.132 2.225 2.847.208.739.428 2.207-.451 3.755zm72.974 51.46c-2.82 2.259-6.381 3.28-10.02 2.875-3.641-.404-6.886-2.178-9.14-4.996-2.259-2.825-3.277-6.385-2.868-10.023.407-3.623 2.182-6.852 5.016-9.107l37.438-29.926c5.876-4.691 14.477-3.726 19.173 2.139 2.258 2.823 3.277 6.377 2.869 10.004-.406 3.615-2.182 6.841-5 9.083-.062.049-.115.104-.175.155l-37.284 29.789c-.003.002-.006.005-.009.007zm10.364 34.734c-2.257-2.813-3.277-6.358-2.874-9.982.403-3.627 2.18-6.871 5.002-9.134l.003-.002c.002-.001.004-.003.006-.004.001 0 .001-.001.002-.002l53.926-43.084c5.875-4.692 14.478-3.734 19.173 2.139 2.255 2.819 3.274 6.369 2.871 9.995-.404 3.63-2.186 6.874-5.015 9.134l-53.912 43.068c-5.882 4.694-14.482 3.747-19.182-2.128zm38.658 41.89c-3.64-.404-6.882-2.18-9.139-5.01-2.255-2.819-3.274-6.369-2.871-9.995.404-3.627 2.183-6.868 5.008-9.128.002-.002.005-.004.007-.006l37.318-29.812c.044-.034.092-.063.136-.098 5.86-4.691 14.46-3.736 19.16 2.122 2.259 2.824 3.278 6.384 2.869 10.022-.408 3.623-2.183 6.852-5.016 9.107l-37.437 29.925c-2.829 2.259-6.394 3.275-10.035 2.873zm65.518 8.118c-.405 3.627-2.182 6.864-5.012 9.124l-20.939 16.757c-5.883 4.695-14.483 3.75-19.181-2.126-2.257-2.811-3.278-6.359-2.875-9.99s2.178-6.87 4.995-9.12c.003-.002.007-.005.01-.007l20.934-16.734c.011-.009.023-.016.034-.024 5.877-4.69 14.478-3.729 19.174 2.139 2.249 2.814 3.266 6.357 2.86 9.981zm158.678-86.864c-2.254 2.818-5.5 4.593-9.14 4.997-3.637.409-7.2-.615-10.02-2.875-.001-.001-.003-.002-.005-.003-.001-.001-.003-.002-.004-.003l-26.758-21.379c-4.316-3.448-10.608-2.744-14.054 1.57-3.447 4.314-2.744 10.607 1.57 14.054l26.749 21.372c5.868 4.699 6.835 13.283 2.165 19.122-4.712 5.872-13.313 6.827-19.185 2.124l-29.025-23.162c-4.316-3.444-10.608-2.737-14.053 1.579-3.444 4.316-2.738 10.608 1.579 14.053l29.011 23.151c2.827 2.264 4.606 5.51 5.01 9.141.403 3.624-.617 7.17-2.893 10.005-2.249 2.82-5.491 4.595-9.13 5-3.643.401-7.208-.616-10.026-2.865l-14.442-11.55c-.025-.02-.047-.041-.072-.061l-12.202-9.755-2.281-1.824c-4.315-3.45-10.607-2.749-14.055 1.563-.431.54-.798 1.11-1.1 1.702-1.448 2.83-1.424 6.149-.065 8.932.629 1.289 1.535 2.466 2.729 3.421l14.521 11.613c5.829 4.707 6.782 13.262 2.115 19.097-4.697 5.871-13.299 6.83-19.172 2.145l-16.475-13.162c.686-8.559-1.85-16.906-7.214-23.613-3.334-4.167-7.469-7.323-12.01-9.44 3.328-4.617 5.441-10.041 6.097-15.873 1.008-8.956-1.522-17.744-7.134-24.761-3.335-4.156-7.465-7.305-11.997-9.417 3.334-4.631 5.447-10.066 6.097-15.906.995-8.936-1.537-17.707-7.129-24.7-9.622-12.03-25.894-15.687-39.437-9.939-1.084-4.978-3.299-9.674-6.569-13.763-11.578-14.468-32.78-16.835-47.271-5.273l-26.776 21.403c-6.055-7.727-14.286-14.135-24.018-18.705l55.079-97.421 29.326 8.497c.134 1.569.388 3.219.813 4.967 7.099 29.188 33.973 42.788 70.136 35.501 30.47-6.131 43.014 3.002 67.997 21.195 2.592 1.887 5.285 3.848 8.104 5.867 17.967 12.89 37.167 28.041 50.04 38.31l32.46 25.942c2.82 2.25 4.595 5.49 4.998 9.124.403 3.631-.617 7.179-2.884 10.003zm-.311-43.286-21.783-17.409c-13.051-10.411-32.522-25.774-50.867-38.936-2.78-1.991-5.431-3.922-7.983-5.78-25.906-18.865-44.629-32.495-83.717-24.634-11.964 2.411-40.468 5.23-46.755-20.618-.886-3.649.014-4.903.397-5.438 1.337-1.864 6.717-6.401 27.766-8.265l44.663-3.997c7.278-.664 10.929-.998 22.037 2.882l26.168 9.148c2.909 1.016 5.235 1.896 7.288 2.674 12.6 4.773 15.939 4.772 32.492-.019l19.292-5.59 55.005 97.289c-9.735 4.567-17.958 10.97-24.003 18.693z">
                                </path>
                                <path
                                    d="m460.57 211.599c5.522 0 10-4.492 10-10.015s-4.478-10-10-10-10 4.478-10 10v.028c0 5.523 4.478 9.987 10 9.987z">
                                </path>
                            </g>
                        </svg>
                        <div class="usp-content">
                            <h3>Effective Partnership</h3>
                            <p>Collaboration is key to success. We build strong, lasting relationships with our clients,
                                investors, and stakeholders, ensuring mutual growth and financial prosperity. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="general-container">
        <div class="why-us-container">
            <div class="why-us-metrics">
                <div class="clientele">
                    <h2>40+</h2>
                    <p>Clients</p>
                </div>
                <div class="why-us-metrics-row">
                    <div class="why-us-metrics-col-1">
                        <h2>98%</h2>
                    </div>
                    <div class="why-us-metrics-col-2">
                        <div class="brochure-header">
                            <p>Looking for experts to fulfill your financial needs?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-us-showcase">
                <div class="why-us-header">
                    <div class="stock">

                    </div>
                    <div class="heading">
                        <h3>Why Us?</h3>
                        <div class="money-raised">

                        </div>
                    </div>
                </div>
                <div class="case-studies-tab">

                </div>

            </div>
        </div>
    </div> -->


    <div class="testimonial-container-main">
        <div class="testimonial-grid">
            <div class="testimonial-container">
                <span>Testimonials</span>
                <h3>Trusted by Leaders from various industries</h3>
                <p>Learn why professionals trust our solutions to complete their financial journeys</p>
                <div class="testimonial-cta">
                    <a class="about-button" href="<?php echo $baseUrl; ?>what-we-do">
                        <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
                        <span class="button-text">Read More</span>
                        <i class="arrow-appear fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="general-container">
        <div class="case-studies">
            <div class="case-studies-header">
                <h2>Case Studies</h2>
            </div>

            <div class="case-studies-body">
                <div class="case-study-wrapper">
                    <div class="case-study-row">

                        <div class="case-study-col-main">
                            <div class="case-study-container">
                                <div class="case-study-meta">
                                    <span class="case-category">New</span>
                                    <span class="case-date">19/04/2024</span>
                                </div>
                                <h3>Silky Overseas Limited</h3>
                            </div>
                        </div>

                        <div class="case-study-col-metric">

                            <div class="case-study-metric-container">
                                <h3>Company's area of specialization: Pharmaceutical & Healthcare</h3>
                            </div>

                            <div class="case-study-financials-container">
                                <h3>Core metric-description</h3>
                                <div class="case-study-financial-data">
                                    <div class="case-study-financial">
                                        <div class="financial-icon-box">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#000"
                                                        d="M5 21q-.825 0-1.412-.587T3 19V3h2v16h16v2zm1-3V9h4v9zm5 0V4h4v14zm5 0v-5h4v5z" />
                                                </svg>
                                            </div>
                                            <div class="icon-content">
                                                <h4>Revenue</h4>
                                                <p>₹ 1000 Cr</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="case-study-row">
                        <div class="case-study-purpose-container">
                            <h3>Company's area of specialization: Pharmaceutical & Healthcare</h3>
                        </div>
                        <div class="case-study-strategy-container">
                            <h3>Company's area of specialization: Pharmaceutical & Healthcare</h3>
                        </div>
                        <div class="growth-container">

                            <h3>Growth Rate</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Blog section main -->
    <div class="blog-main">
        <div class="blog-main-header">
            <div class="blog-main-header-content">
                <span>Insights</span>
                <h3>Strategic Insights for Forward-Thinking Businesses</h3>
            </div>
            <a class="native-links" href="<?php echo $baseUrl; ?>insights">Explore all Insights</a>
        </div>
        <div class="blog-content-main">

            <div class="blog-main-col">
                <div class="blog-image-main">
                    <img src="./assets/blog-banners/capital-markets-thumbnail.png" alt="">
                </div>
                <div class="blog-content">
                    <div class="blog-heading">
                        <span class="blog-category">Financial Markets</span>
                        <h3 class="blog-primary-heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magnam, sed enim? Saepe?</h3>
                        <div class="blog-meta">
                            <span class="read-time">5 mins</span> | <span class="blog-author">May 01, 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-sidebar-col">
                <div class="blog-sidebar">
                    <div class="blog-image-sidebar">
                        <img src="./assets/blog-banners/capital-markets-thumbnail.png" alt="">
                    </div>
                    <div class="blog-sidebar-content">
                        <div class="blog-heading">
                            <span class="blog-category">Financial Markets</span>
                            <h3 class="blog-primary-heading">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Sapiente unde consectetur assumenda!</h3>
                            <div class="blog-meta">
                                <span class="read-time">5 mins</span> |
                                <span class="blog-author">May 01, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-sidebar">
                    <div class="blog-image-sidebar">
                        <img src="./assets/blog-banners/capital-markets-thumbnail.png" alt="">
                    </div>
                    <div class="blog-sidebar-content">
                        <div class="blog-heading">
                            <span class="blog-category">Financial Markets</span>
                            <h3 class="blog-primary-heading">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Sapiente unde consectetur assumenda!</h3>
                            <div class="blog-meta">
                                <span class="read-time">5 mins</span> |
                                <span class="blog-author">May 01, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-sidebar">
                    <div class="blog-image-sidebar">
                        <img src="./assets/blog-banners/capital-markets-thumbnail.png" alt="">
                    </div>
                    <div class="blog-sidebar-content">
                        <div class="blog-heading">
                            <span class="blog-category">Financial Markets</span>
                            <h3 class="blog-primary-heading">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Sapiente unde consectetur assumenda!</h3>
                            <div class="blog-meta">
                                <span class="read-time">5 mins</span> |
                                <span class="blog-author">May 01, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="general-container">
        <div class="press-container">

        </div>
    </div>


    <div class="newsletter-container">
        <div class="newsletter-header">
            <h2>Subscribe to Briefings</h2>
            <p>Our signature newsletter with insights and analysis from across the firm</p>
        </div>
        <div class="newsletter-form-container">
            <form id="newsletterForm" class="newsletter-form" action="routers/subscribe.php" method="post">

                <input type="email" name="email" id="newsletter-email" placeholder="Enter your email here" required>
                <button type="submit">Submit
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                        <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 7L7 17M8 7h9v9" />
                    </svg>
                </button>
            </form>
            <p id="newsletterMessage"></p>
            <span id="newsletterDisclaimer">By submitting this information, you agree that the information you are providing is subject to Gretex
                Corporate Services Limited's <a href=""> privacy policy </a> and <a href="">Terms of Use</a>.
                You consent to receive our newletter via email. </span>
        </div>

    </div>

    <!-- Contact CTA section -->
    <!-- <div class="footer-cta-section">
        <div class="cta-section-left">
            <div class="cta-header">
                <h4>Fuel Your Company's Growth with Strategic Financial Solutions</h4>
                <p>Looking to expand your business, raise capital, or explore new financial opportunities? We
                    specialize in tailored merchant banking solutions that empower companies to scale with confidence.
                    Get in touch with us today and let's unlock new growth possibilities together.</p>
            </div>
            <div class="cta-section-button">
                <a class="cta-button-main" href="http://localhost/Gretex%20Corporate%20main/contact.php">
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
    </div> -->

    <?php include "footer.php"; ?>
    <script src="<?php echo $baseUrl; ?>js/mobilemenu.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('newsletterForm');
            const msg = document.getElementById('newsletterMessage');
            const disclaimer = document.getElementById('newsletterDisclaimer');

            if (!form) {
                console.error('Newsletter form not found!');
                return;
            }

            console.log("Newsletter script loaded");

            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent page reload

                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.text())
                    .then(response => {
                        form.style.display = 'none';
                        if (disclaimer) disclaimer.style.display = 'none';
                        msg.textContent = response;
                        msg.removeAttribute('style'); // Remove any inline styles
                    })
                    .catch(() => {
                        form.style.display = 'none';
                        if (disclaimer) disclaimer.style.display = 'none';
                        msg.textContent = 'Something went wrong.';
                        msg.removeAttribute('style');
                    });
            });
        });

        //----------main swiper----------
        const swiper = new Swiper('.swiper-main', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            slidesPerView: 1,

            // Navigation arrows
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
        });

        //----------services swiper ends----------
        const servicesSswiper = new Swiper('.services-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                // When screen width is ≥ 640px (tablet)
                640: {
                    slidesPerView: 2,
                },
                // When screen width is ≥ 1024px (desktop)
                1024: {
                    slidesPerView: 3,
                }
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.service-button-next',
                prevEl: '.service-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });

        //----------performance counter----------
        const counters = document.querySelectorAll('.number');
        const speed = 200; // Adjust for speed of animation

        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const format = counter.getAttribute('data-format');
                const current = +counter.innerText.replace(/[^0-9]/g, ""); // Remove non-numeric characters

                const increment = Math.ceil(target / speed);

                if (current < target) {
                    const nextValue = Math.min(current + increment, target);
                    if (format === "+") {
                        counter.innerText = `${nextValue.toLocaleString('en-IN')}+`;
                    } else if (format === "₹Cr") {
                        counter.innerText = `₹${nextValue.toLocaleString('en-IN')} Cr`;
                    } else {
                        counter.innerText = nextValue.toLocaleString('en-IN');
                    }
                    setTimeout(updateCounter, 10);
                } else {
                    if (format === "+") {
                        counter.innerText = `${target.toLocaleString('en-IN')}+`;
                    } else if (format === "₹Cr") {
                        counter.innerText = `₹${target.toLocaleString('en-IN')} Cr`;
                    } else {
                        counter.innerText = target.toLocaleString('en-IN');
                    }
                }
            };

            updateCounter();
        });


        // //----------lightbox---------- const playButton=document.getElementById("playButton");
        const lightbox = document.getElementById("lightbox");
        const closeButton = document.getElementById("closeButton");
        // Show the lightbox when the play button is clicked 
        playButton.addEventListener("click", () => {
            lightbox.classList.remove("hidden");
        });

        // Hide the lightbox when the close button is clicked
        closeButton.addEventListener("click", () => {
            lightbox.classList.add("hidden");
        });

        // Optional: Close lightbox when clicking outside the video
        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) {
                lightbox.classList.add("hidden");
            }
        });
        //----------lightbox ends----------

    </script>
    <script src="<?php echo $baseUrl; ?>js/script.js"></script>
    <script src="<?php echo $baseUrl; ?>js/global-animations.js"></script>

</body>

</html>