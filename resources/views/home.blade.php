@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-6">
            Platzierungen:
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Punkte</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Theo</td>
                <td>666</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jonas</td>
                <td>2</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jan</td>
                <td>1</td>
                </tr>
            </tbody>
            </table>
        </div>

        <div class="col-6">
            Kommende Spiele:
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">Team1</th>
                <th scope="col">Team2</th>
                <th scope="col">Datum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                GER
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="GER-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                DEN
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="DEN-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>21.11.22</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                ESP
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="ESP-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                BEL
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="BEL-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>22.11.22</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                FRA
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="FRA-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                GEB
                            </div>
                            <div class="col-6">
                                <form>
                                    <input type="number" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="GEB-Tipp">
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>23.11.22</td>
                </tr>
            </tbody>
            </table>
            <button type="button" class="btn btn-success">Commit</button>
        </div>

    </div>
</div>
@endsection
