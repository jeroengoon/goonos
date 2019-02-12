@extends('layouts.app')

@section('content')
	<!-- Home -->
<!-- 
	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Smart Phones<span>.</span></div>
								<div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    @if($categoriesCount)
                        <div class="results">Showing <span>{{ $categoriesCount }}</span> results</div>
                    @endif

					    </div>
				    </div>
                </div>
            <br>
            
			<div class="row">
                
				<div class="col">
                    
					
					<div class="product_grid">
                        
                        @if(count($categories) > 0)
                            @foreach($categories as $category)
							<!-- Category -->
                            <div class="product">
                                <div class="product_image" ><a href="/articles/show/?filter[category_id]={{ $category->id }}"><img src="/storage/cover_images/{{ $category->category_image }}" alt=""></a></div>
                                <div class="product_extra product_new"><a href="categories.html"></a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="/articles/show/?filter[category_id]={{ $category->id }}">{{ $category->category_title }}{{ $category->category_id }}</a></div>
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