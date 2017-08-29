@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fiche manuscrit</div>

              {!! Form::open(['route' => ['storeEdit', $manuscrits->getId()], 'method' => 'POST']) !!}

                    <table>
                    
                    <tr>
                        <th>Identifiant</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Titre</th>
                        <th>Genre</th>
                        <th>Résumé</th>
                        <th>Commentaire</th>
                        <th>fichier</th>
                        <th>Statut</th>
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