@extends('layouts.lay')

@section('content')

<div style="margin-top: 5%; margin-left: auto; margin-right: auto; width: 50%; text-align: center;">
    <img src="{{ asset('1A.png') }}" alt="" style="width: 60%">
</div>

<br><br>
<ul class="nav nav-tabs" role="tablist" style="width: 50%;  margin: 0 auto;">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" data-bs-toggle="tab" href="#mision" aria-selected="true" role="tab">Misión</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#vision" aria-selected="false" role="tab">Visión</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#nosotros" aria-selected="false" role="tab">Nosotros</a>
  </li>
</ul>

<div class="contenedor">
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade show active" id="mision" role="tabpanel">
      <p> En Digi-Solutions, nuestra misión es ofrecer soluciones web y de escritorio excepcionales, diseñadas para satisfacer las necesidades únicas de cada negocio. Nuestro compromiso es impulsar la eficiencia, la productividad y la rentabilidad de nuestros clientes a través de tecnología de vanguardia. Proporcionamos asesoramiento experto, personalización modular y un servicio de calidad que simplifica la gestión empresarial y promueve el crecimiento sostenible. Nos esforzamos por ser un socio confiable y valioso para todas las empresas que buscan abrazar la digitalización y alcanzar su máximo potencial.</p>
    </div>
    <div class="tab-pane fade" id="vision" role="tabpanel">
      <p>Ser reconocidos como líderes en la transformación digital de negocios, proporcionando soluciones tecnológicas innovadoras y personalizadas que empoderen a micro y pequeñas empresas para prosperar en la era digital. Queremos ser la opción preferida de las empresas que buscan simplificar su gestión y maximizar su éxito a través de la tecnología.</p>
    </div>
    <div class="tab-pane fade" id="nosotros" role="tabpanel">
      <p>En Digi-Solutions, nos enorgullece ser una empresa emprendedora impulsada por la pasión y el compromiso de un grupo diverso de estudiantes apasionados por la administración de empresas y la ingeniería en ciencias y sistemas. Comenzamos este viaje con la visión de transformar la forma en que las micro y pequeñas empresas abordan la gestión y la tecnología.</p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Agrega un evento de clic a las pestañas para cambiar el contenido
  document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('[data-bs-toggle="tab"]');
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function (event) {
        event.preventDefault();
        var tabId = event.target.getAttribute('href');
        var tabContent = document.querySelector(tabId);
        
        // Oculta todas las pestañas
        var tabPanes = document.querySelectorAll('.tab-pane');
        tabPanes.forEach(function (pane) {
          pane.classList.remove('show', 'active');
        });
        
        // Muestra la pestaña seleccionada
        tabContent.classList.add('show', 'active');
      });
    });
  });
</script>
@endsection
