@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('suburb.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group pb-3">
            <label for="name">Suburb Name:</label>
            <input type="text" name="name" required class="form-control">
        </div>
        
        <div class="form-group pb-3">
            <label for="city_id">City Name:</label>
            <select name="city_id" id="city_id" required class="form-control">
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group pb-3">
            <label for="postal_code">Postal Code:</label>
            <input type="text" name="postal_code" id="postal_code" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection