<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .register-box {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        
    </style>
</head>
<body class="register-box">
    <h2>User Registration</h2>

    <form method="POST" action="/register" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="FirstName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="LastName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Gender</label><br>
            <input type="radio" name="Gender" value="Male"> Male
            <input type="radio" name="Gender" value="Female"> Female
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="Email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="Password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="PhoneNo" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Course</label>
      <select name="Course" class="form-control" required>
        <option value="">-- Select Course --</option>
        <option value="BSc">BSc</option>
        <option value="MSc">MSc</option>
        <option value="MCA">MCA</option>
        <option value="BTech">BTech</option>
    </select>
</div>


        <div class="mb-3">
            <label>Languages Known</label><br>
            <input type="checkbox" name="Languages[]" value="Tamil"> Tamil<br>
            <input type="checkbox" name="Languages[]" value="English"> English<br>
            <input type="checkbox" name="Languages[]" value="Hindi"> Hindi
        </div>

        <div class="mb-3">
            <label>Resume</label>
            <input type="file" name="resume" class="form-control">
        </div>

       <div class="text-center">
    <button type="submit" class="btn btn-primary">Register</button><br>
    <a href="/login" class="btn btn-link">Already have an account?</a>
</div>

    </form>
</body>
</html>
