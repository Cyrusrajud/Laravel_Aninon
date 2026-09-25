@extends('layout')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-add">+ Add Task</a>
    <table>
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->due_date }}</td>
                <td><span class="badge badge-{{ strtolower($task->status) }}">{{ $task->status }}</span></td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('tasks.toggle', $task->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-toggle">Toggle</button>
                    </form>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Delete this task?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection