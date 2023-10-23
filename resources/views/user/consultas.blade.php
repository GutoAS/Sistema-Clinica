<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Agende Uma Consulta</h1>

      <form class="main-form" action="{{url('consulta')}}" method="POST">

        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email...">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name="data" type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select">
              <option >---selecione o doctor---</option>
              @foreach($doctor as $doctors)

              <option value="{{$doctors->nome}}">{{$doctors->nome}} | {{$doctors->especialidade}}</option>

              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="telefone" type="text" class="form-control" placeholder="Telefone">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="mensagem" id="message" class="form-control" rows="6" placeholder="Por favor escreva uma mensagem..."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submeter</button>
      </form>
    </div>
  </div> <!-- .page-section -->