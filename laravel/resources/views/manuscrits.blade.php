@extends('template') @section('contenu')


<section id="contact" class="contact gray-bg">
	<div class="container">
		<div class="row border-bottom  text-center" data-os-animation="">
			<img src="/img/CONCOURS_AUTEUR_QUEBEC.png" class="img-responsive" style="margin: auto;width: 400px; height: 150px;" /> <img src="/img/banniere.png" class="img-responsive" style="margin: auto" />
		</div>

		<div class="row contact-info"
			data-os-animation="">
			<div class="col-md-6 col-sm-6 left-part">
				<div class="head">
					<h1 class="coordonnees">Pour Postuler : </h1>
					<p class="text-left">
						• Vous devez être <strong>citoyens ou résidents permanents
							canadiens </strong>et devez être âgés de <strong>plus de 18 ans </strong>au
						moment du début du concours.<br />
						<br /> • Il doit s’agir d’une œuvre originale complète, ni publiée
						ni en cours de publication d’un minimum de <strong>350 000 à 600
							000 signes en langue française.</strong><br />
						<br /> • Les illustrations et les recueils de nouvelles ne sont
						pas admissibles au concours <br /> • Le texte doit être envoyé au
						format <strong>word ou pdf </strong>et le formulaire dument
						rempli.<br /> • <strong>Règlement complet disponible<a href="/reglement.docx">
								ici </a>.
						</strong><br />
					</p>
				</div>

				<div class="head">
					<h1 class="coordonnees">Marraines de l’édition & Partenaires :</h1>
					</span>
					<p class="text-left" style="float: left;">
						<img src="/img/1502-duval_7_3.jpg" align="left"
							class="img-responsive"
							style="margin-left: auto; margin-right: 5%; margin-bottom: 5%; display: block; width: 80px; height: 80px;" />
						<strong>CHLO&Eacute; DUVAL</strong>, auteure des romans <strong><em>le
								Temps Volé, Au Bout du monde</em></strong> et <strong><em>à sa
								rencontre</em></strong> chez Milady.<br>
					</p>

					<p class="text-left" style="">
						<img src="/img/suzanneroy.png" align="right"
							class="img-responsive"
							style="margin-right: 15px; display: block; width: 80px; height: 80px;" />
						<strong>SUZANNE ROY</strong>, auteure des romans <strong><em>Un
								cadeau du ciel, Après l'orage</em> et <em>Pour le meilleur et
								pour le pire</em> </strong>chez Milady.<br>
					</p>
				</div>

				<ul class="icon-list">
					<li><strong>Le Cercle de Lecture BBT</strong><br> <img
						src="/img/logo_bbt.png" align="left" class="img-responsive"
						style="margin-left: auto; margin-right: 5%; display: block; width: 80px; height: 80px;" />
						<p class="text-left">Avec plus de 70 membres qui partagent leur
							amour de la romance sous toutes ses formes et des Belles Brutes
							Tatouées, les BBTrices sont les lectrices de romance les plus
							passionnées de la Belle Province.</p></li>

					<p class="text-left" style="">
						<img src="/img/logo _bookivores.jpg" align="right"
							class="img-responsive"
							style="margin-right: 15px; display: block; width: 80px; height: 80px;" />
						texte à compléter
					</p>


				</ul>
			</div>

			<div class="col-md-6 col-sm-6 right-part">

				<div class="head">
					<h1 class="coordonnees">A GAGNER : </h1>
					<p class="" style="text-align:center;font-size:18px;">
						<strong>Un contrat d’édition Milady </strong><br />pour une publication <strong>en papier et en numérique au Québec en 2018 </strong> et en <strong>primo numérique et en impression à la demande en France.</strong>
					</p>
				</div>

				<div class="head">
					<h1 class="coordonnees">&Eacute;CHEANCIER : </h1>
					<p class="content contact-text">
					
					
					<table style="border: 1px; border-style: solid;">
						<tr class="echeancierTr">
							<td>1er septembre au 1er décembre 2017</td>
							<td>Ouverture du concours sur le site <a
								href="http://www.belleprose.com">www.belleprose.com</a></td>
						</tr>
						<tr class="echeancierTr">
							<td>Le 14 février 2018</td>
							<td>Annonce des trois finalistes <br>Mise en ligne d’extraits des
								textes retenus<br>Lancement des votes du public pour élire le
								gagnant
							</td>
						</tr>
						<tr class="echeancierTr">
							<td>Du 15 février au 13 avril 2018</td>
							<td>Vote du public sur le site <a
								href="http://www.belleprose.com">www.belleprose.com</a></td>
						</tr>
						<tr class="echeancierTr">
							<td>Le 14 avril 2018</td>
							<td>Annonce du gagnant</td>
						</tr>
						<tr class="echeancierTr">
							<td>2018</td>
							<td>Publication du titre gagnant</td>
						</tr>
					</table>
					</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 right-part">
				<h1 class="coordonnees">Information supplémentaire :</h1>
					<p class="" style="text-align:center">
						écrivez-nous à <a href="mailto:quebec@bragelonne.fr">quebec@bragelonne.fr</a><br />
						<em>Attention ! Pour que votre participation soit valide merci d’utiliser le formulaire d’envoi prévu à cet effet. Aucun envoi de manuscrit via cette adresse courriel ne sera pris en compte comme une participation.</em>
					</p></li>
				<li class="divider"></li>
				<li><i class="fa logo"></i>
					<div style="float:left;width:100%">
					   <a href="https://www.facebook.com/BragelonneQC/" target="_blank"><img src="/img/fbblack.png" class="img-responsive" style="margin-left: auto; margin-right: auto; display: block; width: 300px; height: 80px;" /></a>
					</div>
				</li>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
				@if(session()->has('error'))
				<div class="alert alert-danger">{!! session('error') !!}</div>
				@endif {!! Form::open(['route' => 'storeManuscrits', 'files' => true]) !!}

				<div class="form-group {!! $errors->has('manuscrits') ? 'has-error' : '' !!}">
					<!--	{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')) !!} -->


					<h1 class="coordonnees">VOS COORDONNEES</h1>

					<p class="for">{!! Form::label('Prénom', null, ['placeholder' => 'Prénom']) !!} {!! Form::text('firstname') !!}</p>
					{!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}


					<p class="for">{!! Form::label('name', 'Nom') !!} {!! Form::text('name') !!}</p>
					{!! $errors->first('name', '<small class="help-block">:message</small>') !!}

					<p class="for">{!! Form::label('email', 'Mail') !!} {!! Form::email('email') !!}</p>
					{!! $errors->first('email', '<br><small class="help-block">:message</small>') !!}
                    
        			<div class="com">
        				<p class="comments">{!! Form::label('comments', 'Commentaires') !!}</p>
        				<p>Notez ici toute information pertinente concernant votre
        					manuscrit.</p>
        				{!! Form::textarea('comments') !!} <br>
        			</div>
        			
        		    <div class="file">
        				<p>
        					Fichier<small> (formats autorisés doc, docx, rtf, pdf et taille du
        					fichier limité à 8Mo)</small>
        				</p>
        				{!! Form::file('file', array('class' => '')) !!} {!! $errors->first('manuscrits', '<small class="help-block">:message</small>') !!}
        			</div>
				</div>
        </div>
        <div class="col-md-6 col-sm-6">
			<div>
				<h1 class="coordonnees">INFORMATIONS SUR VOTRE MANUSCRIT</h1>

				<p class="for">{!! Form::label('Title', 'Titre') !!} {!!
					Form::text('title') !!}</p>

				<p class="for">{!! Form::label('genre', 'Genre') !!} {!! Form::
					select('genre', $genres) !!}</p>
				<br>

			</div>

			<div>
				<p class="resume">{!! Form::label('resume', 'Résumé du Manuscrit')
					!!}</p>
				<p>Soyez court, concis, allez à l'essentiel mais n'oubliez pas de
					résumer la fin de votre histoire. L'idéal serait que le résumé ne
					dépasse pas une page.</p>
				{!! Form::textarea('resume') !!} <br>
			</div>

			{!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
			{!! Form::close() !!}
		</div>
		<div id="success"></div>
	</div>
	<?php 
	/*
	 echo 
	Share::page('http://www.belleprose.com', 'Belleprose.com')
	->facebook()
	->twitter()
	->googlePlus()
	->linkedin();
	*/
	?>
</section>


@endsection
