<footer class="footer pt-8 position-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="https://twitter.com/{{config('social.twitter')}}" target="_blank"
                   class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="https://www.instagram.com/{{config('social.instagram')}}/" target="_blank"
                   class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="https://ro.pinterest.com/{{config('social.pinterest')}}/" target="_blank"
                   class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="https://github.com/{{config('social.github')}}" target="_blank"
                   class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © {{ now()->year }} Desenvolvido com <i style="color: red" class="fa fa-heart"></i> por
                    <a style="color: #252f40;" href="http://brtechsistemas.com.br" class="font-weight-bold ml-1"
                       target="_blank">BR tech Sistemas
                    </a>
            </div>
            </p>
        </div>
    </div>
</footer>
