<!DOCTYPE html>
<html>
<head>
    <title>Submit Project</title>
</head>
<body>
    <h1>Submit New Project</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Student Name:</label>
        <input type="text" name="student_name" required><br><br>

        <label>Student ID:</label>
        <input type="text" name="student_id" required><br><br>

        <label>Project Title:</label>
        <input type="text" name="project_title" required><br><br>

        <label>Supervisor:</label>
        <input type="text" name="supervisor" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>
