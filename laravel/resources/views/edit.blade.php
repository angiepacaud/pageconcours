@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fiche manuscrit</div>

              

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

                    <?php 
                    foreach ($manuscrits as  $key=>$value) { ?>
                        <tr>
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->firstname; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->title; ?></td>
                            <td><?php echo $value->id_genre; ?></td>
                            <td><?php echo $value->resume; ?></td>
                            <td><?php echo $value->comments; ?></td>
                            <td><?php echo $value->file; ?></td>
                            <td><?php echo $value->id_statut; ?></td>


                           
                        </tr>
                           <?php }?>


                     
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
