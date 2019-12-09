<!DOCTYPE html>
<html lang="en" class='h-full'>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body class='min-h-full'>
    <div id="app">
    <home-view inline-template>
    <div class='h-full flex'>

    <div class="column flex-grow pt-10">
    <div class="max-w-sm m-auto">


        <div class="flex justify-center p-12 pb-16">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="81" height="119" viewBox="0 0 81 119"><defs><path id="81k0a" d="M331.4 200.4h-33.6L256.5 138l28.8-1.4z"/><path id="81k0c" d="M325.5 147c1-1.2 2-2.5 2.9-3.9 4.1-6.4 6.2-13.6 6.2-21.7 0-5.5-1.1-10.6-3.2-15.4-2.1-4.8-5-8.9-8.6-12.5-3.6-3.5-7.8-6.3-12.6-8.4-4.7-2.1-9.8-3.1-15.1-3.1H254l18.4 25.4h17.9c6.5 0 11.2 1.4 14.3 4.1 3 2.7 4.6 6.1 4.6 10 0 3.9-1.5 7.3-4.6 10.2-2.6 2.4-6.5 3.8-11.5 4.2l15.3 21.1c9.1-3 14.3-7 17.1-10z"/><linearGradient id="81k0b" x1="293.95" x2="293.95" y1="136.6" y2="200.4" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2bc9ff"/><stop offset="1" stop-color="#57eaea"/></linearGradient><linearGradient id="81k0d" x1="294.3" x2="294.3" y1="82" y2="157" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2bc9ff"/><stop offset="1" stop-color="#57eaea"/></linearGradient></defs><g><g transform="translate(-254 -82)"><use fill="url(#81k0b)" xlink:href="#81k0a"/></g><g transform="translate(-254 -82)"/><g transform="translate(-254 -82)"/><g transform="translate(-254 -82)"/><g transform="translate(-254 -82)"/><g transform="translate(-254 -82)"><use fill="url(#81k0d)" xlink:href="#81k0c"/></g></g></svg>
        </div>
        <div class="justify-center">
        <h2 class="text-center text-black font-thin mb-4">Sign In To Admin</h2>


        <div class="bg-grey-lightest p-6 pb-8 rounded-lg border border-solid border-grey-lighter mb-10">
            <p class="text-grey">Use username demo@demo.com and password demo to continue or singup.</p>
        </div>
<div class="sm:p-2 md:p-0">

    <div>
        <div class="input">
            <span class="icon">
                        <i class="fas fa-envelope text-lg"></i>
                    </span>
            <input placeholder="Email" type="text">
        </div>

        <div class="input">
            <span class="icon">
                        <i class="fas fa-lock text-lg"></i>
                    </span>
            <select placeholder="password"></select>
        </div>


        <div class="input">
            <span class="icon">
                        <i class="fas fa-lock text-lg"></i>
                    </span>
            <input placeholder="password" type="password">
        </div>


        <div class="flex justify-between">
            <label class="">
                        <input type="checkbox">
                        <span class="text-grey-light text-sm font-light">Remember me</span>
                    </label>
            <a href="#" class="no-underline text-sm text-primary-link">Forget password ?</a>
        </div>

<bla></bla>
        <div class="my-16 flex justify-center">

            <button class="rounded-full main-gradient font-light px-10 py-3 text-white">Sign In</button>

        </div>
        <p class="text-center text-grey">Already member? <a href="#" class="no-underline text-sm text-secondary-link" @click="$emit('alreadymember')">Sign in</a></p>

    </div>

</div>
        </div>


</div>
    </div>
    <div class="column sm:hidden  lg:flex  items-center justify-center relative overflow-hidden">
        <div class="home-bg"></div>
     <div class='overlay main-gradient w-full h-full'></div>

     <div class="max-w-xs text-white">
         <h1 style="font-size: 49px;font-weight: 700;line-height: 50px;">Join our community</h1>
         <p style="font-size: 18px;font-weight: 400;">Be inspire by cool animations created by designer around the globe</p>
     </div>

    </div>

    </div>
    </home-view>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
