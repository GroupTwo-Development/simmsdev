<section class="relative overflow-hidden">
    <div class="bg-secondary-green">
        <div class="container mx-auto">
            <div class="mb-1 p-2">
                @if (function_exists('yoast_breadcrumb'))
                    {{ yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ) }}
                @endif
            </div>
    
            <div class="flex flex-col justify-center items-center pt-4 pb-4 md:pb-8">
                <span class="text-simms-gold uppercase tracking-[0.15em] font-semibold text-sm md:text-lg">{{ $subtitle }}</span>
                <h2 class="text-white font-arno_pro_subhead font-normal text-3xl md:text-4xl">{{ $title }}</h2>
            </div>
        </div>
    </div>
    @if (isset($bg_image))
    <div class="h-24 sm:h-28 md:h-36 lg:h-[350px] xl:h-[450px] 2xl:h-[500px] bg-cover object-cover object-left-top hidden lg:block header-banner-img">
        <div class="h-full">
          {{ $bg_image }}
        </div>
      </div>
    @endif
   
</section>