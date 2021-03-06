@extends('layouts.front')

@section('content')
<a href="{{ url('/login') }}">Login</a>
<a href="{{ url('/logout') }}">Logout</a>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>Matchs à venir</h1>

                <table class="table">
                    <tr>
                        <th>Début</th>
                        <th>Equipes</th>
                    </tr>
                    @forelse($games as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            <td>{{ $game->team1->name }} - {{ $game->team2->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Pas de matchs.</td>
                        </tr>
                    @endforelse
                </table>

                <hr />

                <h1>Résultats</h1>

                <table class="table">
                    <tr>
                        <th>Début</th>
                        <th>Equipes</th>
                        <th>Résultat</th>
                    </tr>
                    @forelse($results as $game)
                        <tr>
                            <td>{{ $game->start_time }}</td>
                            <td>{{ $game->team1->name }} - {{ $game->team2->name }}</td>
                            <td>{{ $game->result1 }} : {{ $game->result2 }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Pas de résultat.</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
