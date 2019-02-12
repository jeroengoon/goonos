@extends('layouts.app')

@section('content')
	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grido" >
                    <h1 style="text-align:center; color:black;	border-bottom: 4px solid black;">Edit Profile</h1><br><br>
                    {!! Form::open(['action' => ['UsersController@update', $users->id], 'method' => 'POST']) !!}

                        <!-- firstname -->
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" value="{{$users->firstname}}" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- lastname -->
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" value="{{$users->lastname}}" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- phone -->
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"  value="{{$users->phone}}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- street -->
                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" value="{{$users->street}}"  class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" required autofocus>

                                @if ($errors->has('street'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- housenumber -->
                        <div class="form-group row">
                            <label for="housenumber" class="col-md-4 col-form-label text-md-right">{{ __('Housenumber') }}</label>

                            <div class="col-md-6">
                                <input id="housenumber" type="text" value="{{$users->housenumber}}" class="form-control{{ $errors->has('housenumber') ? ' is-invalid' : '' }}" name="housenumber" value="{{ old('housenumber') }}" required autofocus>

                                @if ($errors->has('housenumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('housenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- city -->
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" value="{{$users->city}}" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- country -->
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" value="{{$users->country}}" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('Postalcode') }}</label>

                            <div class="col-md-6">
                                <input id="postalcode" type="text" value="{{$users->postalcode}}" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode') }}" required autofocus>

                                @if ($errors->has('postalcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postalcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value="{{$users->email}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>

                        {{Form::hidden('_method', 'PUT')}}
                        <div style="text-align:center;"><button type="submit"  class="btn btn-primary">{{Form::submit('Submit Profile', ['class'=>'btn btn-primary'])}}</button></div>
                        {!! Form::close() !!}


                     


                    </div>
                    
                    
                    <div style="border-left: 4px solid black;border-right: 4px solid black;"class="product_gridos">
                    <h1 style="text-align:center; color:black;	border-bottom: 4px solid black;">Currently set Profile</h1><br><br>

                    <div class="form-group row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-left">{{ __('Firstname') }}: </label><div class="col-md-6"> {{$users->firstname}}</div>
                    </div>

                    <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-left">{{ __('Lastname') }}: </label><div class="col-md-6"> {{$users->lastname}}</div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-left">{{ __('Phone') }}:  </label><div class="col-md-6"> {{$users->phone}}</div>
                    </div>

                    <div class="form-group row">
                    <label for="street" class="col-md-4 col-form-label text-md-left">{{ __('Street') }}: </label><div class="col-md-6"> {{$users->street}}</div>
                    </div>

                    <div class="form-group row">
                    <label for="housenumber" class="col-md-4 col-form-label text-md-left">{{ __('Housenumber') }}: </label><div class="col-md-6"> {{$users->housenumber}}</div>
                    </div>

                    <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-left">{{ __('City') }}: </label><div class="col-md-6"> {{$users->city}}</div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="country" class="col-md-4 col-form-label text-md-left">{{ __('Country') }}: </label><div class="col-md-6"> {{$users->country}}</div>
                    </div>

                    <div class="form-group row">
                    <label for="postalcode" class="col-md-4 col-form-label text-md-left">{{ __('Postalcode') }}:</label><div class="col-md-6"> {{$users->postalcode}}</div>
                    </div>

                    <br>

                    <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail') }}:</label><div class="col-md-6"> {{$users->email}}</div>
                    </div>


                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection