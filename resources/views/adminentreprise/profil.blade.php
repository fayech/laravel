@extends('layoutentreprise')
@section('dynamic')
 <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Informations:</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
             <form method="post"  action="{{url('/editprofil')}}" enctype="multipart/form-data">
            <div class="row">
 
               @csrf
               {{csrf_field()}}
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom entreprise</label>
              <input  class="form-control"  name="nom_entreprise"  value="{{$profil_info->nom_entreprise}}" disabled="true">
                  </div>
                <div class="form-group">
                  <label>Organisation</label>
             <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="organisation">
           <option value="{{$profil_info->organisation}}">{{$profil_info->organisation}}</option>
                    <option value="Agriculture">Agriculture</option>
                  <option value="Industries">La Industries </option>
                  <option value="Production_distribution">Production et distribution</option>
                  <option value="Commerce">Commerce</option>
                  <option value="Information et communication">Information et communication</option>
                  <option value="financières-assurance">Activités financières et d'assurance</option>
                  <option value="Autres">Autres activités de services</option>

                  </select>
                </div>
<div class="form-group">
                    <label for="exampleInputEmail1">Adresse social media</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="adresse_social" value="{{$profil_info->adresse_social_media}}">
                  </div>
                      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Code entreprise</label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="codeentreprise" value="{{$profil_info->codeentreprise}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email entreprise</label>
        <input type="email" class="form-control"  name="emailentreprise" value="{{$profil_info->email}}" >
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Ville</label>
                  <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="ville">
                    <option value="{{$profil_info->ville}}">{{$profil_info->ville}}</option>
                <option value="Tunis">Tunis</option>
                  <option value="Soukra">La Soukra</option>
                  <option value="Ariana">Ariana</option>
                  <option value="Mourouj">El Mourouj</option>
                  <option value="Marsa">La Marsa</option>
                  <option value="Arous">Ben Arous</option>
                  <option value="Kram">Le Kram</option>

                  </select>
                </div>
                  <div class="form-group">
                  <label>Effectif</label>
                  <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="effectif">
                 <option value="{{$profil_info->effectif}}">{{$profil_info->effectif}}</option>
                 <option value="Micro-entreprises">Le Micro-entreprise(TPE) de moins de 10 salariés</option>
                  <option value="Petites et les moyennes entreprises">Petite et le moyenne entreprise(PME)</option>
                  <option value="Entreprise de taille intermédiaire">Entreprise de taille intermédiaire(ETI)</option>
                  <option value="grandes entreprises">grandes entreprises(GE)supérieur ou égal à 5 000</option>
                  
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                 
                <img src="{{Storage::url($profil_info->image_employe)}}" class="test">
                </div>
                <div class="form-group">
                  <label>Responsable</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="{{$profil_info->nom_prenom}}" disabled="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Poste</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$profil_info->post}}" disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            
            </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Valider</button>
                  <button type="submit" class="btn btn-default float-right">Annuler</button>
                </div>
            </form>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
       
        </div>
@endsection