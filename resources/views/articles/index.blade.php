@extends('layouts.app')

@section('content')



<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    @if($articlesCount)
                        <div class="results">Showing <span>{{ $articlesCount }}</span> results</div>
                    @endif

					    </div>
				    </div>
                </div>
            <br>
            
			<div class="row">
                
				<div class="col">
                    
					
					<div class="product_grid">
                        
                        @if(count($articles) > 0)
                            @foreach($articles as $article)
                            <!-- Category -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                                <div class="product_extra product_new"><a href="categories.html"></a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="product.html">{{ $article->title }}</a></div>
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