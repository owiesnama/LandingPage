<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body>
<header>
    <nav class="w-full fixed flex justify-center md:justify-end py-4 is-floating">
        <div class="md:mr-32 flex md:flex-row flex-col items-center">
            <a class="no-underline font-bold p-4 capitalize text-white" href="#">home</a>
            <a class="no-underline font-bold p-4 capitalize text-white" href="#">projects</a>
            <a class="no-underline font-bold p-4 capitalize text-white" href="#">services</a>
            <a class="no-underline font-bold p-4 capitalize text-white" href="#">about us</a>
            <a class="no-underline font-bold p-4 capitalize text-white" href="#">contact us</a>
        </div>
    </nav>
    <sectoin class="flex flex-col md:flex-row flex-row mb-8">
        <div class="flex-1 flex flex-col order-2 md:order-1 items-center justify-center leading-loose text-grey-dark">
            <div class="p-10 mb-20">
                <p class="mb-5 -mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa eaque est
                    exercitationem nulla
                    recusandae? Dignissimos ipsa itaque non officiis repellat reprehenderit similique vero. A, deleniti
                    fugiat harum quia sapiente vero.</p>
                <a href="#services"
                   class="no-underline text-white flex-no-grow capitalize bg-orange py-4 px-6 rounded-full w-auto">Discover
                    our
                    services
                </a>
            </div>
            <div class="w-32 h-32 bg-orange rounded-full self-start -ml-16"></div>
        </div>
        <div class="w-full order-1 md:order-2  md:w-3/5">
            <img class="w-full"
                 src="{{asset('svg/phone-illustration.svg')}}"
                 alt="phone-illustration">
        </div>
    </sectoin>
</header>
<main class="mb-8">
    <section id="services" class="flex md:flex-row flex-col justify-between p-12">
        <div class="flex flex-col items-center border-b border-solid border-grey py-8 md:border-0">
            <div class="w-48 h-48 rounded-full bg-orange flex items-center justify-center">
                <img class="w-24 h-24"
                     src="{{asset('/svg/idea.svg')}}" alt="make your ideas reality">
            </div>
            <h3 class="capitalize text-orange my-2">How we operate</h3>
            <p class="leading-loose text-center text-grey-dark">praesentium provident soluta voluptatem?</p>

        </div>
        <div class="flex flex-col items-center border-b border-solid border-grey py-8 md:border-0">
            <div class="w-48 h-48 rounded-full bg-orange flex items-center justify-center">
                <img class="w-24 h-24"
                     src="{{asset('/svg/connect.svg')}}" alt="connect wherever you want">
            </div>
            <h3 class="capitalize text-orange my-2">How we operate</h3>
            <p class="leading-loose text-center text-grey-dark"> excepturi illo libero praesentium provident</p>

        </div>
        <div class="flex flex-col items-center border-b border-solid border-grey py-8 md:border-0">
            <div class="w-48 h-48 rounded-full bg-orange flex items-center justify-center">
                <img class="w-24 h-24"
                     src="{{asset('/svg/positive-grow.svg')}}" alt="lets grow together">
            </div>
            <h3 class="capitalize text-orange my-2">How we operate</h3>
            <p class="leading-loose text-center text-grey-dark">Lorem . Aspernaturs sint! Blanditiis!</p>
        </div>
    </section>
    <section id="projects">
        <div class="carousel">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img class="w-full" src="/svg/phone-slide.svg" alt=""></li>
                </ul>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
                </div>
                <div class="flex glide__bullets justify-center" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>

        </div>
        <div class="p-4 flex items-center justify-center">
            <a href="#services"
               class="no-underline text-white flex-no-grow capitalize bg-orange py-4 px-8 rounded-full w-auto">
                More
            </a>
        </div>
    </section>
    <section id="staff" class="md:-mx-8 flex-col md:flex-row flex md:justify-center md:p-24">
        <div class="flex-col md:flex-row md:mx-8 md:justify-start text-center border-b border-solid border-grey py-8 md:border-0">
            <img class="rounded-full mx-4" src="https://i.pravatar.cc/120" alt="">
            <div class="">
                <h3 class="leading-loose text-black font-sans">John Doe</h3>
                <p class="text-grey mb-4">ATC founder and the CEO</p>
                <p class="font-sans leading-loose font-hairline">We worked with Altkamul to build our SMS donation
                    services</p>
            </div>
        </div>
        <div class="flex-col md:flex-row md:mx-8 md:justify-start text-center border-b border-solid border-grey py-8 md:border-0">
            <img class="rounded-full mx-4" src="https://i.pravatar.cc/120?ss" alt="">
            <div class="">
                <h3 class="leading-loose text-black font-sans">Sarah James</h3>
                <p class="text-grey mb-4">ATC founder and the CEO</p>
                <p class="font-sans leading-loose font-hairline">We worked with Altkamul to build our SMS donation
                    services</p>
            </div>
        </div>
    </section>
    <section id="clients" class="p-8 mb-8">
        <div class="flex justify-center mb-8">
            <h1 class="text-orange border-b-2 border-orange border-solid pb-4 inline-block">Our Clients</h1>
        </div>
        <div class="flex flex-col md:flex-row justify-between md:-m-2">
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/spotify.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/whatsapp.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/facebook.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/twitter.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/google.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
            <div class="border-b border-solid border-grey flex md:border-0 justify-center">
                <img src="//logo.clearbit.com/tumbler.com?size=120&greyscale=true" class="rounded-full m-2">
            </div>
        </div>
    </section>
</main>
<footer>
    <nav class="flex-col md:flex-row flex text-center justify-center md:justify-between w-3/4 m-auto">
        <div class="mb-12 md:mb-2">
            <h3 class="mb-4 uppercase text-orange-dark">Contact us</h3>
            <ul class="text-orange-dark leading-loose font-hairline list-reset">
                <li>00249920754234</li>
                <li>owiesnama@gmail.com</li>
            </ul>
        </div>
        <div class="mb-12 md:mb-2">
            <h3 class="mb-4 uppercase text-orange-dark">The company</h3>
            <ul class="text-orange-dark leading-loose font-hairline list-reset">
                <li>who we are</li>
                <li>our recent projects</li>
            </ul>
        </div>
        <div class="mb-12 md:mb-2">
            <h3 class="mb-4 uppercase text-orange-dark">What we offer</h3>
            <ul class="text-orange-dark leading-loose font-hairline list-reset">
                <li>web development</li>
                <li>mobile development</li>
                <li>software consultation</li>
                <li>SEO</li>
            </ul>
        </div>
    </nav>
    <div class="flex items-center">
        <img class="w-48 h-48 " src="{{asset('svg/footer-illustration.svg')}}" alt="footer-illustration">
        <p class="text-grey-darker">
            2019 All rights reserved
        </p>
    </div>
</footer>
</body>
<script src="{{asset('js/carousel.js')}}"></script>
