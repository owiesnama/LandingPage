<template>

            <div class="sm:p-2 md:p-0">
                <div class="input">
                    <span class="icon">
                        <i class="fas fa-envelope text-lg"></i>
                    </span>
                    <input placeholder="Email"
                    type="text">
                </div>

                <div class="input">
                    <span class="icon">
                        <i class="fas fa-lock text-lg"></i>
                    </span>
                    <input placeholder="password"
                    type="password">
                </div>

                <div class="flex justify-between">
                    <label class="">
                        <input type="checkbox">
                        <span class="text-grey-light text-sm font-light">Remember me</span>
                    </label>
                    <a href="#" class="no-underline text-sm text-primary-link">Forget password ?</a>
                </div>


                <div class="my-16 flex justify-center">

                        <button class="rounded-full main-gradient font-light px-10 py-3 text-white" >Sign In</button>

                </div>
                <p class="text-center text-grey">Don't have an account yet?   <a href="/signup"
                class="no-underline text-sm text-secondary-link"
                @click.prevent="$emit('signup')">Sign Up</a></p>
                
            </div>
        
</template>
<script>
export default {};
</script>
