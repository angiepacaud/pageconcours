
<tr>

    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->id}}</td>
    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->firstname}}</td>
    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->name}}</td>
    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->email}}</td>
    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->title}}</td>
  <!--  <td style="padding-right: 20px;">{{$manuscrits->id_genre}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->resume}}</td> -->
    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->comments}}</td>
   
     <td style="padding-left: 20px; font-weight: bold; font-style: italic;"><a href="{{url('/manuscrits/'.$manuscrits->file)}}">voir le manuscrit</a></td> <!-- modification 21.09 -->
    
    <td style="padding-left: 20px; font-weight: bold; font-style: italic;"><a href="{{url('/uploads/'.$manuscrits->file)}}">Fiche</a></td>

    <td style="padding-left: 20px; text-align: center;">{!! Form:: select('statut', $statut) !!}</td>
   
</tr>
<tr><td> {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}</td></tr>




    