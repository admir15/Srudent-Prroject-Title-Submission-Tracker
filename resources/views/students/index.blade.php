<!DOCTYPE html>
<html>
<head>
    <title>Student Projects</title>
</head>
<body>
    <h1>All Submitted Projects</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">+ Submit New Project</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Project Title</th>
            <th>Supervisor</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->project_title }}</td>
            <td>{{ $student->supervisor }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this project?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
