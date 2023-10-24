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
        <h1 class="text-center">Consultas</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data da Consulta</th>
                    <th scope="col">Médico</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach($data as $consulta)
            <tbody>

                
                <tr>
                    <td>{{$consulta->nome}}</td>
                    <td>{{$consulta->email}}</td>
                    <td>{{$consulta->data}}</td>
                    <td>{{$consulta->doctor}}</td>
                    <td>{{$consulta->telefone}}</td>
                    <td rowspan="2">
                        {{$consulta->mensagem}}
                    </td>
                    <td>{{$consulta->status}}</td>
                    <td><a href="{{url('approved',$consulta->id)}}" class="btn btn-success"><i class="fa-solid fa-thumbs-up"></i></a></td>
                    <td><a href="{{url('canceled',$consulta->id)}}" class="btn btn-danger"><i class="fa-solid fa-thumbs-down"></i></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
 