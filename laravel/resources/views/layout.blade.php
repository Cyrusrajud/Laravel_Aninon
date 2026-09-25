<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f0f2f5; color: #333; padding: 40px 20px; }
        .container { max-width: 900px; margin: 0 auto; background: white; border-radius: 10px; padding: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        h1 { margin-bottom: 20px; color: #2c3e50; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px 15px; border-radius: 6px; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #2c3e50; color: white; }
        tr:hover { background: #f9f9f9; }
        .btn { display: inline-block; padding: 6px 14px; border-radius: 5px; text-decoration: none; color: white; font-size: 13px; border: none; cursor: pointer; margin-right: 5px; }
        .btn-add { background: #27ae60; padding: 10px 18px; font-size: 14px; }
        .btn-edit { background: #2980b9; }
        .btn-delete { background: #e74c3c; }
        .btn-toggle { background: #8e44ad; }
        .btn:hover { opacity: 0.85; }
        .badge { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: bold; }
        .badge-pending { background: #fff3cd; color: #856404; }
        .badge-completed { background: #d4edda; color: #155724; }
        form.inline-form { display: inline; }
        input[type=text], input[type=date], textarea { width: 100%; padding: 8px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; }
        textarea { min-height: 80px; }
        .back-link { display: inline-block; margin-bottom: 15px; color: #2980b9; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Personal Task Manager</h1>
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>