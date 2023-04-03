
@extends('layouts.app')

@section('content')
	<!-- Header avec une image de fond -->
	<header class="masthead" style="background-image: url('https://cdn.pixabay.com/photo/2015/03/26/09/54/city-690658_960_720.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>Forum</h1>
						<span class="subheading">Un blog sur les voyages et les aventures</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Contenu principal de la page -->
	<div class="container">
		<div class="row">
			<!-- Articles de blog -->
			<div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                 @php $lang = session()->get('locale') @endphp
				<div class="post-preview">
					<a href="{{ route('article.show', $article->id) }}">
                         @if ($lang == 'en')
						<h2 class="post-title">{{$article->title}}</h2>
						<h3 class="post-subtitle">{{$article->body}}</h3>
                        @else
                        <h2 class="post-title">{{$article->title_fr}}</h2>
						<h3 class="post-subtitle">{{$article->body_fr}}</h3>
                        @endif
					</a>
					<p class="post-meta">Publié par

                        @isset($article->articleHasUser)
                        {{$article->articleHasUser->name}}
                    @endisset
                     {{$article->created_at}}</p>
			</div>
			<hr>@endforeach

			<!-- Pagination -->
			{{$articles}}
		</div>
		<!-- Colonne de droite -->
		<div class="col-lg-4 col-md-4 mx-auto">

			<div class="card">
				<div class="card-body">
					<h4 class="card-title">À propos de moi</h4>
					<p class="card-text">Je suis un voyageur passionné qui aime explorer de nouveaux endroits et rencontrer de nouvelles personnes.</p>
				</div>
			</div>

			<br>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Articles populaires</h4>
					<ul class="list-group">
						<li class="list-group-item"><a href="#">Top 10 des destinations de voyage en 2023</a></li>
						<li class="list-group-item"><a href="#">Les meilleures plages du monde en 2023</a></li>
						<li class="list-group-item"><a href="#">Comment économiser de l'argent en voyageant</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Pied de page -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<ul class="list-inline text-center">
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<span class="fa-stack fa-lg">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-github fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</li>
				</ul>
				<p class="text-center">© 2023 Mon Blog. Tous droits réservés.</p>
			</div>
		</div>
	</div>
</footer>

<!-- Liens vers les fichiers JavaScript de Bootstrap -->


@endsection
