{{-- /resources/views/layouts/painel/partials/body-sidebar.blade.php --}}
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa favicons-paw"></i> <span>Gentellela Alela!</span></a>
    </div>
    <div class="clearfix"></div>
    @include('layouts.painel.partials.side-profile')
    @include('layouts.painel.partials.side-navbar')
    @include('layouts.painel.partials.side-tools')
  </div>
</div>
