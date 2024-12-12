
@php
    $featuredImage = get_the_post_thumbnail_url();
   
@endphp
<div>
    <x-blog-card :title="$title" :image="$featuredImage" :link="$link"  :date="$date"  />
</div>