@extends('style.index')
@section('content')

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <h3>{!! setting()->message_maintenance !!}</h3>
            </div>
        </div>
</div>

@endsection()