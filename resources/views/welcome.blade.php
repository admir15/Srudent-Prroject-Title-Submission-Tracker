<!DOCTYPE html>
<html>
<head>
    <title>Student Project Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: #3498db;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            background: #217dbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎓 Student Project Title Submission Tracker</h1>
        <p>Manage and submit your project details easily.</p>

        <a href="{{ route('students.create') }}">➕ Submit a Project</a>
        <br><br>
        <a href="{{ route('students.index') }}">📋 View All Submissions</a>
    </div>
</body>
</html>
