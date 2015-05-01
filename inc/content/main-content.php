<!-- <nav> -->
    <?php
        $file = "site-nav.php";
        include($path . $file);
    ?>
<!-- </nav> -->

<section class="clearfix marquee first-section main-video no-overflow">
    <video id="forty-video" class="background-video" loop preload="none">
        <source src="video/sbu-40-under-40.mp4" type="video/mp4" />
        <source src="video/sbu-40-under-40.webm" type="video/webm" />
        <source src="video/sbu-40-under-40.ogv" type="video/ogg" />
    </video>
    <img class="marquee-logo-mobile" src="img/40-under-red-banner-logo-small.png" alt="40 Under Forty logo" />
    <img class="marquee-logo-desktop" src="img/40-under-red-banner-logo-large.png" alt="40 Under Forty logo" />
    <a class="cta arrow-after nivo-lightbox stop-video-trigger" href="https://www.youtube.com/watch?v=hsx1Rs8Sgi0">Watch the Video</a>
    <div class="quote">
        <span>“Great universities are defined by the achievement and support of their alumni. <strong>All of you personify the power of a <br />Stony Brook degree.”</strong></span>
        <em>Stony Brook President Samuel L. Stanley Jr., MD</em>
        <a href="." class="close-quote stop-video-trigger icon-before close-icon-before" aria-label="Close quote"><span class="hide-accessible">Close quote</span></a>
    </div>
</section>
<section class="nomination-period-notice clearfix">
    <span><em class="sbuicon-check icon"></em>Nominations now being accepted!</span>
    <a class="cta arrow-after" href="#">Nominate someone today!</a>
</section>
<section class="honorees-grid-promo clearfix">
    <h2><span class="text">The Finalists</span></h2>
    <a href="2014" id="panning">
        <span class="cta arrow-after">View the Honorees</span>
    </a>
</section>

<!--
<section class="honorees-grid clearfix">
    <h2><span class="text">The <span class="year">2014</span> Finalists</span></h2>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="1" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield Really Long Name</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="2" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="3" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="4" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="5" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>

    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="5" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>
    <a href="people/errol-cockfield.php" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="5" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Arts & Entertainment">
        <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
        <div class="preview-details">
            <span class="name">Errol<br /> Cockfield</span>
            <span class="category">Arts &amp; Entertainment</span>
            <span class="view-label arrow-after">View Bio</span>
        </div>
    </a>

    <div class="overlay bio-overlay">
        <div class="overlay-controls clearfix">
            <a href="." class="back overlay-control icon-before grid-icon-before clearfix" data-role="button" aria-label="Back to Nominee List" tabindex="0"><span class="hide-accessible-smaller">Back</span></a>
            <a href="." class="close overlay-control icon-before dots-icon-before clearfix category-nav-trigger" data-role="button" aria-label="View Categories" tabindex="0"><span class="hide-accessible-smaller">Categories</span></a>
            <h3 class="category-header stars-around">Civil Service &amp; Activism</h3>
        </div>
        <div class="name-detail overlay-wrapper clearfix">
            <div class="name">Errol Cockfield <span class="year">'94</span></div>
            <div class="social clearfix">
                <a href="#" class="twitter icon-before twitter-before" target="_blank">@ecockfield</a>
                <a href="#" class="linkedin icon-before linkedin-before" target="_blank">View profile</a>
            </div>
        </div>
        <div class="bio-detail overlay-wrapper clearfix">
            <div class="title-detail">
                <span class="degree">BA English</span>
                <span class="title">Senior VP, Edelman</span>
            </div>
            <div class="bio-image">
                <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield" />
                <a href="http://www.youtube.com/watch?v=Z8MhZJqdEKc" class="cta video-trigger nivo-lightbox icon-before play-icon-before" role="button" tabindex="0">Play Video</a>
            </div>
            <ul class="bullet-points">
                <li>Former Press Secretary for New York Governors David Paterson and Elliot Spitzer</li>
                <li>Former reporter at Newsday and Los Angeles Times</li>
                <li>Named "City and State’s 40 Under 40" in 2007</li>
            </ul>
        </div>
        <a href="http://www.youtube.com/watch?v=Z8MhZJqdEKc" class="cta video-trigger mobile-video-trigger nivo-lightbox icon-before play-icon-before" role="button" tabindex="0">Play Video</a>
        <div class="pagination-wrapper clearfix">
            <a href="." class="back pagination-trigger" data-role="button" aria-label="View previous biography" tabindex="0">
                <span class="label icon-before">Previous</span>
                <span class="name">Joshua <br />Palmeri</span>
            </a>
            <a href="." class="next pagination-trigger" data-role="button" aria-label="View previous biography" tabindex="0">
                <span class="label icon-before">Next</span>
                <span class="name">Lynn<br /> Zawie</span>
            </a>
        </div>
    </div>

</section>
-->

<!-- <category-nav> -->
    <?php
        $file = "category-nav.php";
        include($path . $file);
    ?>
<!-- </category-nav> -->

<section class="tweet-this">
    <div class="wrap clearfix">
        <div class="text clearfix">
            <em>See who made the list for <span>@stonybrooku</span>'s best and brightest Alumni in the 2015 <span>#SBU40Under40</span> Recognition Program!</em>
        </div>
        <a class="cta cta-outline clearfix arrow-after" href="#">Tweet This</a>
    </div>
</section>

<section id="attend-the-event" class="attend-the-event clearfix">
<h2><span class="text">Save the Date</span></h2>
    <div class="content">
        <h3><span>2015 Awards Ceremony</span></h3>
        <ul class="clearfix">
            <li class="icon-before calendar-before">December 31, 1969</li>
            <li class="icon-before clock-before">7PM - 10PM</li>
            <li class="icon-before mapmarker-before">
                Edison Ballroom<br />
                240 W 47th Street<br />
                New York, NY 10036
            </li>
            <li class="icon-before ticket-before">Tickets Coming Soon!</li>
        </ul>
        <a class="cta clearfix arrow-after" href="#">Buy Tickets</a>
        <span class="note">You're <span>Invited!</span></span>
    </div>
</section>

<section id="nomination" class="nominations-promo">
    <div class="wrap clearfix">
        <p class="text clearfix">Do you know a bright, innovative, entrepreneurial-spirited young graduate who has used their Stony Brook degree to pursue their passions, to help others, and lead positive change?</p>
        <strong>Nominations will be accepted soon!</strong>
        <!--<strong>Nominate someone today!</strong>-->
        <!--<strong>Nominations are closed for 2015.</strong>-->
        <a class="cta cta-outline clearfix arrow-after" href="#">Submit Nomination</a>
        <a class="cta cta-outline clearfix arrow-after" href="#">View Nominees</a>
    </div>
</section>

<section id="news" class="tweets-and-news clearfix">
    <div class="wrapper">
        <div class="twitter-feed clearfix">
            <h3 class="icon-before">Twitter</h3>
            <div id="wall">
                <div id="social-stream"></div>
                <div class="clear"></div>
            </div>
            <div class="wrap">
                <a class="cta cta-outline clearfix arrow-after" href="#">View More Tweets</a>
            </div>
        </div>
        <div class="news-feed clearfix">
            <h3 class="icon-before">News</h3>
            <ul class="news">
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong>1/16/15</strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
            </ul>
            <div class="wrap">
                <a class="cta cta-outline clearfix arrow-after" href="#">Read More News</a>
            </div>
        </div>
    </div>
</section>

<section class="event-gallery clearfix">
    <div class="border-box">
        <h3>2014 Event Gallery</h3>
        <div class="carousel-wrapper">
            <div id="the-carousel" class="owl-carousel">
                <!-- Images loaded via AJAX from Flickr -->
            </div>
            <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="sbuicon-arrow-left3"></em></div>
            <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="sbuicon-arrow-right3"></em></div>
        </div>
        <p>Email your event photo(s) to <a href="mailto:40underforty@stonybrook.edu" target="_blank">40underforty@stonybrook.edu</a></p>
    </div>
</section>

<section id="contact" class="contact">
    <p>
        Stony Brook University<br />
        Advancement Events<br />
        (631) 632-4466<br />
        advancementevents@stonybrook.edu
    </p>
</section>