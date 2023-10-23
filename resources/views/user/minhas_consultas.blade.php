<!DOCTYPE html>
<html lang="en">
<head>
    <  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Clinica Muhaivire</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
    <!-- Include your own CSS styles if needed -->
</head>
<body>
@include('user.navbar')
<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Consulta Agendada</h1>

        <div class="row mt-5">
            <div class="col-md-6">
                <h4>Dados do Paciente:</h4>

                @foreach($appoint as $appoints)
                <ul class="list-group mt-5">
                    <li class="list-group-item"><strong>Data da Consulta:</strong> {{$appoints->data}}</li>
                    <li class="list-group-item"><strong>Médico:</strong> {{$appoints->doctor}}</li>
                    <li class="list-group-item"><strong>Mensagem:</strong> {{$appoints->mensagem}}</li>
                    <li class="list-group-item"><strong>Estado:</strong> {{$appoints->status}}</li>
                     <li class="list-group-item"><a onclick="return confirm('Voce tem certeza que queres deletar?')" href="{{url('cancelar_consulta',$appoints->id)}}" class="btn btn-danger text-white">Cancelar</a></li>
                </ul>

                @endforeach
            </div>
        </div>

        <!-- Include Bootstrap JS scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Include your own JS scripts if needed -->
    </div>
</div>

</body>
</html>
