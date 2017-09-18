@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold;">Tableau de bord</div>

              <!--  <div class="panel-body">
                    Connecté</br>  -->


                    <table>
                    
                    <tr>
                        <th style="padding: 15px; font-weight: bold; color: black;" >Prénom</th>
                        <th style="padding: 15px; font-weight: bold; color: black;">Nom</th>
                        <th style="padding: 20px; font-weight: bold; color: black;">Email</th>
                        <th style="padding: 15px; font-weight: bold; color: black;" >Titre</th>
                    </tr>

                    <?php 
                    foreach ($manuscrits as  $key=>$value) { ?>
                        <tr>
                            <td style="padding-left: 15px;"><?php echo $value->firstname; ?></td>
                            <td style="padding-right: 20px;"><?php echo $value->name; ?></td>
                            <td style="padding-right: 20px;"><?php echo $value->email; ?></td>
                            <td style="padding-right: 20px;"><?php echo $value->title; ?></td>
                            <td style="padding-left: 30px; font-weight: bold; font-style: italic;"><a href="{{url('/edit/'.$value->id)}}">voir la fiche</a></td>
                            
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
