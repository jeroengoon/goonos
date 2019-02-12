@extends('layouts.app')

@section('content')


<br>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <br>
               

                        @if(count($article) > 0)
                                            @foreach($article as $articles)
                                            <!-- <div class="product_title"><a>{{ $articles->title }}</a></div>
                                            <div class="product_title"><a>{{ $articles->description }}</a></div>
                                            <div class="product_title"><a>{{ $articles->stock }}</a></div>
                                            <div class="product_title"><a>{{ $articles->price }}</a></div>
                                            <div class="product_title"><a>{{ $articles->category_id }}</a></div>
                                            <div class="product_title"><a>{{ $articles->type }}</a></div>
                                            <div class="product_title"><a><img src="public/cover_images/{{$articles->product_image}}"></a></div>
                                            <br> -->
             

                                            <div style="border:1px solid black"class="product">
                                                <div class="product_image"><img src="/storage/cover_images/{{ $articles->product_image }}" alt=""></div>
                                                <!-- <div class="product_extra product_new"><a href="categories.html"></a></div> -->
                                                <div class="product_content">
                                                <div class="product_title"><a href="/articles/{{$articles->id}}">{{ $articles->title }}</a></div><br>
                                                <div class="product_title"><a>{{ $articles->type }}</a></div>
                                                <button style="color:red;"><a  href="{{ url('add-to-cart/'.$articles->id) }}">Add to Cart</a></button>
                                                </div>
                                            </div>
                
                                            @endforeach
                        @endif



                </div>
            </div>
        </div>
    </div>
</div>




@endsection