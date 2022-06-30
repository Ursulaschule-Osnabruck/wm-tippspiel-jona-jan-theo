
@extends('layouts.app')

@section('content')
<div id="GruppeASpielplan" class="container">
    <div class="row">
        
 <!-- Gruppe A Spielplan -->
        <div  class="col-6">
            
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
                    <i> 0:0</i>
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
                    <i> 0:0</i>
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
                    <i>0:0</i> 
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
                    <i>0:0</i>
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
                    <i>0:0</i>
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
                    <i>0:0</i>
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






            <!--  Gruppe ATabelle -->
            <table class="table table-striped table-bordered">
            <thead>
                <tr> 
                    <th scope="col">Tabelle</th>
                </tr>
                <tr>
                <th scope="col">Platz</th>
                <th scope="col">Team</th>
                <th scope="col">Torverhältnis</th>
                <th scope="col">Punkte</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                       1.
                    </td>
                    <td>
                    <i> Senegal</i>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    
                    <td>
                        0
                    </td>
                    
                </tr>
                <tr>
                    <td>
                       2.
                    </td>
                    <td>
                    <i> Niederlande</i>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    
                    <td>
                        0
                    </td>
                    
                </tr>
                <tr>
                    <td>
                       3.
                    </td>
                    <td>
                    <i> Katar</i>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    
                    <td>
                        0
                    </td>
                    
                </tr>
                <tr>
                    <td>
                       4.
                    </td>
                    <td>
                    <i> Ecuador</i>
                    </td>
                    <td>
                       <i> 0:0</i>
                    </td>
                    
                    <td>
                        0
                    </td>
                    
                </tr>
            </tbody>
            </table>


            
            
            <button type="button" class="btn btn-success" style="margin: 0 auto; display: block;">Commit</button>
        </div>

    </div>
</div>

@endsection
