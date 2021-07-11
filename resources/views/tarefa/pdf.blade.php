


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tarefas</title>

</head>
<body>
    <h2>Lista de tarefas<h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tarefa</th>
            <th scope="col">Data conclusão</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $terafa)
                <tr>
                    <td>{{$terafa->id}}</td>
                    <td>{{$terafa->tarefa}}</td>
                    <td>{{date('d/m/Y', strtotime($terafa->data_limite_conclusao))}}</td>
                </tr>
            @endforeach
            <tr>
            
            </tr>
        </tbody>
    </table>
</body>
</html>