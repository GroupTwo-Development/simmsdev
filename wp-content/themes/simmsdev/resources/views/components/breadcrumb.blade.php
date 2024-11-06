<div class="w-full bg-secondary-green">
    <div class="container mx-auto">
        <div class="flex flex-row justify-start">
            <div class="mb-1 p-2">
                @if (function_exists('yoast_breadcrumb'))
                    {{ yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ) }}
                @endif
            </div>
        </div>
    </div>
</div>