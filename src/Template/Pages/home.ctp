<?php
    $this->layout('alternating_background')
?>

<div id="home-header" align="center">
    <div class="inner-header">
        <h1>
            PJS Honest Auto
        </h1>
        <h2 class="accent-font">
            <i>
                <?= $selectedTag ?>
            </i>
        </h2>
    </div>
</div>
<div id="home-content" align="center">
    <div class="inner-content">
        <h1>
            Welcome to PJS Honest Auto!
        </h1>
        <p>
            Our names are Patrick, James, and Sam. We're three fathers, friends, and pretty cool dudes. We also happen to be automotive
            technicians with almost fifty years of combined automotive experience between us. In 2017, we decided to open our own shop and
            continue our mission of providing reliable, economical, and honest automotive work to the East Central Indiana region.
        </p>
        <p>
            At PJS, we understand the inconvenience and frustration that can come with automotive maintenance. We especially understand
            how hard it can be to find a trustworthy mechanic that offers honest customer service, competitive shop prices, and an overall
            friendly experience. That's why we opened PJS, and why we promise to always...
        </p>
        <ul>
            <li><i>provide honest customer service to every one of our customers. (Even the females.)</i></li>
            <li><i>offer competitive shop prices on all of our repairs, including specials on common and seasonal repairs.</i></li>
            <li><i>make sure each PJS customer has a warm, friendly experience at our shop.</u></i></li>
        </ul>
        <div class="row">
            <div class="col-lg-4">
                <div class="fb-page" data-href="https://www.facebook.com/pjshonestauto/" data-tabs="timeline" data-width="300px" data-height="auto" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pjshonestauto/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pjshonestauto/">PJS Honest Auto</a></blockquote></div>
            </div>
            <div class="col-lg-4">
                <?= $this->element('contact_form') ?>
            </div>
            <div class="col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3052.1225700548775!2d-85.66416408501999!3d40.09498007940382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8814d9a2cde6cb29%3A0x2a29e8e90af04354!2s2126+Pitt+St%2C+Anderson%2C+IN+46016!5e0!3m2!1sen!2sus!4v1515885270743" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <p>
            Be sure to follow our Facebook page or our website for the latest deals! We frequently run specials on common repairs, to make
            sure that your routine maintenance is as easy and as economical for you as possible. We are also open to discuss customization,
            for when your tax check comes in and you haven't prioritized your life as well as you maybe should. So come to PJS Honest Auto,
            for all of <i>your</i> automotive needs.
        </p>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-4">
                PJS Honest Auto
            </div>
            <div class="col-lg-4">
                2126 Pitt St. Anderson, Ind. 46016
            </div>
            <div class="col-lg-4">
                <a href="tel:+17652838979">
                    (765) 283-8979
                </a>
            </div>
        </div>
    </footer>
</div>