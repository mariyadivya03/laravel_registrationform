<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="text-center">Users List</h2><br><br>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Languages</th>
                <th>Resume</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->FirstName }}</td>
                <td>{{ $row->LastName }}</td>
                <td>{{ $row->Gender }}</td>
                <td>{{ $row->Email }}</td>
                <td>{{ $row->PhoneNo }}</td>
                <td>{{ $row->Course }}</td>
                <td>{{ str_replace(',', ', ', $row->Languages) }}</td>



                <td>
                    @if ($row->Resume)
                        <a href="{{ asset('storage/' . $row->Resume) }}" target="_blank">View</a>
                    @else
                        No file
                    @endif
                </td>
                <td><a href="/edit/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="/delete/{{ $row->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="/logout" class="btn btn-secondary">Logout</a>
    </div>

</body>
</html>
