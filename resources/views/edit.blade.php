<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Edit User Info</h2>

    <form method="POST" action="/update/{{ $user->id }}">
        @csrf

        <div class="mb-2">
            <label>First Name</label>
            <input type="text" name="FirstName" class="form-control" value="{{ $user->FirstName }}" required>
        </div>

        <div class="mb-2">
            <label>Last Name</label>
            <input type="text" name="LastName" class="form-control" value="{{ $user->LastName }}" required>
        </div>

        <div class="mb-2">
            <label>Gender</label><br>
            <input type="radio" name="Gender" value="Male" {{ $user->Gender == 'Male' ? 'checked' : '' }}> Male
            <input type="radio" name="Gender" value="Female" {{ $user->Gender == 'Female' ? 'checked' : '' }}> Female
        </div>

        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="Email" class="form-control" value="{{ $user->Email }}" required>
        </div>

        <div class="mb-2">
            <label>Phone No</label>
            <input type="text" name="PhoneNo" class="form-control" value="{{ $user->PhoneNo }}" required>
        </div>
        
        <div class="mb-2">
    <label>Course</label>
    <select name="Course" class="form-control" required>
        <option value="">-- Select Course --</option>
        <option value="BSc" {{ $user->Course == 'BSc' ? 'selected' : '' }}>BSc</option>
        <option value="MSc" {{ $user->Course == 'MSc' ? 'selected' : '' }}>MSc</option>
        <option value="MCA" {{ $user->Course == 'MCA' ? 'selected' : '' }}>MCA</option>
        <option value="BTech" {{ $user->Course == 'BTech' ? 'selected' : '' }}>BTech</option>
    </select>
</div>


        <div class="mb-2">
            <label>Languages</label><br>
            @php
                $langs = explode(',', $user->Languages);
            @endphp
            <input type="checkbox" name="Languages[]" value="Tamil" {{ in_array('Tamil', $langs) ? 'checked' : '' }}> Tamil
            <input type="checkbox" name="Languages[]" value="English" {{ in_array('English', $langs) ? 'checked' : '' }}> English
            <input type="checkbox" name="Languages[]" value="Hindi" {{ in_array('Hindi', $langs) ? 'checked' : '' }}> Hindi
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/list" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>
