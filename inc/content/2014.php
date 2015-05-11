<!-- <nav> -->
    <?php
        $file = "site-nav.php";
        include($path . $file);
    ?>
<!-- </nav> -->

<section class="honorees-grid first-section clearfix">
    <h2 class="section-header"><span class="text">The <span class="year"><?php echo $program_year; ?></span> Honorees</span></h2>
    <div class="clearfix isotope">

        <div class="honoree-box show-all-trigger" role="button" tabindex="0" aria-label="View All Honorees" data-category="Show All">
            <div class="preview-details">
                <span class="name">Currently<br /> Showing</span>
                <span class="category">All Categories</span>
                <span class="view-label arrow-after">View All</span>
            </div>
        </div>

        <!-- BEGIN Output of People Data -->
        <a href="<?php echo $program_year; ?>/profile.php?name=errol-cockfield" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Errol Cockfield" data-index="1" data-filename="errol-cockfield" data-year="<?php echo $program_year; ?>" data-first-name="Errol" data-last-name="Cockfield" data-email="test@email.com" data-category="Entrepreneurship">
            <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield">
            <div class="preview-details">
                <span class="name">Errol<br /> Cockfield</span>
                <span class="category">Entrepreneurship</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=brooke-ellison" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Brooke Ellison" data-index="2" data-filename="brooke-ellison" data-year="<?php echo $program_year; ?>" data-first-name="Brooke" data-last-name="Ellison" data-email="test@email.com" data-category="Arts & Entertainment">
            <img src="img/people/grid/brooke-ellison.jpg" alt="Portrait of Brooke Ellison">
            <div class="preview-details">
                <span class="name">Brooke<br /> Ellison</span>
                <span class="category">Arts &amp; Entertainment</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=arthur-james-goff-iii" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Arthur James Goff III" data-index="3" data-filename="arthur-james-goff-iii" data-year="<?php echo $program_year; ?>" data-first-name="Arthur James" data-last-name="Goff III" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/arthur-james-goff-iii.jpg" alt="Portrait of Arthur James Goff III">
            <div class="preview-details">
                <span class="name">Arthur James<br /> Goff III</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=broken-link" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Broken Link Example" data-index="4" data-filename="broken-link" data-year="<?php echo $program_year; ?>" data-first-name="Broken Link" data-last-name="Example" data-email="test@email.com" data-category="Entrepreneurship">
            <img src="img/people/grid/alex-bard.jpg" alt="Portrait of Broken Link Example">
            <div class="preview-details">
                <span class="name">Broken Link<br /> Example</span>
                <span class="category">Entrepreneurship</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=brooke-ellison" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Brooke Ellison" data-index="5" data-filename="brooke-ellison" data-year="<?php echo $program_year; ?>" data-first-name="Brooke" data-last-name="Ellison" data-email="test@email.com" data-category="Education">
            <img src="img/people/grid/brooke-ellison.jpg" alt="Portrait of Brooke Ellison">
            <div class="preview-details">
                <span class="name">Brooke<br /> Ellison</span>
                <span class="category">Education</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=arthur-james-goff-iii" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Arthur James Goff III" data-index="6" data-filename="arthur-james-goff-iii" data-year="<?php echo $program_year; ?>" data-first-name="Arthur James" data-last-name="Goff III" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/arthur-james-goff-iii.jpg" alt="Portrait of Arthur James Goff III">
            <div class="preview-details">
                <span class="name">Arthur James<br /> Goff III</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <a href="<?php echo $program_year; ?>/profile.php?name=d-kivatinos-m-nusimow" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for D. Kivatinos Nusimow" data-index="7" data-filename="d-kivatinos-m-nusimow" data-year="<?php echo $program_year; ?>" data-first-name="D. Kivatinos &" data-last-name="M. Nusimow" data-email="test@email.com" data-category="Technology">
            <img src="img/people/grid/d-kivatinos-m-nusimow.jpg" alt="D. Kivatinos & M. Nusimow">
            <div class="preview-details">
                <span class="name">D. Kivatinos &amp;<br /> M. Nusimow</span>
                <span class="category">Technology</span>
                <span class="view-label arrow-after">View Bio</span>
            </div>
        </a>
        <!-- END Output of People Data -->
    </div>

    <div class="overlay bio-overlay">
        <!--AJAX loads content here-->
    </div>

</section>

<div class="loader">
    <div class="ball"></div>
</div>

<!-- <category-nav> -->
    <?php
        $file = "category-nav.php";
        include($path . $file);
    ?>
<!-- </category-nav> -->