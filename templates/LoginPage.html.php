<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('blob-scene-haikei.svg');
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .form-container {
            width: 50%;
            border: 1px solid white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-table td {
            color: white;
        }
        .form-table label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"], input[type="password"], button[type="submit"] {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: calc(100% - 40px); /* Adjusted width to ensure it stays inside the padding */
            margin: 0 auto;
        }
        input[type="email"]:hover, input[type="password"]:hover, button[type="submit"]:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }
        button[type="submit"] {
            background-color: #00008b; /* Dark blue */
            border: 1px solid white; /* White border */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.form-container').fadeIn(2000); 
        });
    </script>
</body>
</html>
