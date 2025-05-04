<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat dengan AI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 20px;
        }
    
        .chat-box {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    
        .message {
            margin-bottom: 15px;
        }
    
        .user {
            text-align: right;
        }
    
        .user .text {
            background: #d1e7dd;
            display: inline-block;
            padding: 10px 15px;
            border-radius: 15px;
        }
    
        .ai .text {
            background: #f8d7da;
            display: inline-block;
            padding: 10px 15px;
            border-radius: 15px;
        }
    
        form {
            display: flex;
            margin-top: 20px;
        }
    
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    
        button {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
    
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    @yield('content')
    @livewireScripts
</body>
</html>