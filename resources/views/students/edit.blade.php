<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student Name:</label>
        <input type="text" name="student_name" value="{{ $student->student_name }}" required><br><br>

        <label>Student ID:</label>
        <input type="text" name="student_id" value="{{ $student->student_id }}" required><br><br>

        <label>Project Title:</label>
        <input type="text" name="project_title" value="{{ $student->project_title }}" required><br><br>

        <label>Supervisor:</label>
        <input type="text" name="supervisor" value="{{ $student->supervisor }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
