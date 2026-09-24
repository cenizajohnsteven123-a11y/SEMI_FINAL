<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JohnCeniza | Task Manager</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            width: 92%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
            color: #173b6c;
        }

        .subtitle {
            color: #6b7280;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background: #173b6c;
            color: white;
        }

        .btn-edit {
            background: #e8eef8;
            color: #173b6c;
        }

        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn-complete {
            background: #dcfce7;
            color: #166534;
        }

        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }

        .task {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .task h3 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .description {
            color: #6b7280;
        }

        .meta {
            font-size: 14px;
            color: #6b7280;
        }

        .badge {
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .pending {
            background: #fef3c7;
            color: #92400e;
        }

        .completed {
            background: #dcfce7;
            color: #166534;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #6b7280;
        }

        @media (max-width: 700px) {
            .header,
            .task {
                display: block;
            }

            .actions {
                margin-top: 15px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div>
            <h1>JohnCeniza Task Manager</h1>
            <p class="subtitle">Personal Task Manager</p>
        </div>

        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            + Add Task
        </a>
    </div>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @forelse($tasks as $task)

        <div class="card task">

            <div>
                <h3>{{ $task->title }}</h3>

                @if($task->description)
                    <p class="description">
                        {{ $task->description }}
                    </p>
                @endif

                <div class="meta">

                    Due:
                    @if($task->due_date)
                        {{ $task->due_date->format('M d, Y') }}
                    @else
                        No due date
                    @endif

                    &nbsp; | &nbsp;

                    <span class="badge
                        {{ $task->status === 'Completed' ? 'completed' : 'pending' }}">
                        {{ $task->status }}
                    </span>

                </div>
            </div>

            <div class="actions">

                <form method="POST"
                      action="{{ route('tasks.toggle', $task) }}">

                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-complete">
                        {{ $task->status === 'Completed'
                            ? 'Set Pending'
                            : 'Complete' }}
                    </button>

                </form>

                <a href="{{ route('tasks.edit', $task) }}"
                   class="btn btn-edit">
                    Edit
                </a>

                <form method="POST"
                      action="{{ route('tasks.destroy', $task) }}"
                      onsubmit="return confirm('Delete this task?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-delete">
                        Delete
                    </button>

                </form>

            </div>

        </div>

    @empty

        <div class="card empty">
            <h3>No tasks yet.</h3>
            <p>Click "Add Task" to create your first task.</p>
        </div>

    @endforelse

</div>

</body>
</html>

