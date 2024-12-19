@if ($testimonial_fields)
    <div class="bg-light-green py-10 px-4 mb-10 text-center shadow-md">
        <div>
            {!! $testimonial_fields['testimonial']  !!}
        </div>
        <div class="mt-4">
            <p class="font-semibold font-arno_pro_subhead capitalize">{{ $testimonial_fields['name'] }}</p>
        </div>
    </div>
@endif