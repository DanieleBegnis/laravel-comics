<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 ">
                <div class="row my-2">
                    <div class="col-4">
                        <div class="subtitle py-3 fs-5 font-weight-bold">DC COMICS</div>
                        <ul>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="comic in comics">
                                <a class="px-6" href="#">Characters</a>
                            </li>
                        </ul>
                        <div class="subtitle py-3 fs-5 font-weight-bold">SHOP</div>
                        <ul>
                            <li class="d-flex align-items-center" v-for="store in shop">
                                <a class="px-6" href="#">Shop DC</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="store in shop">
                                <a class="px-6" href="#">Shop DC Collectibles</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="subtitle py-3 fs-5 font-weight-bold">DC</div>
                        <ul>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="magazine in dc">
                                <a class="px-6" href="#">Terms of use</a>
                            </li>
                        </ul>                          
                    </div>
                    <div class="col-4">
                        <div class="subtitle py-3 fs-5 font-weight-bold">SITES</div>
                        <ul>
                            <li class="d-flex align-items-center" v-for="site in sites">
                                <a class="px-6" href="#">DC</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="site in sites">
                                <a class="px-6" href="#">DC</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="site in sites">
                                <a class="px-6" href="#">DC</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="site in sites">
                                <a class="px-6" href="#">DC</a>
                            </li>
                            <li class="d-flex align-items-center" v-for="site in sites">
                                <a class="px-6" href="#">DC</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <img src="../assets/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-final">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <button type="button" class="btn my-3">SIGN-UP! NOW</button>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <div class="subtitle font-weight-bold fs-5"> FOLLOW US</div>
                    <ul class="d-flex">
                        <li>
                            <img class="mx-3" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                        </li>
                        <li>
                            <img class="mx-3" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
                        </li>
                        <li>
                            <img class="mx-3" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                        </li>
                        <li>
                            <img class="mx-3" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                        </li>
                        <li>
                            <img class="mx-3" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
