@extends('layouts.front')



@section('content')
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
<div class="conatiner">

    @if (session('success'))
    <div class="alert alert-info mt-5 text-center" style="width: 18rem; margin: auto">
        {{session('success')}}
    </div>
    @endif
    <img src="images/def.JPG" alt="Defarsci" width="100%" height="400" class="d-block mx-auto mt-3 rounded" style=" object-fit: cover;">
    <div class="card my-3 " style="width: 38rem; margin: auto">

        <div class="card-header bg-info text-black fs-5 fw-bold text-center">FORMATION DE STAGE 100% PRATIQUE</div>
        <div class="card-body">
            <form action="{{route('store.candidat')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse Email:</label>
                    <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control my-3">
                </div>
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" name="telephone" id="" placeholder="Votre réponse" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Adresse Domicile</label>
                    <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Choisir votre domaine de compétence</label>
                    
                    <select name="domaine" id="" class="form-control my-3">
                        {{-- foreach module --}}
                        @foreach ($module as $modules)
                            <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                        @endforeach
                        <option value="Ressources Humaines">Ressources Humaines</option>
                        <option value="Marketing Digital">Marketing Digital</option>
                        <option value="Gestion Projet">Gestion Projet</option>
                        <option value="Informatique Bureautique">Informatique Bureautique</option>
                        <option value="Développement Web">Développement Web</option>
                        <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                        <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Design Graphique">Design Graphique</option>
                        <option value="Autres">Autres</option>
                    </select>


                </div>

                <div class="form-group">
                    <label for="myfile">Télécharger votre CV:</label>
                    <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3">

                </div>

                <div class="form-group">
                    <label for="">Question/Suggestion/Commentaire</label>
                    <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3">
                </div>

                <div class="form-group">
                    <button class="btn btn-info mt-3">Envoyer</button>
                    {{-- <button class="btn text-danger float-end mt-2" >Effacer le formumaire</button> --}}
                </div>
            </form>
        </div>

    </div>
</div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #ECEFF1"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #87CEEB"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-linkedin"></i>
      </a>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold text-dark">DEFARSCI</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p class="text-dark">
          DEFAR Sci signifie Développement par l’Enseignement, la Formation,
l’Application et la Recherche dans les Sciences. C’est un club d’innovation et
de transmission en faveur du progrès humain.
DEFAR c’est « fabriquer », « réparer » en wolof. En d’autres termes, DEFAR
Sci pourrait signifier également « nous sommes venu fabriquer, apporter notre
pierre à l’édifice ». 
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-dark">MODULES</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          
<p>
              <a href="#!" class="text-dark">community manager</a>
              </p>
                  <p>
                    <a href="#!" class="text-dark">Design Graphique</a>
                       </p>
                  <p>
                    <a href="#!" class="text-dark">Arduino & impression 3d</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Ressource humaine</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Developpement web</a></p>
                    <p>
                    <a href="#!" class="text-dark">Maintenance informatique</a></p>
                    <p>
                    <a href="#!" class="text-dark">Gestion de projet</a></p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase  text-dark fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
        
          <div class="form-outline form-white mb-4 text-dark">
            <input type="text-dark" id="formControlLg" class="form-control form-control-lg" />
            <label class="form-label" for="formControlLg">Search</label>
          </div>
          <p><i class="fa fa-home mr-3 text-dark"></i> <span class="text-dark">sacre coeur, rnd pt jvc, SN</span></p>
          <p><i class="fa fa-envelope mr-3 text-dark"></i><span class="text-dark"> rose.dieng.lab@gmail.com</span></p>
          <p><i class="fa fa-phone mr-3 text-dark"></i> <span class="text-dark"> + 01 234 567 88</span></p>
          <p><i class="fa fa-print mr-3 text-dark"></i> <span class="text-dark">+ 01 234 567 89</span></p>
        </div>
<!--  -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold">Opening hours</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <table class="table text-center text-dark">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>wed - thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>friday:</td>
                <td>9am - 6pm</td>
              </tr>
            </tbody>
          </table>
        </div>
       
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: #FFA500"
       >
    © 2024 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >solm_boy</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->

  <!-- Inclure Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection