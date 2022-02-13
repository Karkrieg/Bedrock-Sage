<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
    @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</footer>
