

<div class="cta-modal-area relative transform overflow-hidden  bg-white shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg lg:max-w-2xl">
    <header class="relative flex flex-row w-full">
        <div class="w-3/5 bg-secondary-green">
            <div class="flex flex-col items-start content-start pt-4 pl-10">
                <span class="block text-simms-gold uppercase tracking-[0.15em]">QUESTION?</span>
                <h4 class="text-white text-xl">We’re here to help!</h4>
            </div>
        </div>
        <div class="w-2/5 bg-primary-green">
            <div class="flex flex-row justify-start  items-center">
                <img src="@asset('images/cta.png')" class="max-w-20  object-cover object-top" alt="cta">
                <div class="pl-4">
                    <span class="block text-simms-gold text-xl text-left">Contact us:</span>
                    <a href="tel:1-800-123-4567" class="text-white font-semibold text-xl hover:text-simms-gold transition-all ease-in-out">1-800-123-4567</a>
                </div>
            </div>
        </div>
    </header>
    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

        @shortcode('[contact-form-7 id="576b2c7" title="Contact form 1"]') 
       
    </div>
    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
       
        <button @click="isOpen = false" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Close</button>
    </div>
</div>

{{-- <section class="flex flex-col modal-form">
<div class="flex flex-row">
    <div>
        <label> First Name
            [text* fName autocomplete:name] </label>
    </div>
    <div>
        <label> Last Name
            [text* lName autocomplete:name] </label>
    </div>
</div>
<div>
    <div>
        <label> Email
            [email* email autocomplete:email] </label>
    </div>
    <div>
        <label> Phone Number
            [number* number autocomplete:email] </label>
    </div>
</div>
<div>
    <label for="communities">Community
        [select COMMUNITIES "Community" "Community" "community" "community"]
    </label>
</div>
<div>
    <label> Message (optional)
        [textarea your-message] </label>
</div>
[submit "Submit"]

</section> --}}




