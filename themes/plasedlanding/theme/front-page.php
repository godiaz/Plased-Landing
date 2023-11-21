<?php
get_header();
?>

<div class="dark:bg-gray-900 flex 2xl:flex-row xl:flex-row lg:flex-col md:flex-col sm:flex-col flex-col h-full">
    <div class="flex-col w-full lg:w-full xl:w-1/2 md:w-full sm:w-full 2xl:p-20 xl:p-20 lg:p-20 md:p-20 sm:p-10 sm:pb-0 p-10 pb-0">
        <h1 class="dark:text-white 2xl:leading-snug xl:leading-tight lg:leading-tight md:leading-tight 2xl:text-5xl xl:text-5xl lg:text-5xl md:text-5xl sm:text-4xl text-4xl mb-3 lg:mb-3 md:mb-3 font-extrabold text-black">Finally a CRM for Small Recruitment Companies</h1>
        <p class="dark:text-gray-200 2xl:text-xl lg:text-xl md:text-lg font-light mb-6 text-gray-600">We just want to know if you’re interested. Sign Up below and get our early bird discount.</p>
        <?php echo do_shortcode('[contact-form-7 id="bba478c" title="Contact form 1"]') ?>    
            <!-- <input type="text" id="first_name" class="bg-gray-50 w-1/2 md:w-2/5 lg:w-2/6 xl:w-2/3 border mr-4 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Address" required> -->
            <!-- <button type="button" class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
        <div>
            <ul class="mb-6 max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                <li class="flex items-center pb-2">
                    <svg class="w-7 h-7 me-2 text-blue-700 dark:text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <p class="xl:text-lg 2xl:text-lg md:text-lg dark:text-gray-200 sm:text-md font-light text-gray-600">Learn to use it in <b>1 day</b></p>
                </li>
                <li class="flex items-center pb-2">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-7 md:h-7 lg:w-7 lg:h-7 xl:w-7 xl:h-7 2xl:w-7 2xl:h-7 me-2 text-blue-700 dark:text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <p class="dark:text-gray-200 xl:text-lg 2xl:text-lg md:text-lg sm:text-md font-light text-gray-600">Affordable pricing</p>
                </li>
                <li class="flex items-center pb-2">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-7 md:h-7 lg:w-7 lg:h-7 xl:w-7 xl:h-7 2xl:w-7 2xl:h-7 me-2 text-blue-700  dark:text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <p class="dark:text-gray-200 2xl:text-lg 2xl:text-lg md:text-lg sm:text-md font-light text-gray-600">Automated Tasks</p> 
                </li>
                <li class="flex items-center pb-2">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-7 md:h-7 lg:w-7 lg:h-7 xl:w-7 xl:h-7 2xl:w-7 2xl:h-7 me-2 text-blue-700  dark:text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <p class="dark:text-gray-200 xl:text-lg 2xl:text-lg md:text-lg sm:text-md font-light text-gray-600">Dedicated Account Manager</p> 
                </li>
                <li class="flex items-center pb-2">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-7 md:h-7 lg:w-7 lg:h-7 xl:w-7 xl:h-7 2xl:w-7 2xl:h-7 me-2 text-blue-700  dark:text-white flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <p class="dark:text-gray-200 xl:text-lg 2xl:text-lg md:text-lg sm:text-md font-light text-gray-600">24/7 Ticket Support</p> 
                </li>
            </ul>
        </div>
        <span class="dark:bg-blue-900 dark:text-blue-300 inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Proudly Made in UK 🇬🇧</span>
    </div>
    <div class="lg:w-0 xl:w-1/2 md:w-0 sm:-w-0 p-20">
        <section class="w-full h-full bg-cover rounded bg-slate-200 bg-[url('https://images.pexels.com/photos/3183148/pexels-photo-3183148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')]">
        </section>
    </div>
</div>

<?php
get_footer();