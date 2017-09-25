@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="tableau">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold; font-size: 20px;">Fiche manuscrit</div>

              {!! Form::open(['route' => ['storeEdit', $manuscrits->getId()], 'method' => 'POST']) !!}

                    <table>
                    
                    <tr>
                        <th style="padding: 10px; font-weight: bold; color: black;">Identifiant</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Prénom</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Nom</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Email</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Titre</th>
                    <!--    <th style="padding: 15px; font-weight: bold; color: black;">Genre</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Résumé</th> -->
                        <th style="padding: 15px; font-weight: bold; color: black;">Commentaire</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Manuscrit</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Fiche</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Statut</th>
                    </tr>

                    
                    
                    @include('partials.fiche.edit')
                    

                    </table>
 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection