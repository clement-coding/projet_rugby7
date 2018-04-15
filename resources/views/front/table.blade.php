@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Classement</h1>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Equipe</th>
                        <th>Victoire</th>
                        <th>Nul</th>
                        <th>Défaite</th>
                        <th>Points</th>
                    </tr>
                    @forelse($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->won }}</td>
                            <td>{{ $team->tied }}</td>
                            <td>{{ $team->lost }}</td>
                            <td>{{ $team->points }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Pas d'équipe.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
