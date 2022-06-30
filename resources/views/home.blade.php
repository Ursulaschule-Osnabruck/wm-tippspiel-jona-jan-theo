@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Platzierungen:</h1>
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Punkte</th>
                </tr>
            </thead>
            <tbody>

            @for ($i = 0; $i < count($res['sortedUser']); $i++)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $res['sortedUser'][$i]['name'] }}</td>
                    <td>{{ $res['sortedUser'][$i]['punkte'] }}</td>
                </tr>
            @endfor
            </tbody>
            </table>
        </div>

        <div class="col-6">
            <h1>Kommende Spiele:</h1>
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">Heim</th>
                <th scope="col">Tipp</th>
                <th scope="col">Gast</th>
                <th scope="col">Datum</th>
                </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < count($res['spiele']); $i++)
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                {{ $res['mannschaften'][$res['spiele'][$i]->heim_id - 1]->Name }}
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="{{ $res['mannschaften'][$res['spiele'][$i]->heim_id - 1]->Code }}">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="{{ $res['mannschaften'][$res['spiele'][$i]->gast_id - 1]->Code }}">
                                </form>
                        </div>
                    </div>
                    </td>
                    
                    <td>
                        <div class="row">
                            <div class="col-6">
                            {{ $res['mannschaften'][$res['spiele'][$i]->gast_id - 1]->Name }}
                            </div>
   
                        </div>
                    </td>
                    <td>{{ $res['spiele'][$i]->spielzeit }}</td>
                </tr>
            @endfor
            </tbody>
            </table>



            
            @auth
            <button type="button" class="btn btn-success" style="margin: 0 auto; display: block;">Commit</button>
            @endauth
        </div>

    </div>
</div>
@endsection
