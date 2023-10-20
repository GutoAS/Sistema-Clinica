
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

   	  @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
	   <div class="container-fluid page-body-wrapper">



	   	<div class="container pt-5" >

	   		  	@if(session()->has('message'))

	   		  	<div class="alert alert-success alert-dismissible fade show" role="alert">
					  	{{session()->get('message')}}
					  <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close">X</button>
					</div>
						  		
				   	@endif


	   		<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

	   			@csrf

	   			
			  <div class="mb-3" >
			    <label for="nome" class="form-label">Nome do Doctor</label>
			    <input required id="nome" name="nome" placeholder="Introduza o nome..." type="text" class="form-control bg-black text-white">
			  </div>

			  <div class="mb-3" >
			    <label for="telefone" class="form-label">Telefone/Celular</label>
			    <input required id="telefone" name="telefone" placeholder="Introduza o numero..." type="number" class="form-control bg-black text-white">
			  </div>

			  <div class="mb-3" >

			   	<label for="especialidade ">Especialidade</label>
					  <select required id="especialidade" name="especialidade" class="form-select bg-black text-white">
					  	<option selected disabled>--Selecione--</option>
					    <option value="geral">Geral</option>
					    <option value="cardiologista">Cardiologista</option>
					    <option value="dentista">Dentista</option>
					    <option value="ortopedista">Ortopedista</option>
					    <option value="neurologista">Neurologista</option>
					  </select>
  					

			  </div>

			

			  <div class="mb-3" >
			    <label for="sala" class="form-label">Sala do Doctor</label>
			    <input required id="sala" name="sala" placeholder="Introduza o numero da sala..." type="text" class="form-control bg-black text-white">
			  </div>

			  <div class="mb-3">
				  <label for="imagem" class="form-label">Faca upload da imagem: </label>
				  <input required class="form-control-sm bg-black" type="file" name="imagem" id="imagem">
				</div>

			  <button type="submit" class="btn btn-primary">Submit</button>

			</form>
	   	</div>
	   </div>
       <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>