@extends('web.main')


@section('main-section')

<section class="preloader">
    <div class="spinner">
        <span class="sk-inner-circle"></span>
    </div>
</section>

<main>

    <section class="sign-in-form section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mx-auto col-12">

                    <h1 class="hero-title text-center mb-5">Sign In</h1>

                    <div class="row">
                        <div class="col-lg-8 col-11 mx-auto">
                            <form role="form" method="post">

                                <div class="form-floating mb-4 p-0">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                    <label for="email">Email address</label>
                                </div>

                                <div class="form-floating p-0">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                                    <label for="password">Password</label>
                                </div>

                                <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                    Sign in
                                </button>

                                <p class="text-center">Don’t have an account? <a href="sign-up.html">Create One</a></p>

                            </form>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-10 me-auto mb-4">
                <h4 class="text-white mb-3"><a href="index.html">Little</a> Fashion</h4>
                <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
                <br>
                <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
            </div>

            <div class="col-lg-5 col-8">
                <h5 class="text-white mb-3">Sitemap</h5>

                <ul class="footer-menu d-flex flex-wrap">
                    <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-4">
                <h5 class="text-white mb-3">Social</h5>

                <ul class="social-icon">

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    <li><a href="#" class="social-icon-link bi-skype"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

@endsection