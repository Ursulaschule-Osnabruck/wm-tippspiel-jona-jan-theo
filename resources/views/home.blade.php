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
            
            <table class="table table-striped table-bordered">
            <thead>
                <tr> 
                    <th scope="col">Gruppe A</th>
                </tr>
                <tr>
                <th scope="col">Heim</th>
                <th scope="col">Tipp</th>
                <th scope="col">Ergebnis</th>
                <th scope="col">Auswärts</th>
                <th scope="col">Datum</th>
                <th scope="col">Anpfiff</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Senegal
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="SEN-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="NIE-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Niederlande
                            </div>
   
                        </div>
                    </td>
                    <td>21.11.22</td>
                    <td>11:00</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Katar
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="KAT-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="ECU-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Ecuador
                            </div>
   
                        </div>
                    </td>
                    <td>21.11.22</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Katar
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="KAT-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="ECU-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                        <i>0:0</i>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Ecuador
                            </div>
   
                        </div>
                    </td>
                    <td>25.11.22</td>
                    <td>14:00</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Niederlande
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="NIE-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="ECU-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                        <i>0:0</i>
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Ecuador
                            </div>
   
                        </div>
                    </td>
                    <td>25.11.22</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Niederlande
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="NIE-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="KAT-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                        <i>0:0</i>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Katar
                            </div>
   
                        </div>
                    </td>
                    <td>29.11.22</td>
                    <td>16:00</td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                Ecuador
                            </div>
                           
                        </div>
                    </td>
                    <td>
                    <div class="row">
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="ECU-Tipp">
                                </form>
                        </div>
                        <div class="col-6">
                                <form>
                                    <input type="number" min="0" class="form-control" id="tippTeam1" aria-describedby="emailHelp" placeholder="SEN-Tipp">
                                </form>
                        </div>
                    </div>
                    </td>
                    <td>
                        <i>0:0</i>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                               Senegal
                            </div>
   
                        </div>
                    </td>
                    <td>29.11.22</td>
                    <td>16:00</td>
                </tr>
            </tbody>
            </table>



            
            
            <button type="button" class="btn btn-success" style="margin: 0 auto; display: block;">Commit</button>
        </div>

    </div>
</div>
@endsection
