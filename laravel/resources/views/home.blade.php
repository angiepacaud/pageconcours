@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

              <!--  <div class="panel-body">
                    Connecté</br>  -->

                

                    <table>
                    
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Titre</th>
                    </tr>

                    <?php 
                    foreach ($manuscrits as  $key=>$value) { ?>
                        <tr>
                            <td><?php echo $value->firstname; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->title; ?></td>
                            <td><a href="{{url('/edit/'.$value->id)}}">voir la fiche</a></td>
                            
                            <!--<td><a href="<?php //echo URL::route('edit', array('id'=>$value->id))?>">voir la fiche</a></td>-->
                        </tr>
                           <?php }?>


                     
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
