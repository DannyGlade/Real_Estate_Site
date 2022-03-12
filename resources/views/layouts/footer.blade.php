<!-- Footer Bootstrap -->
<div class="container">
    <footer class="footer mt-auto py-5">
        <div class="row">
            <div class="col-3">
                <h5><i class="fa fa-sitemap" aria-hidden="true"></i> Sitemap</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('userHome') }}" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show') }}" class="nav-link p-0 text-muted">Properties</a></li>                    
                    <li class="nav-item mb-2"><a href="{{ route('show_faq') }}" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show_terms') }}" class="nav-link p-0 text-muted">Terms</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('show_about') }}" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            {{-- <div class="col-2">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div> --}}

            <div class="col-4 offset-1">
                <div class="mb-3 row">
                    @if ($logo_image->value)
                        <div class="col-2 me-3">
                            <a class="navbar-brand" href="{{ route('userHome') }}">
                                <img style="height: 80px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                                    alt="{{ $brand_title->value ?? 'DG-Estate' }}">
                            </a>
                        </div>
                    @endif
                    <div class="col my-auto">
                        <a class="text-muted btn p-0" href="{{ route('userHome') }}">
                            <h4>{{ $brand_title->value ?? 'DG-Estate' }}</h4>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <h5 class="mb-3"><i class="far fa-address-book"></i> Contact Us</h5>
                    @if ($contacts['phone']->value)
                        <h6 class="mb-2">
                            <a class="btn btn-outline-success btn-sm"
                                href="tel:{{ $contacts['phone']->value }}">
                                <i class="fas fa-phone-alt"></i> {{ $contacts['phone']->value }}</a></h6>
                    @endif
                    @if ($contacts['email']->value)
                        <h6 class="mb-2">
                            <a class="btn btn-outline-primary btn-sm"
                                href="mailto:{{ $contacts['email']->value }}">
                                <i class="fas fa-envelope"></i> {{ $contacts['email']->value }}</a></h6>
                    @endif
                </div>
                {{-- <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form> --}}
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>{{ $footer_content->value ?? '© 2022 Company, Inc. All rights reserved.' }}</p>
            <ul class="list-unstyled d-flex">
                @foreach ($social_links as $key => $value)
                    @if (!empty($value->value))
                        <li class="ms-3">
                            <a class="link-dark" href="{{ $value->value }}">
                                <h4>
                                    <i class="fa {{ 'fa-' . $key }}" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </li>
                    @endif
                @endforeach
                {{-- <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li> --}}
            </ul>
        </div>
    </footer>
</div>
