<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <!-- Content for the first section -->
                <h5>Our Links List:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-about') }}" class="nav-link p-0 text-body-secondary">
                            About/Why Pertoda
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-about') }}" class="nav-link p-0 text-body-secondary">
                            Features
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-privacy') }}" class="nav-link p-0 text-body-secondary">
                            Privacy Policy
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-terms') }}" class="nav-link p-0 text-body-secondary">
                            Terms and Conditions
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-contact') }}" class="nav-link p-0 text-body-secondary">
                            contact Us
                        </a>

                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-about') }}" class="nav-link p-0 text-body-secondary">
                            Sitemap
                        </a>

                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('footer-faqs') }}" class="nav-link p-0 text-body-secondary">
                            FAQs
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <!-- Newsletter form -->
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p class="mb-0">© 2023 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>
                </li>

                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                </li>

                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>
    </footer>
</div>
