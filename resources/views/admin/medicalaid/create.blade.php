@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('admin.medicalaid.create') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" required class="form-control">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection