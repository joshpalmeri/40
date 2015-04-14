<section id="contact" class="contact">
    <div class="container clearfix">
        <h2 class="serif-header">Contact Us</h2>
        <form action="contact/submit.php" method="post" class="contact-container validate clearfix"> 

            <div class="clearfix">
                <div class="input-wrapper input-wrapper-half clearfix">
                    <label class="hide-accessible" for="first-name">Your First Name</label>
                    <input id="first-name" class="first-name" name="first-name" minlength="2" type="text" placeholder="First Name" required/>
                </div>
                
                <div class="input-wrapper input-wrapper-half clearfix">
                    <label class="hide-accessible" for="last-name">Last Name</label>
                    <input id="last-name" class="last-name" name="last-name" minlength="2" type="text" placeholder="Last Name" required/>
                </div>

                <div class="input-wrapper input-wrapper-half clearfix">
                    <label class="hide-accessible" for="email">E-mail Address</label>
                    <input id="email" class="email" name="email" type="email" placeholder="E-mail Address" required/>
                </div>

                <div class="input-wrapper input-wrapper-half clearfix">
                    <label class="hide-accessible" for="phone">Phone Number</label>
                    <input id="phone" class="" name="phone" minlength="2" type="phone" placeholder="Phone Number" required/>
                </div>
            </div>

            <div class="input-wrapper clearfix">
                <label for="intent">I would like to:</label>
                <textarea id="intent" class="intent" name="intent" minlength="2" placeholder="Tell us what you'd like to know about DDM"></textarea>
            </div>

            <div class="input-wrapper clearfix">
                <span class="label">I am interested in <em>(check all that apply)</em>:</span>

                <input type="checkbox" value="PRAYSFORCE!" id="interested-01" name="interested-01" data-toggle-details="true" data-details-target="register-for-class-details" />
                <label for="interested-01"><span></span>PRAYSFORCE!</label>

                <input type="checkbox" value="Praylates" id="interested-02" name="interested-02" data-toggle-details="true" data-details-target="register-for-class-details" />
                <label for="interested-02"><span></span>Praylates</label>

                <input type="checkbox" value="Workshops" id="interested-03" name="interested-03" />
                <label for="interested-03"><span></span>Workshops</label>

                <input type="checkbox" value="Dance Choreography" id="interested-04" name="interested-04" />
                <label for="interested-04"><span></span>Dance Choreography</label>

                <input type="checkbox" value="Taking a Dance Class" id="interested-05" name="interested-05" data-toggle-details="true" data-details-target="register-for-class-details" />
                <label for="interested-05"><span></span>Taking a Dance Class</label>

                <input type="checkbox" value="Receiving Dance Coaching" id="interested-06" name="interested-06" />
                <label for="interested-06"><span></span>Receiving Dance Coaching</label>

                <input type="checkbox" value="Auditioning for DDM's Dance Ministry Team" id="interested-07" name="interested-07" />
                <label for="interested-07"><span></span>Auditioning for DDM's Dance Ministry Team</label>

                <input type="checkbox" value="Childrens Ministry" id="interested-08" name="interested-08" />
                <label for="interested-08"><span></span>Children’s Ministry</label>

                <input type="checkbox" value="Engaging DDM for Ministry Opportunities" id="interested-09" name="interested-09" />
                <label for="interested-09"><span></span>Engaging DDM for Ministry Opportunities</label>

                <input type="checkbox" value="Booking DDM for an Event" id="interested-10" name="interested-10" data-toggle-details="true" data-details-target="event-booking-details" />
                <label for="interested-10"><span></span>Booking DDM for an Event</label>

                <input type="checkbox" value="Registering for a class" id="interested-11" name="interested-11" data-toggle-details="true" data-details-target="register-for-class-details" />
                <label for="interested-11"><span></span>Registering for a class</label>
            </div>

            <div class="input-wrapper event-booking-details hidden clearfix">
                <label for="event">Event Details:</label>
                <textarea id="event" class="event" name="event" type="text" placeholder="Tell us what you would like DDM to provide for your event..."></textarea>
            </div>

            <div class="input-wrapper register-for-class-details hidden clearfix">
                <span class="label"><em>Register for a class NOW!</em></span>

                <input type="checkbox" value="PRAYSFORCE!" id="register-01" name="register-01" />
                <label for="register-01"><span></span>PRAYSFORCE!</label>

                <input type="checkbox" value="Praylates" id="register-02" name="register-02" />
                <label for="register-02"><span></span>Praylates</label>

                <input type="checkbox" value="Ballet" id="register-03" name="register-03" />
                <label for="register-03"><span></span>Ballet</label>

                <input type="checkbox" value="Formal training in dance or worship arts" id="register-04" name="register-04" />
                <label for="register-04"><span></span>Formal training in dance or worship arts</label>

                <input type="checkbox" value="Other" id="register-05" name="training-05" />
                <label for="register-05"><span></span>Other</label>
            </div>

            <div class="input-wrapper clearfix">
                <span class="label">What describes you? (check all that apply)</span>

                <input type="checkbox" value="I don’t dance much but I would like to" id="describes-01" name="describes-01" />
                <label for="describes-01"><span></span>I don’t dance much, but I would like to</label>

                <input type="checkbox" value="Im just getting started with dance" id="describes-02" name="describes-02" />
                <label for="describes-02"><span></span>I’m just getting started with dance</label>

                <input type="checkbox" value="Ive been dancing for some time now" id="describes-03" name="describes-03" data-toggle-details="true" data-details-target="training-details" />
                <label for="describes-03"><span></span>I’ve been dancing for some time now</label>

                <input type="checkbox" value="I want to use my talents for the Lord" id="describes-04" name="describes-04" data-toggle-details="true" data-details-target="training-details" />
                <label for="describes-04"><span></span>I've had dance training</label>

                <input type="checkbox" value="I play an instrument or sing" id="describes-05" name="describes-05" />
                <label for="describes-05"><span></span>I play an instrument or sing</label>

                <input type="checkbox" value="I want to use my talents for the Lord" id="describes-06" name="describes-06" />
                <label for="describes-06"><span></span>I want to use my talents for the Lord</label>
            </div>

            <div class="input-wrapper training-details hidden clearfix">
                <span class="label">I've had dance training in:</span>

                <input type="checkbox" value="Ballet" id="training-01" name="training-01" />
                <label for="training-01"><span></span>Ballet</label>

                <input type="checkbox" value="Jazz" id="training-02" name="training-02" />
                <label for="training-02"><span></span>Jazz</label>

                <input type="checkbox" value="Tap" id="training-03" name="training-03" />
                <label for="training-03"><span></span>Tap</label>

                <input type="checkbox" value="Contemporary" id="training-04" name="training-04" />
                <label for="training-04"><span></span>Comtenporary</label>

                <input type="checkbox" value="Hip Hop" id="training-05" name="training-05" />
                <label for="training-05"><span></span>Hip Hop</label>

                <input type="checkbox" value="Other" id="training-06" name="training-06" />
                <label for="training-06"><span></span>Other</label>
            </div>

            <input class="submit" type="submit" name="submit" value="Submit"/>

        </form>
    </div>
</section>