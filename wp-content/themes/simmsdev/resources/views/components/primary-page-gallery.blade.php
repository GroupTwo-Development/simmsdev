<div id="primaryPageGallery" class="f-carousel">
    @foreach ($gallery as $image)
        <div
            class="f-carousel__slide"
            data-thumb-src="{{ $image['sizes']['thumbnail'] }}"
            data-fancybox="gallery"
            data-src="{{ $image['sizes']['large'] }}"
        >
            <div class="relative">
                <img
                alt="{{ $image['alt'] }}"
                width="1600"
                height="1067"
                class="bg-cover object-cover w-full h-[250px] sm:h-[300px] md:h-[400px] lg:h-[500px] xl:h-[525px] 2xl:h-[600px] inset-0"
                data-lazy-src="{{ $image['sizes']['large'] }}"
            />
            </div>
        </div>
    @endforeach
  </div>