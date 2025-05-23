<nav>
    <div class="navbar">
        <a href="http://localhost/Gretex%20Corporate%20main/" class="logo"><img
                src="http://localhost/Gretex%20Corporate%20main/assets/Gretex.png" height="96px" width="96px"
                alt="Gretex-main-logo"></a>
        <span class="mobile-toggle" onclick="document.querySelector('.menu').classList.toggle('show')"><svg
                xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="#fff"
                    d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1m0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1M3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1" />
            </svg></span>
        <ul class="menu">
            <li><a href="<?php echo $baseUrl; ?>about">About Us</a></li>

            <li>
                <a href="<?php echo $baseUrl; ?>what-we-do">What We Do <svg xmlns="http://www.w3.org/2000/svg"
                        width="18" height="18" viewBox="0 0 16 16">
                        <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                    </svg></a>
                <ul class="dropdown">
                    <li>
                        <a href="<?php echo $baseUrl; ?>what-we-do/capital-markets">Capital Markets <svg
                                class="down-caret" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12L9.97 8.53a.75.75 0 0 1 0-1.06"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <ul class="dropdown-content">
                            <li><a href="<?php echo $baseUrl; ?>what-we-do/capital-markets/ipo">IPO</a></li>
                            <li><a href="<?php echo $baseUrl; ?>what-we-do/capital-markets/fpo">FPO</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Corporate Finance <svg class="down-caret" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12L9.97 8.53a.75.75 0 0 1 0-1.06"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <ul class="dropdown-content">
                            <li><a href="#">Valuation</a></li>
                            <li><a href="#">Private Equity</a></li>
                            <li><a href="#">Venture Capital</a></li>
                            <li><a href="#">Bank Finance and Issue of Debt Securities</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Corporate Restructuring <svg class="down-caret" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12L9.97 8.53a.75.75 0 0 1 0-1.06"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <ul class="dropdown-content">
                            <li><a href="#">Mergers & Acquisitions</a></li>
                            <li><a href="#">Takeover</a></li>
                            <li><a href="#">Demergers</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Compliance Advisory <svg class="down-caret" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000" fill-rule="evenodd"
                                    d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12L9.97 8.53a.75.75 0 0 1 0-1.06"
                                    clip-rule="evenodd" />
                            </svg></a></li>
                </ul>
            </li>

            <li>
                <a href="#">Offer Documents</a>
                <ul class="dropdown">
                    <li><a href="#">IPO</a></li>
                    <li><a href="#">FPO</a></li>
                    <li><a href="#">Open Offer</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Investor Relations</a>
                <ul class="dropdown">
                    <li>
                        <a href="#">Disclosures under reg 46 of LODR</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Business Details</a></li>
                            <li><a href="#">Composition of Board of Directors and Committee</a></li>
                            <li>
                                <a href="#">Financial Information</a>
                                <ul class="dropdown-subcontent">
                                    <li><a href="#">Annual Reports</a></li>
                                    <li><a href="#">Annual Returns</a></li>
                                    <li><a href="#">Financial Results</a></li>
                                    <li><a href="#">Financial Subsidiary</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Investor Contact</a></li>
                            <li><a href="#">Shareholding Pattern</a></li>
                            <li><a href="#">Scrutinizer Report</a></li>
                            <li><a href="#">Terms and Conditions for Appointment of Independent Director</a></li>
                            <li><a href="#">Notice for Shareholders</a></li>
                            <li><a href="#">Announcements</a></li>
                            <li><a href="#">Statement of Deviations</a></li>
                            <li><a href="#">Compliance with Stock Exchange</a></li>
                            <li><a href="#">Memorandum of Association and Articles of Association</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Codes and Policies</a></li>
                    <li><a href="#">Gretex Right Issue</a></li>
                    <li><a href="#">Investor Charter</a></li>
                    <li><a href="#">Investor Complaints</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $baseUrl; ?>careers">Join Us</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
        <a href="#" class="header-cta">Contact</a>
    </div>
</nav>

<!-- 
<nav>
    <div class="navbar">
        <a href="http://localhost/Gretex%20Corporate%20main/" class="logo"><img
                src="http://localhost/Gretex%20Corporate%20main/assets/Gretex.png" height="96px" width="96px"
                alt="Gretex-main-logo"></a>
        <span class="mobile-toggle" onclick="document.querySelector('.menu').classList.toggle('show')"><svg
                xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="#fff"
                    d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1m0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1M3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1" />
            </svg></span>
        <ul class="menu">
            <li><a href="#">About Us</a></li>

            <li>
                <span>What We Do <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                    </svg></span>
                <ul class="dropdown">
                    <li>
                        <span>Capital Markets</span>
                        <ul class="dropdown-content">
                            <li><a href="#">IPO</a></li>
                            <li><a href="#">FPO</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Corporate Finance</span>
                        <ul class="dropdown-content">
                            <li><a href="#">Valuation</a></li>
                            <li><a href="#">Private Equity</a></li>
                            <li><a href="#">Venture Capital</a></li>
                            <li><a href="#">Bank Finance and Issue of Debt Securities</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>Corporate Restructuring</span>
                        <ul class="dropdown-content">
                            <li><a href="#">Mergers & Acquisitions</a></li>
                            <li><a href="#">Takeover</a></li>
                            <li><a href="#">Demergers</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Compliance Advisory</a></li>
                </ul>
            </li>

            <li>
                <span>Offer Documents</span>
                <ul class="dropdown">
                    <li><a href="#">IPO</a></li>
                    <li><a href="#">FPO</a></li>
                    <li><a href="#">Open Offer</a></li>
                </ul>
            </li>

            <li>
                <span>Investor Relations</span>
                <ul class="dropdown">
                    <li>
                        <span>Disclosures under reg 46 of LODR</span>
                        <ul class="dropdown-content">
                            <li><a href="#">Business Details</a></li>
                            <li><a href="#">Composition of Board of Directors and Committee</a></li>
                            <li>
                                <span>Financial Information</span>
                                <ul class="dropdown-subcontent">
                                    <li><a href="#">Annual Reports</a></li>
                                    <li><a href="#">Annual Returns</a></li>
                                    <li><a href="#">Financial Results</a></li>
                                    <li><a href="#">Financial Subsidiary</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Investor Contact</a></li>
                            <li><a href="#">Shareholding Pattern</a></li>
                            <li><a href="#">Scrutinizer Report</a></li>
                            <li><a href="#">Terms and Conditions for Appointment of Independent Director</a></li>
                            <li><a href="#">Notice for Shareholders</a></li>
                            <li><a href="#">Announcements</a></li>
                            <li><a href="#">Statement of Deviations</a></li>
                            <li><a href="#">Compliance with Stock Exchange</a></li>
                            <li><a href="#">Memorandum of Association and Articles of Association</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Codes and Policies</a></li>
                    <li><a href="#">Gretex Right Issue</a></li>
                    <li><a href="#">Investor Charter</a></li>
                    <li><a href="#">Investor Complaints</a></li>
                </ul>
            </li>
        </ul>
        <a href="#" class="cta">Contact</a>
    </div>
</nav>
 -->



<!-- <nav class="navbar-main">
    <div class="nav-logo-main">
        <a href="http://localhost/Gretex%20Corporate%20main/">
            <img src="http://localhost/Gretex%20Corporate%20main/assets/Gretex.png" height="96px" width="96px"
                alt="Gretex-main-logo">
        </a>
    </div>

    <div class="nav-links-container-main">
        <ul class="navbar">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">About</a>
            </li>

            <ul class="navbar-dropdown">
                <li><a href="nav-link">What We Do</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 16 16">
                        <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                    </svg></li>
                <div class="dropdown-content">
                    <ul class="what-we-do-dropdown">
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Capital
                                Markets</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Corporate
                                Finance</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Corporate
                                Restructuring</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Compliance
                                Advisory</a></li>
                    </ul>
                </div>
            </ul>



            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">What We Do</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">Offer Documents</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">Investor Relations</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">Join Us</a>
            </li>



            <ul class="nav-bar-dropdown">
                <li class="nav-dropdown">
                    <a class="nav-link" href="">What we do
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                        </svg>
                    </a>
                    <ul class="what-we-do-dropdown">
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Capital
                                Markets</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Corporate
                                Finance</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Corporate
                                Restructuring</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/what-we-do/capital-markets">Compliance
                                Advisory</a></li>
                    </ul>
                </li>
            </ul>
        </ul>
    </div>

    <div class="header-contact-cta">
        <a class="navbar-cta-button" href="">
            <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
            <span class="button-text">Contact Us</span> </a>
    </div>

</nav>
 -->



<!-- <nav class="main-navbar">
    <div class="nav-logo">
        <a href="http://localhost/Gretex%20Corporate%20main/">
            <img src="http://localhost/Gretex%20Corporate%20main/assets/Gretex.png" height="128px" width="128px"
                alt="Gretex-main-logo">
        </a>
    </div>

    <div class="nav-links-container">

        <ul class="navbar">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">About</a>
            </li>

            <ul class="nav-bar-mega-menu">
                <li class="nav-dropdown">
                    <a class="nav-link" href="#">What we do
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                        </svg>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-row">
                            <div class="mega-menu-col">
                                <h2>What we do</h2>
                                <p>Learn more about how we cultivate and harness world-class intellectual capital and
                                    expertise to solve our clients' most complex challenges.</p>
                                <a class="mega-menu-button"
                                    href="http://localhost/Gretex%20Corporate%20main/what-we-do/index.php">Explore all
                                    services</a>
                            </div>
                            <div class="mega-menu-col">
                                <h3>Capital Markets</h3>
                                <div class="mega-menu-col-sub-container">
                                    <a class="mega-menu-nav-item" href="">IPO</a>
                                    <a class="mega-menu-nav-item" href="">FPO</a>
                                </div>
                            </div>
                            <div class="mega-menu-col">
                                <h3>Corporate Finance</h3>
                                <div class="mega-menu-col-sub-container">
                                    <a class="mega-menu-nav-item" href="">Valuation</a>
                                    <a class="mega-menu-nav-item" href="">Private Equity</a>
                                    <a class="mega-menu-nav-item" href="">Venture Capital</a>
                                    <a class="mega-menu-nav-item" href="">Bank Finance and Issue of Debt Securities</a>
                                </div>
                            </div>
                            <div class="mega-menu-col">
                                <h3>Corporate Restructuring</h3>
                                <div class="mega-menu-col-sub-container">
                                    <a class="mega-menu-nav-item" href="">Mergers & Acquisitions</a>
                                    <a class="mega-menu-nav-item" href="">Takeover</a>
                                    <a class="mega-menu-nav-item" href="">Demergers</a>
                                </div>
                            </div>
                            <div class="mega-menu-col">
                                <h3>Compliance Advisory</h3>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav-bar-dropdown">
                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/investor-relations">Offer
                        Documents
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                        </svg>
                    </a>
                    <ul></ul>
                </li>
            </ul>

            <ul class="nav-bar-dropdown">
                <li class="nav-item nav-dropdown">
                    <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/investor-relations">Investor
                        Relations
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="#fff" d="M4.5 6L8 9.5L11.5 6" stroke-width="1" />
                        </svg>
                    </a>
                    <ul class="menu">
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr">Disclosures
                                under Reg 46 Of LODR <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="#fff" d="M12.6 12L8 7.4L9.4 6l6 6l-6 6L8 16.6z" />
                                </svg></a>
                            <ul class="submenu">
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/business-details.php">Business
                                        Details</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/composition-of-board-of-directors.php">Composition
                                        of Board of Directors and
                                        Committee</a></li>
                                <li><a class="nav-link-white" href="">Financial Information <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="#fff" d="M12.6 12L8 7.4L9.4 6l6 6l-6 6L8 16.6z" />
                                        </svg></a>
                                    <ul class="submenu sub-sub-menu">
                                        <li><a class="nav-link-white"
                                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/annual-reports.php">Annual
                                                Reports</a></li>
                                        <li><a class="nav-link-white"
                                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/annual-returns.php">Annual
                                                Returns</a></li>
                                        <li><a class="nav-link-white"
                                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/financial-results.php">Financial
                                                Results</a></li>
                                        <li><a class="nav-link-white"
                                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/financials-subsidiary.php">Financial
                                                Subsidiary</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/investor-contact.php">Investor
                                        Contact</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/shareholding-pattern.php">
                                        Shareholding Pattern</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/scrutinizer-report.php">Scrutinizer
                                        Report</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/terms-and-condition-for-appointment-of-independent-director.php">Terms
                                        and Conditions for Appointment of
                                        Independent Director</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/notice-for-shareholders.php">Notice
                                        for Shareholders</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/announcements.php">Announcements</a>
                                </li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/statement-of-deviation.php">Statement
                                        of Deviations</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/compliance-with-stock-exchange.php">Compliance
                                        with Stock Exchange</a></li>
                                <li><a class="nav-link-white"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/memorandum-of-association-and-articles-of-association.php">Memorandum
                                        of Association and Articles of Association</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/codes-and-policies.php">Codes
                                and Policies</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/gretex-rights-issue.php">Gretex
                                Right Issue</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/investor-charter.php">Investor
                                Charter</a></li>
                        <li><a class="nav-link-white"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/investor-complaints.php">Investor
                                Complaints</a></li>
                    </ul>
                </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/careers">Join Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Gretex%20Corporate%20main/about">Blog</a>
            </li>

        </ul>

    </div>

    <div class="nav-cta">
        <a class="navbar-cta-button" href="">
            <i class="arrow-dissapear fa-solid fa-arrow-right"></i>
            <span class="button-text">Contact Us</span>
            <i class="arrow-appear fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <div class="hamburger-menu">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="#fff"
                    d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1m0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1M3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1" />
            </svg>

        </a>
    </div>

    <div class="mobile-menu" id="mobile-links">

        <div class="mobile-navbar">

            <div class="mobile-navbar-header">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="#000"
                            d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                </a>
            </div>

            <div class="mobile-navbar-body">
                <ul class="navbar-mobile">
                    <li class="nav-item-mobile">
                        <a class="nav-link-mobile" href="http://localhost/Gretex%20Corporate%20main/about">About</a>
                    </li>

                    <li class="nav-item-mobile">
                        <a class="nav-link-mobile" href="http://localhost/Gretex%20Corporate%20main/what-we-do/">What we
                            do</a>
                    </li>

                    <li class="nav-item-mobile">
                        <a class="nav-link-mobile" href="http://localhost/Gretex%20Corporate%20main/ipo">IPO</a>
                    </li> -->

<!-- Investor Relations -->
<!-- <li class="nav-item-mobile">
                        <a class="nav-link-mobile toggle-btn" href="#">Investor Relations <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#000" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                            </svg></a>
                        <div class="dropdown-content">
                            <a class="toggle-btn nav-link-mobile"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr">Disclosures
                                under Reg 46 Of LODR <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="#000" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                                </svg></a>
                            <div class="dropdown-content">
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/business-details.php">Business
                                    Details</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/composition-of-board-of-directors.php">Composition
                                    of Board of Directors</a>

                                <a class="toggle-btn nav-link-mobile" href="#">Financial Information <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#000" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                                    </svg></a>
                                <div class="dropdown-content">
                                    <a class="nav-link-mobile"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/annual-reports.php">Annual
                                        Reports</a>
                                    <a class="nav-link-mobile"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/annual-returns.php">Annual
                                        Returns</a>
                                    <a class="nav-link-mobile"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/financial-results.php">Financial
                                        Results</a>
                                    <a class="nav-link-mobile"
                                        href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/financial-information/financials-subsidiary.php">Financial
                                        Subsidiary</a>
                                </div>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/investor-contact.php">Investor
                                    Contact</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/shareholding-pattern.php">Shareholding
                                    Pattern</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/scrutinizer-report.php">Scrutinizer
                                    Report</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/terms-and-condition-for-appointment-of-independent-director.php">Terms
                                    & Conditions for Independent Director</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/notice-for-shareholders.php">Notice
                                    for Shareholders</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/announcements.php">Announcements</a>
                                <a class="nav-link-mobile"
                                    href="http://localhost/Gretex%20Corporate%20main/investor-relations/disclosures-under-reg-46-of-lodr/statement-of-deviation.php">Statement
                                    of Deviations</a>
                                <a class="nav-link-mobile" href="#">Compliance with Stock Exchange</a>
                            </div>
                            <a class="nav-link-mobile"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/codes-and-policies.php">Codes
                                and Policies</a>
                            <a class="nav-link-mobile"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/gretex-rights-issue.php">Gretex
                                Rights Issue</a>
                            <a class="nav-link-mobile"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/investor-charter.php">Investor
                                Charter</a>
                            <a class="nav-link-mobile"
                                href="http://localhost/Gretex%20Corporate%20main/investor-relations/investor-complaints.php">Investor
                                Complaints</a>
                        </div>
                    </li>

                    <li class="nav-item-mobile">
                        <a class="nav-link-mobile" href="http://localhost/Gretex%20Corporate%20main/careers/">Join
                            Us</a>
                    </li>
                    <li class="nav-item-mobile">
                        <a class="nav-link-mobile" href="#">Blog</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</nav> -->