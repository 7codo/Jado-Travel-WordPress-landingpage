<?php

/**
 * The template for displaying home pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jadoo
 */

get_header();
?>
<main class="home-page">
    <!-- Services Section  -->
    <section class="services ybox">
        <div class="container">
            <h4 class="services__headtag section__headtag">CATEGORY</h4>
            <h3 class="services__title section__title">We Offer Best Services</h3>
            <div class="services__categories">
                <div class="category">
                    <img class="category__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/services/satellite.png" alt="satellite icon">
                    <h5 class="category__title">Calculated Weather</h5>
                    <p class="category__description">Built Wicket longer admire do barton vanity itself do in it.</p>
                </div>

                <div class="category category__special">
                    <img class="category__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/services/plane.png" alt="airplane icon">
                    <h5 class="category__title">Best Flights</h5>
                    <p class="category__description">Engrossed listening. Park gate sell they west hard for the.</p>
                </div>
                <div class="category">
                    <img class="category__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/services/mic.png" alt="mic icon">
                    <h5 class="category__title">Local Events</h5>
                    <p class="category__description">Barton vanity itself do in it. Preferd to men it engrossed listening. </p>
                </div>
                <div class="category">
                    <img class="category__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/services/settings.png" alt="settings icon">
                    <h5 class="category__title">Customization</h5>
                    <p class="category__description">We deliver outsourced
                        aviation services for
                        military customers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section  -->
    <section class="destinations ybox">
        <div class="container">
            <h4 class="destinations__headtag section__headtag">Top Selling</h4>
            <h3 class="destinations__title section__title">Top Destinations</h3>
            <div class="destinations__categories">
                <div class="categories__dest">
                    <img class="dest__image" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/destinations/rome-italy.png" alt="Rome Italy" />
                    <div class="dest__details">
                        <p class="details__title">Rome, Italty</p>
                        <p class="details__description">$5,42k</p>
                    </div>
                    <div class="dest__navigation">
                        <img class="navigation__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/nav.png">
                        <p class="navigation__duration">10 Days Trip</p>
                    </div>
                </div>
                <div class="categories__dest">
                    <img class="dest__image" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/destinations/uk.png" alt="London Uk" />
                    <div class="dest__details">
                        <p class="details__title">London, UK</p>
                        <p class="details__description">$4.2k</p>
                    </div>
                    <div class="dest__navigation">
                        <img class="navigation__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/nav.png">
                        <p class="navigation__duration">12 Days Trip</p>
                    </div>
                </div>
                <div class="categories__dest">
                    <img class="dest__image" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/destinations/europ.png" alt="Full Europe" />
                    <div class="dest__details">
                        <p class="details__title">Full Europe</p>
                        <p class="details__description">$15k</p>
                    </div>
                    <div class="dest__navigation">
                        <img class="navigation__icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/nav.png">
                        <p class="navigation__duration">28 Days Trip</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- book Section -->
    <section class="book ybox">
        <div class="container">
            <div class="book__structor">
                <h4 class="structor__headtag section__headtag">Easy and Fast</h4>
                <h3 class="structor__title section__title">Book your next trip
                    in 3 easy steps</h3>
                <ul class="structor__values">
                    <li class="value">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/choose-destination.png" alt="Choose Destination" class="value__icon">
                        <div class="copy">
                            <h5 class="value__heading">Choose Destination</h5>
                            <p class="value__description">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </li>
                    <li class="value middle">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/make-payment.png" alt="Make Payment" class="value__icon">
                        <div class="copy">
                            <h5 class="value__heading">Make Payment</h5>
                            <p class="value__description">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </li>
                    <li class="value">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/reach-airport.png" alt="Reach Airport" class="value__icon">
                        <div class="copy">
                            <h5 class="value__heading">Reach Airport on Selected Date</h5>
                            <p class="value__description">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="book__image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/hero-booking.png" alt="Book Trip">
            </div>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials ybox">
        <div class="container">
            <div class="testimonials__details">
                <h4 class="structor__headtag section__headtag">Testimonials</h4>
                <h3 class="structor__title section__title">What people say
                    about Us.</h3>
            </div>
            <div class="owl-carousel testimonials__cards">
                <div class="testimonial__card">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/avatars/avatar1.png" alt="Mike Taylor" class="avatar">
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nam quos nostrum, quidem eligendi voluptatibus.
                    </p>
                    <h4 class="title">Mike taylor</h4>
                    <h5 class="headtag">Company Owner</h5>
                </div>
                <div class="testimonial__card">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/avatars/avatar2.png" alt="Chris Thomas" class="avatar">
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nam quos nostrum, quidem eligendi voluptatibus.
                    </p>
                    <h4 class="title">Chris Thomas</h4>
                    <h5 class="headtag">CEO of Red Button</h5>
                </div>


            </div>
        </div>
    </section>

    <!-- Logos Section -->
    <section class="logos ybox">
        <div class="container">
            <div class="logos__pack">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/logo1.png" alt="Expedia Logo">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/logo2.png" alt="Axon Logo">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/logo3.png" alt="Jetstar Logo">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/logo4.png" alt="Logo">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/logo5.png" alt="Alitalia Logo">
            </div>
        </div>
    </section>

    <!-- subscribe Section -->
    <section class="subscribe ybox">
        <div class="container">
            <div class="subscribe__card">
                <h5 class="subscribe__cta">
                    Subscribe to get information, latest news and other
                    interesting offers about Cobham
                </h5>
                <div class="subscribe__form">
                    <input type="email" name="email" id="subscribe-email" class="email-input" placeholder="Your Email">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
