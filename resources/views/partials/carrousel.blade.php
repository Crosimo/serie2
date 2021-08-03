<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @if (url()->current() == 'http://127.0.0.1:8000/uno')
        <div class="carousel-item active">
            <img src="{{asset('images/animal.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/animal1.jpg')}}" class="d-block w-100" alt="...">
          </div>
        @elseif(url()->current()=="http://127.0.0.1:8000/dos")

        <div class="carousel-item active">
            <img src="{{asset('images/couleur.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/couleur1.png')}}" class="d-block w-100" alt="...">
          </div>


        @else
        <div class="carousel-item active">
            <img src="{{asset('images/fruit.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/fruit1.jpg')}}" class="d-block w-100" alt="...">
          </div>

        @endif



    </div>
  </div>
