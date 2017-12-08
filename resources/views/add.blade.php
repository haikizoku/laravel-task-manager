@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Task</h2>

    <form method="POST" action="/task">

        <div class="form-group">
            <label for="title">title:</label>
            <textarea name="title" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <label for="description">description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <select class=form-control name ="status">
            <option value=Pending>Pending</option>
            <option value=Complete>Complete </option>
            <option value=Cancelled>Cancelled</option>
        </select>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
        {{ csrf_field() }}
    </form>


</div>
@endsection