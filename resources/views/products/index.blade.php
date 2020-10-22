@extends ('layouts.base')

@section ('content')
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3 mb-3">
        <div class="card product-card">
            <img class="card-img-top" src="{{ $product->photo_url }}">
              <div class="card-body">
                  <h5 class="card-title" title="{{ $product->name }}">
                      {{ $product->name }}
                  </h5>
                  <p class="card-text">
                      <small>€ {{ $product->amount }}</small>
                  </p>
                  <form method="POST" action="/products/{{ $product->id }}/like/toggle">
                      @csrf @method('PUT')
                      <button
                          title="{{ $product->liked ? 'Unlike' : 'Like' }}"
                          class="btn btn-outline-success"
                          {{ auth()->check() ? '' : 'disabled' }}
                          >
                          @if ($product->liked)
                              <i class="fa fa-heart" aria-hidden="true"></i>
                          @else
                              <i class="fa fa-heart-o" aria-hidden="true"></i>
                          @endif
                      </button>
                  </form>
              </div>
        </div>
    </div>
    @endforeach
</div>
@endsection