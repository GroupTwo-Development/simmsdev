@if ($testimonial_fields)
    <div class="bg-light-green py-10 px-4 text-center shadow-md flex flex-col justify-between h-full">
        <div>
            {!! $testimonial_fields['testimonial'] !!}
        </div>
        <div class="mt-4">
            <p class="font-semibold font-arno_pro_subhead capitalize">{{ $testimonial_fields['name'] }}</p>
        </div>
    </div>
@endif