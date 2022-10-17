<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>{{$page ?? 'B7Web To-Do'}}</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="Logo do To-Do">
        </div>
        <div class="content">
            <nav>
                <a class="btn btn-primary" href="">Criar tarefa</a>
            </nav>

            <main>
                {{$slot}}
            </main>

        </div>
    </div>
</body>
</html>