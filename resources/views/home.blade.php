@extends('layouts.main')

@section('content')
    <div class="main_wrapper container">
        <div class="row row-cols-3">
            <div class="col">
                @foreach ($products as $product)
                    <div class="card">
                        <div class="card_image">
                            <img src="{{ Vite::asset('resources' . $product['src']) }}" alt="">
                            <img class="secondary-img" src="{{ Vite::asset('resources' . $product['src_2']) }}" alt="">
                            <div class="heart">&hearts;</div>
                            <div class="tag">
                                <span class="tag_red">{{ $product['discount'] }}</span> <span
                                    v-if="{{ $product['discount'] }}" class="tag_green">{{ $product['eco'] }}</span>
                            </div>
                        </div>
                        <div class="card_text">
                            <span class="brand">{{ $product['marca'] }}</span>
                            <span class="model">{{ $product['modello'] }}</span>
                            <span class="price">{{ $product['lastPrice'] }} &euro;</span> <span
                                v-if="{{ $product['lastPrice'] }}" class="oldprice">{{ $product['fullPrice'] }}
                                &euro;</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
