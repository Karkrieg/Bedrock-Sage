<section class="page-url">
    <div class="container">
        <p>Your current URL: {!! get_permalink(); !!}</p>
        <p>Your current ID: {!! get_the_ID(); !!}</p>
        <h5>Mod</h5>
        @for ($i = 0; $i <= 15; $i++)
          @if ($i % 3 != 0)
              {!! $i; !!}
          @else
              {!! $i !!} <br>
          @endif
        @endfor
    </div>
</section>
