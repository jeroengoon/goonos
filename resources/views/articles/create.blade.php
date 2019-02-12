@extends('layouts.app')

@section('content')


<br>




                <div style="text-align:center;"><h1>Add Product</h1></div>    
                
                <br>
                </div> 

                {!! Form::open(['action' => 'ArticlesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        @csrf

<br>
                        <div class="form-group row">
                            {{Form::label('title', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Title'])}}
                            <div class="col-md-6">{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Product Title'])}}</div>
                        </div>
                        
                        <div class="form-group row">
                            {{Form::label('description', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Description'])}}
                            <div class="col-md-6">{{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Product Description'])}}</div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('stock', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Stock'])}}
                            <div class="col-md-6">{{Form::number('stock', '', ['class' => 'form-control', 'placeholder' => '1.50'])}}</div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('price', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Price'])}}
                            <div class="col-md-6">{{Form::number('price', '', ['class' => 'form-control', 'placeholder' => '10'])}}</div>
                        </div>




                    <div class="form-group row">
                         {{Form::label('Categories', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'categories'])}}
                         <!-- <div class="col-md-1 col-form-label text-md-right">

                            {!! Form::select('$categories_id', $category_titles, null, ['multiple' => true, 'class' => 'form-control']) !!}

                            <br>
                        </div> -->
                        <div class="col-md-1 col-form-label text-md-right" style="width:150px;">
                        @foreach($categories as $category)
   <a>{{$category->category_title}}: </a><input type="checkbox" name="category[]" value="{{ $category->id }}"><br>
@endforeach 
                    </div>
                </div>

                            <br>




                        <div class="form-group row">
                            {{Form::label('product_image', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Product Image'])}}
                            {{Form::file('product_image')}}
                            </div>


                                       
												



                        
                    <div style="text-align:center;">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    

                            </div>
                        </div>
                    </div> 

                    <ul>



@endsection