<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <header>
        <h2>Gerencie suas tarefas da semana !</h2>
        <form action="" method="POST">
            @csrf
            <input type="text" name="mensagem" class="input-text" placeholder="Informe sua tarefa e marque os dias que deseja realiza-lá"><br>
            <label><input type="checkbox" name="segunda" value="2">Segunda</label>

            <label><input type="checkbox" name="terca" id="" value="3">Terça</label>
            
            <label><input type="checkbox" name="quarta" id="" value="4">Quarta</label>
            
            <label><input type="checkbox" name="quinta" id="" value="5">Quinta</label>
            
            <label><input type="checkbox" name="sexta" id="" value="6">Sexta</label>
            
            <label><input type="checkbox" name="fim-semana" id="" value="1">Fim de semana</label>
            
            <br><br><button type="submit">ADICIONAR</button>
        </form>
    </header>

    <main>
        <section>
            <h3>Segunda</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'segunda')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="/remover/{{ $tarefa['id']}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Terça</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'terca')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="/remover/{{ $tarefa['id']}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Quarta</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'quarta')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="/remover/{{ $tarefa['id']}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Quinta</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'quinta')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="/remover/{{ $tarefa['id']}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Sexta</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'sexta')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="/remover/{{ $tarefa['id']}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>

        <section>
            <h3>Fim de semana</h3>
            <ul>
                @foreach($tarefas as $tarefa)
                    @if ($tarefa['dia'] == 'fim-semana')
                    <li>{{ $tarefa['mensagem']}}</li>
                    <a href="{{ route('index.remover',$tarefa['id'])}}">Remover</a><br><br>
                    @endif
                @endforeach
            </ul>
        </section>
    </main>
</body>
</html>