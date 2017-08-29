@extends('template')
 
@section('contenu')

<div align="center"><h1>PAGE CONCOURS</h1></div>
 <div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-info"> 
        <div class="panel-heading">Inscription à l'appel de texte</div>
           <div class="panel-body">

           
    {!! Form::open(['url' => 'users/contact']) !!}

    	<div class="form-group">
    	<h1>VOS COORDONNEES</h1>

	        {!! Form::label('fname', null, ['placeholder' => 'Prénom']) !!}
	        {!! Form::text('fname') !!} <br>
	        
	        {!! Form::label('name', 'Nom') !!}
	        {!! Form::text('name') !!} <br>

	         <!--{!! Form::label('mail', 'Mail') !!}
	        {!! Form::email('mail') !!} <br> 

        </div>

        <div>
       	<h1>INFORMATIONS SUR VOTRE MANUSCRIT</h1>

        	 {!! Form::label('Title', 'Titre') !!}
        	 {!! Form::text('title') !!} <br>

        	 {!! Form::label('genre', 'Genre') !!}
        	 {!! Form::text('genre') !!} <br>
        </div>

        <div>
        <p>Soyez court, concis, allez à l'essentiel mais n'oubliez pas de résumer la fin de votre histoire. L'idéal serait que le résumé ne dépasse pas une page.<p>

        	 {!! Form::label('resume', 'Résumer du Manuscrit') !!}
        	 {!! Form::textarea('resume') !!} <br>
        </div>

        <div>
        <p>Notez ici toute information pertinente concernant votre manuscrit.<p>
        	 {!! Form::label('comments', 'Commentaires') !!}
        	 {!! Form::textarea('comments') !!} <br>
        </div>	

-->
        <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 

        {!! Form::submit('Envoyer') !!}

        </button></div>

    {!! Form::close() !!}
    
            </div>
        </div>
    </div>

@endsection