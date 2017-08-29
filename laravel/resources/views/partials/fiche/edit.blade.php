
<tr>

    <td>{{$manuscrits->id}}</td>
    <td>{{$manuscrits->firstname}}</td>
    <td>{{$manuscrits->name}}</td>
    <td>{{$manuscrits->email}}</td>
    <td>{{$manuscrits->title}}</td>
    <td>{{$manuscrits->id_genre}}</td>
    <td>{{$manuscrits->resume}}</td>
    <td>{{$manuscrits->comments}}</td>
   
     <td><a href="{{url('/uploads/'.$manuscrits->file)}}">voir le manuscrit</a></td>
    
    <td>{!! Form:: select('statut', $statut) !!}</td>
   
</tr>
<tr><td> {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}</td></tr>




    