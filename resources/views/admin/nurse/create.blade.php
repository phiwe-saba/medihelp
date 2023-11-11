@extends('layouts.app');
@section('content');
<div class="container">
    <form action="{{ route('admin.nurse.store')}}" method="POST">
        @csrf
        <div class="form-group pb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group pb-3">
            <label for="surname">Surname:</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group pb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group pb-3">
            <label for="cell_number">Cell number:</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group pb-3">
            <label for="suburb_id">Suburb:</label>
            <select name="suburb_id" id="suburb_id" required class="form-control ">
                @foreach($suburbs as $suburb)
                    <option value="{{ $suburb->id }}">{{ $suburb->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection