@extends('layouts.app')

@section('content')

<div style="text-align:center;"><h1>Add Product</h1></div>    
                
                <br>
                </div> 

                {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        @csrf

<br>
                        <div class="form-group row">
                            {{Form::label('category_title', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'category_title'])}}
                            <div class="col-md-6">{{Form::text('category_title', '', ['class' => 'form-control', 'placeholder' => 'category_title'])}}</div>
                        </div>
                        
                        <div class="form-group row">
                            {{Form::label('category_description', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'category_description'])}}
                            <div class="col-md-6">{{Form::text('category_description', '', ['class' => 'form-control', 'placeholder' => 'category_description'])}}</div>
                        </div>

                        <div class="form-group row">
                            {{Form::label('category_image', '', ['class' => 'col-md-4 col-form-label text-md-right', 'placeholder' => 'Product Image'])}}
                            {{Form::file('category_image')}}
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