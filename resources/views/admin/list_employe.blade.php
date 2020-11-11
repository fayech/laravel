@extends('admin_layout')


@section('admin_content')
<div class="main-panel">
        <div class="content">
          <div class="container-fluid">
            <!-- end table -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2>Gestion <b>entreprises</b></h2>
          </div>
          
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                       <th>Image</th>
                    <th>Nom Prénom</th>
                    <th>Poste</th>
                    <th>Sexe</th>
                    <th>Nom entreprise</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_employe as $emp) 

                  
            
                      
                          <tr>
                            <td>
                        <img class="card-img-top" src="{{Storage::url($emp->image_employe)}}" style="width:30px; height:30px;"></td>
                    <td>{{$emp->nom_prenom }}</td>
                    <td>{{$emp->post }}</td>
                    <td><span class="tag tag-danger">{{$emp->sexe }}</span></td>
                    <td>{{$emp->nom_entreprise }}</td>  


                     
                    </tr>
                        
                        @endforeach

                </tbody>

                   </table>
      
        </div>
        
        {{ $all_employe->links()  }}

    </div>
            </div>
          </div>
        </div>
      </div>
              <!-- end of content  user -->

      </div>
          </div>
        </div>
      </div>
      <!--model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->
  
<!-- end-of model edit  user -->
<!--  model add  user -->

<!--  end-of model add  user -->
<!-- end of table -->

  <!-- Delete Modal HTML -->
  
    <!-- end of Delete Modal HTML -->
@endsection