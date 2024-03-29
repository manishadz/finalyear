<footer>
    <section class="vendor-top-footer">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="vendor-info">
                        <a href="{{ url('/') }}" class="brand-logo">Mobile Auction</a>
                        <p>
                            Automated Pricing and Auctions for Used
                            Mobile Phones.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="vendor-contact">
                        <h3 class="title">Contact Information</h3>
                        <div class="contact-info mb-3">
                            <h5>Mobile Number</h5>
                            <a href="whatsapp://send?phone={{ $_siteConfigs['mobile'] ?? '' }}" class="text-decoration-none text-white">{{ $_siteConfigs['mobile'] ?? '+977 9856' }}
                            </a>
                        </div>
                        <div class="contact-info mb-3">
                            <h5>Email Address</h5>
                            <a href="mailto:{{$_siteConfigs['email'] ?? '#'}}" class="text-decoration-none text-white">
                                {{ $_siteConfigs['email'] ?? 'mail@example.com' }}
                            </a>
                        </div>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>Kathmandu, Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="newsletter">
                        <h3 class="title">Social Media</h3>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href="https://facebook.com/manish_adz" target="_blank">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/manish_adz" target="_blank">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/manish_adz" target="_blank">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vendor-bottom-footer mb-5 mb-md-0">
        <div class="container-lg">
            <div class="d-flex align-items-center justify-content-center flex-wrap">
                <p class="copyright-text pb-2 pb-sm-1">
                    © Mobile Auction -  {{date('Y')}}   All rights reserved.
                </p>
            </div>
        </div>
    </section>
</footer>
