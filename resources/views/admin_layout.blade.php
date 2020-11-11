<!DOCTYPE html>
<html xml:lang="fr">
<head>
	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Start & Go | Admin</title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('backend/css/ready.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/backend-desgin.css')}}">

	


</head>
<body>
<div class="wrapper">
				<!-- end navbar user -->
<!-- end navbar user -->

		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
				Start & Go
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
		
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
					<div class="notif-icon notif-primary">
					 <i class="la la-user-plus"></i> </div>
							<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
						<div class="notif-icon notif-success"> 
							<i class="la la-comment"></i> </div>
											<div class="notif-content">
								<span class="block">
													Rahmad commented on Admin
												</span>
							<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="{{asset('backend/img/profile2.jpg')}}" alt="Img Profile">
											</div>
								<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
 <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
				<div class="u-img">
					<img src="{{asset('backend/img/profile.jpg')}}" alt="user">
				</div>
										<div class="u-text">
											<h4>Hizrian</h4>
					<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
						<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">
						<i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
						<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
						<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">
				<i class="la la-unlock-alt"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- end-of navbar user -->
<!-- end section admin -->

		<div class="main-header">
			<div class="logo-header">
				<a href="#"><img src="{{URL::to('font-office/images/final.png')}}" class="w90" alt="avision logo" style="width:50px;height:50px;" /></a>
				<a href="index.html" class="logo">

                Start & Go  
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
		
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					
				
						<li class="nav-item dropdown">
			<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{Storage::url(Session::get('image_user'))}}" alt="user-img" width="36" class="img-circle"><span >{{ Session::get('nom_complet') }}</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
				<div class="u-img">
					<img src="{{Storage::url(Session::get('image_user'))}}" alt="user">
				</div>
										<div class="u-text">
								<h4>{{ Session::get('nom_complet') }}</h4>
					<p class="text-muted">{{ Session::get('email') }}</p></div>
										</div>
									</li>
						<div class="dropdown-divider"></div>
				
									
				<a class="dropdown-item"  href="{{URL::to('/Logout')}}">
					<i class="la la-unlock-alt"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- end navbar user -->
		<!-- section user -->
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="{{Storage::url(Session::get('image_user'))}}">
						</div>
						<div class="info">

							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Session::get('nom_complet') }}
			<span class="user-level">{{ Session::get('type_role') }}</span>
									<span class="caret"></span>
								</span>
							</a>
						<div class="clearfix"></div>

<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
								
								
							<a class="dropdown-item"  href="{{URL::to('/Logout')}}">
					<i class="la la-sign-out"></i> Logout</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<!--
						<?php
						/*
						$type_role=Session::get('type_role');

						if($type_role=="Adminstrater"){
							*/
?>
-->
@if(Session::get('type_role')=="Administrateur")
						<li class="nav-item active">
							<a href="{{URL::to('/admincharts')}}">
								<i class="la la-dashboard"></i>
								<p>Reporting</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/Fournisseur')}}">
								<i class="la la-suitcase"></i>
								<p>Gestion fournisseurs</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/Categories')}}">
							<i class="la la-cutlery"></i>
								<p>Gestion catégories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/Produits')}}">
							<i class="la la-coffee"></i>
								<p>Gestion produits</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/Produitsfavourite')}}">
							<i class="la la-coffee"></i>
								<p>Gestion produits favoris</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/promotion')}}">
								<i class="la la-star-o"></i>
								<p>Promos produits</p>
							</a>
						</li>
					
							<li class="nav-item">
							<a href="{{URL::to('/lesCommande')}}">
								<i class="la la-clipboard"></i>
								<p>Gestion commandes</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/paiement')}}">
								<i class="la la-truck"></i>
								<p>Paiements</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/User')}}">
<i class="la la-sitemap"></i>
								<p>Gestion effectif</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/connexionUser')}}">
								<i class="la la-unlock"></i>
								<p>Status membres </p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/Role')}}">
								<i class="la la-users"></i>
								<p>Roles membres</p>
							</a>
						</li>
					
					

						
				<li class="nav-item">
							<a href="{{URL::to('/Cartliveur')}}">
<i class="la la-map-marker"></i>								
								<p>Localisation livreur</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/Carteentreprises')}}">
								<i class="la la-street-view"></i>
								<p>Localisation entreprises</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/entreprise')}}">
                        <i class="la la-institution"></i>
								<p>Admin entreprise</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/etat-paiement')}}">
                <i class="la la-money"></i>
					<p>Etat paiement </p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/all-Slider')}}">
                <i class="la la-film"></i>
					<p>Slider </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/ContactU')}}">
               <i class="la la-commenting"></i>
					<p>Contact utiltisateur </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/admin-articles')}}">
<i class="la la-leanpub"></i>					<p>Gestion articles </p>
							</a>
						</li>
						 <?php /* }else{ 

*/
						 ?> 
						-->
						@elseif(Session::get('type_role')=="livreur")
                          	<li class="nav-item">
							<a href="{{URL::to('/lesCommande')}}">
<i class="la la-truck"></i>
								<p>Commandes à livrer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/etat-paiement')}}">
                <i class="la la-money"></i>
								<p>Etat paiement </p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/paiement')}}">
                <i class="la la-money"></i>
								<p>Paiement</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('/Cartliveur')}}">
<i class="la la-map-marker"></i>								
								<p>Destination commande</p>
							</a>
						</li>
						
							<li class="nav-item">
							<a href="{{URL::to('/Cartliveur')}}">
<i class="la la-map-marker"></i>								
								<p>Localisation livreur</p>
							</a>
						</li>
						
						@else
						<li class="nav-item active">
							<a href="{{URL::to('/admincharts')}}">
<i class="la la-pie-chart"></i>								<p>Reporting</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/lesCommande')}}">
<i class="la la-truck"></i>								<p>Commandes</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="{{URL::to('/paiement')}}">
								<i class="la la-font"></i>
								<p>Paiement</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/etat-paiement')}}">
        <i class="la la-money"></i>		
<p>Etat Paiement </p>
							</a>
						</li>
							<li class="nav-item">
							<a href="{{URL::to('/Cartliveur')}}">
<i class="la la-map-marker"></i>								
								<p>Localisation livreur</p>
							</a>
						</li>
						
						<!--
                        <?php /*} */?>
                    -->
                     @endif	
					</ul>
				</div>
			</div>
						<!-- end-of section section user -->

	@yield('admin_content')
	<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="">
										Start & Go | Powered with love  &copy;2019
									</a>
								</li>
							
							</ul>
						</nav>
						<div class="copyright ml-auto">
							 <i class="la la-heart heart text-danger"></i> <a href=""></a>
						</div>				
					</div>
				</footer>
			
</div>
</body>
			<script src="{{asset('backend/js/core/jquery.3.2.1.min.js')}}"></script>

	
	<script src="{{asset('backend/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/ready.min.js')}}"></script>	
<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js')}}"></script>
<script type="text/javascript">
		$(document).on("click","#delete",function(e){
			e.preventDefault();
			var link=$(this).attr("href");
		bootbox.confirm({
    message: " Etes-vous sûr de supprimer?",
    buttons: {
        confirm: {
            label: 'Oui',
            className: 'btn-success'

        },
        cancel: {
            label: 'Non',
            className: 'btn-danger'
        }
    },

    callback:function(result) {
        console.log('Etes-vous sûr de supprimer? ' + result);
if(result){
window.location.href=link;
};

    }

});
	});

	</script>
	
	
</script>	
</html>
