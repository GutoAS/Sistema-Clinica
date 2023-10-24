 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
        <div class="container-scroller">
 
   
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
 <div class="container-fluid page-body-wrapper">
        <!-- partial -->
 <div class="container mt-5">
        <h1 class="text-center">Doctores</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Sala do Doctor</th>
                    <th></th>
                </tr>
            </thead>
            @foreach($data as $doctor)
            <tbody>
                <tr>
                    <td>{{$doctor->nome}}</td>
                    <td>{{$doctor->telefone}}</td>
                    <td>{{$doctor->especialidade}}</td>
                    <td>{{$doctor->sala}}</td>
                    <td><a onclick="return confirm('Voce tem certeza que queres remover?')" class="btn btn-danger" href="{{url('remover_doctor',$doctor->id)}}">Remover</a></td>
                </tr>
            </tbody>
             @endforeach
        </table>
         
    </div>
       <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->



      

  </body>

</html>
 