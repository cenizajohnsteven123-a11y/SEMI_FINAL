<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Task | JohnCeniza</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
        }

        .box {
            max-width: 650px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        }

        h1 {
            color: #173b6c;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 18px;
            margin-bottom: 7px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .actions {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 11px 16px;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        .primary {
            background: #173b6c;
            color: white;
        }

        .back {
            background: #e5e7eb;
            color: #111827;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 7px;
        }

    </style>

</head>

<body>

<div class="box">

    <h1>Add New Task</h1>

    @if($errors->any())

        <div class="errors">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form method="POST"
          action="{{ route('tasks.store') }}">

        @csrf

        <label>Task Title</label>

        <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            placeholder="Enter task title"
            required
        >

        <label>Description</label>

        <textarea
            name="description"
            placeholder="Enter task description"
        >{{ old('description') }}</textarea>

        <label>Due Date</label>

        <input
            type="date"
            name="due_date"
            value="{{ old('due_date') }}"
        >

        <div class="actions">

            <button
                type="submit"
                class="btn primary">
                Save Task
            </button>

            <a
                href="{{ route('tasks.index') }}"
                class="btn back">
                Cancel
            </a>

        </div>

    </form>

</div>

</body>

</html>

