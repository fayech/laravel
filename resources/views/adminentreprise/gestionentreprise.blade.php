@extends('layoutentreprise')
@section('dynamic')
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gestion employés</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Image</th>
                    <th>Nom Prénom</th>
                    <th>Poste</th>
                    <th>Sexe</th>
                    <th>Nom entreprise</th>
                  </tr>
                 
               @foreach($all_employe as $emp) 
                
                  <tr><td>
                  <img class="card-img-top" src="{{Storage::url($emp->image_employe)}}" style="width:30px; height:30px;"></td>
                    <td>{{$emp->nom_prenom }}</td>
                    <td>{{$emp->post }}</td>
                    <td><span class="tag tag-danger">{{$emp->sexe }}</span></td>
                    <td>{{$emp->nom_entreprise }}</td>  @endforeach

                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
                
            </div>
            <!-- /.card -->{{ $all_employe->links()  }}
          </div>
          @endsection