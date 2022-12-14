@extends('layouts.website')

@section('content')
  @for ($i = 0; $i < 5; $i++)
  @if (floor($review) - $i >= 1)
      {{--Full Start--}}
      <i class="fas fa-star text-warning"> </i>
  @elseif ($review - $i > 0)
      {{--Half Start--}}
      <i class="fas fa-star-half-alt text-warning"> </i>
  @else
      {{--Empty Start--}}
      <i class="far fa-star text-warning"> </i>
  @endif
  @endfor
  {{--End Rating--}}
    </body>
    </html>
    @endsection

