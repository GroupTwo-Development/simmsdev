<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
      $builders_hub_google_tag_header = get_option('builders_hub_google_tag_header');
      $builders_hub_google_tag_body = get_option('builders_hub_google_tag_body');
      ?>
    <?php if($builders_hub_google_tag_header) : ?>
      <?= $builders_hub_google_tag_header ?>
    <?php endif; ?>
    @php(do_action('get_header'))
    @php(wp_head())

    {{-- testinf --}}
  </head>

  <body @php(body_class())>
    @php(wp_body_open())
    <?php if($builders_hub_google_tag_body) : ?>
      <?= $builders_hub_google_tag_body ?>
    <?php endif; ?>

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header')

      <main id="main" class="main min-h-screen">
        @yield('content')
      </main>

      {{-- @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif --}}

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
