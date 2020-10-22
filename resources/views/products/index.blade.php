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
                          class="btn {{ $product->liked ? 'btn-success' : 'btn-light' }}"
                          {{ auth()->check() ? '' : 'disabled' }}
                          >Like!</button>
                  </form>
              </div>
        </div>
    </div>
    @endforeach
</div>
@endsection