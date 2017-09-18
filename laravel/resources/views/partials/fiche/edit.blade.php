
<tr>

    <td style="padding-right: 20px;">{{$manuscrits->id}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->firstname}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->name}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->email}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->title}}</td>
  <!--  <td style="padding-right: 20px;">{{$manuscrits->id_genre}}</td>
    <td style="padding-right: 20px;">{{$manuscrits->resume}}</td> -->
    <td style="padding-right: 20px;">{{$manuscrits->comments}}</td>
   
     <td style="padding-left: 20px; font-weight: bold; font-style: italic;"><a href="{{url('/uploads/'.$manuscrits->file)}}">voir le manuscrit</a></td>
    
    <td style="padding-left: 20px; font-weight: bold; font-style: italic;"><a href="{{url('/uploads/'.$manuscrits->file)}}">Fiche</a></td>

    <td style="padding-left: 20px;">{!! Form:: select('statut', $statut) !!}</td>
   
</tr>
<tr><td> {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}</td></tr>




    