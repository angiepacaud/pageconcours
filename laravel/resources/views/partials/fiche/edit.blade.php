
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

    <td style="padding-right: 20px; text-align: center;">
    <button onclick="myFunction()">clic</button>

<script>
function myFunction() {
    popup = window.open('', 'popup', 'height=400, width=500');
popup.document.write('<form action="?" method="post">');
popup.document.write('<label= "notes"></label>');
popup.document.write('<textarea></textarea>');
popup.document.write('<div><input type="submit" value="Valider" /></div>');
popup.document.write('</form>');
}
</script>

<!--     {!! Form::text('comments') !!}
    {!! $errors->first('comments', '<small class="help-block">:message</small>') !!}  -->
    </td>

    <td style="padding-right: 20px; text-align: center;">{{$manuscrits->user}}</td>


     <!-- <div class="form-group {{ $errors -> has ('note') ? 'error' : ''}}">

               {{form::label ('notation', '', array('class' => 'col-md-4 control-label')) }} -->


 <td style="padding-right: 5px; padding-left: 20px;">
               <a href="#1" style="font-size: 20px;" title="Donner 1 étoile">☆</a>
               <a href="#2" style="font-size: 20px;" title="Donner 2 étoiles">☆</a>
               <a href="#3" style="font-size: 20px;" title="Donner 3 étoiles">☆</a>
               <a href="#4" style="font-size: 20px;" title="Donner 4 étoiles">☆</a>
               <a href="#5" style="font-size: 20px;" title="Donner 5 étoiles">☆</a>

</td>
   


</tr>
<tr><td> {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}</td></tr>



    