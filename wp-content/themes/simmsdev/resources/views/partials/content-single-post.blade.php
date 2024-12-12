<article @php(post_class('h-entry'))>
    <header class="mb-5">
      <div>
        <span class="font-normal capitalize text-[16px] tracking-tighter mb-2">Posted: <time datetime="{{ get_the_date() }}" class="text-primary-green">{{ get_the_date() }}</time></span>
      </div>
      <h1 class="p-name mb-5 font-semibold text-3xl tracking-tight font-arno_pro_subhead">
        {!! $title !!}
      </h1>
      <div>
        {{ the_post_thumbnail() }}
      </div>
    </header>
  
    <div class="e-content">
      @php(the_content())
    </div>
  
    @if ($pagination)
      <footer>
        <nav class="page-nav" aria-label="Page">
          {!! $pagination !!}
        </nav>
      </footer>
    @endif
  </article>
  