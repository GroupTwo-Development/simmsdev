
<div id="dialog-content" style="display:none;max-width:500px;" class="p-0">
    <div class="cta-modal-area relative transform overflow-hidden  bg-white shadow-xl transition-all">
        <header class="relative flex flex-row w-full h-[110px] lg:h-[100px]">
            <div class="w-[50%] lg:w-[50%] bg-secondary-green">
                <div class="flex flex-col items-start content-start pt-4 pl-3 lg:pl-10">
                    <span class="block text-simms-gold uppercase tracking-[0.15em]">QUESTION?</span>
                    <h4 class="text-white text-xl">We’re here to help!</h4>
                </div>
            </div>
            <div class="w-[50%] lg:w-[50%] bg-primary-green">
                <div class="flex flex-row justify-start items-center w-full h-full">
                    <div class="w-1/2 h-full">
                        <img src="{{ $primaryPageHeader['modal_headshot'] }}" class="h-full w-full object-cover bg-cover object-top" alt="cta">
                    </div>
                    <div class="pl-2 pr-2 w-1/2">
                        <span class="block text-simms-gold text-xl text-left">Contact us:</span>
                        <a href="tel:1-800-123-4567" class="text-white font-semibold text-lg hover:text-simms-gold transition-all ease-in-out">1-800-123-4567</a>
                    </div>
                </div>
            </div>
        </header>
    
        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
           {!! $primaryPageHeader['global_contact_form'] !!}
        </div>
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




