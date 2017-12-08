@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <h2>Tasks List</h2>
            <a href="/task" class="btn btn-primary">Add new Task</a>
            <table class="table">
                <thead><tr>
                    <th >title</th>
                    <th >Status</th>
                    <th >Update Date</th>
                </tr>
                </thead>
                <tbody>@foreach($user->tasks as $task)
                    <tr>
                        <td>
                            {{$task->title}}
                        </td>
                        <td>
                            {{$task->status}}
                        </td>

                        <td>
                            {{$task->updated_at->format('d/m/Y') }}

                        </td>
                        <td>

                            <form action="/task/{{$task->id}}">
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>


                @endforeach</tbody>
            </table>
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif

    </div>
@endsection