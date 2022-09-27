<x-layout title="Bem vindo(a) ao CIC">

  <header class="container-fluid main">
    <div class="row">
      <section class="col-5 d-flex align-items-center main__text height-100">
        <div class="main__text--center">
          <h6 class="main__text__intro">Lorem ipsum dolor sit amet</h6>
          <h1 class="main__text__title">Nunc ultricies ante eu lorem sagittis</h1>
          <p class="main__text__subtitle">Ut ac nisi lacinia, congue quam ac, porttitor sapien. Sed et elit ante. Integer nec vehicula nisi, eget sollicitudin purus.</p>
          <a href="{{ route('home.index') }}" class="btn btn--big btn--white" title="Saiba mais sobre a CIC">Saiba mais</a>
        </div>
      </section>
    </div>
  </header>

  <aside class="container-fluid about">
    <div class="row align-items-center">
      <section class="col-6 d-flex height-100 align-items-center about__content">
        <div class="about__content--center">
          <h6 class="intro">
            <small>Lorem ipsum dolor sit amet</small>
          </h6>
          <h2 class="title">Nunc ultricies ante eu lorem</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies ante eu lorem sagittis, id maximus eros mollis. Ut ac nisi lacinia, congue quam ac, porttitor sapien. Sed et elit ante. Integer nec vehicula nisi, eget sollicitudin purus. Praesent auctor lorem at orci accumsan, scelerisque tempor urna faucibus. Phasellus nunc purus, bibendum eget sapien in, fermentum ornare augue.</p>
          <p>Ut sollicitudin enim lacus. In tristique, turpis in accumsan luctus, libero lorem venenatis erat, sed semper dolor elit sit amet erat. Proin eget enim ac enim placerat facilisis sed vitae velit. Sed tempus non lectus in rutrum. Mauris fermentum odio tortor, in faucibus erat imperdiet eu.</p>
        </div>
      </section>

      <section class="col-6 about__video">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/qBkveO-P68g" title="CIC (Controle Inteligente de Compensações)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>
    </div>
  </aside>

  <article class="container-fluid services" id="servicos">
    <div class="row align-items-center">
      <div class="col-7 services__content">
        <div class="row">
          <section class="col-12">
            <h6 class="intro">
              <small>Lorem ipsum dolor sit amet</small>
            </h6>
            <h4 class="title">Nunc ultricies ante eu lorem</h4>
          </section>

          <div class="col-12 d-flex services__row">
            <section class="services__card">
              <div class="d-flex align-items-end">
                <img src="{{ asset('dist/images/service-icon.svg') }}" class="services__card__icon" alt="">
                <h6 class="services__card__title">Lorem ipsum dolor</h6>
              </div>

              <p>
                Mauris egestas massa ut sodales pellentesque. Aenean faucibus justo semper, porta eros at, porta mi. Vestibulum non fermentum elit.
              </p>
            </section>

            <section class="services__card">
              <div class="d-flex align-items-end">
                <img src="{{ asset('dist/images/service-icon.svg') }}" class="services__card__icon" alt="">
                <h6 class="services__card__title">Lorem ipsum dolor</h6>
              </div>

              <p>
                Mauris egestas massa ut sodales pellentesque. Aenean faucibus justo semper, porta eros at, porta mi. Vestibulum non fermentum elit.
              </p>
            </section>

            <section class="services__card">
              <div class="d-flex align-items-end">
                <img src="{{ asset('dist/images/service-icon.svg') }}" class="services__card__icon" alt="">
                <h6 class="services__card__title">Lorem ipsum dolor</h6>
              </div>

              <p>
                Mauris egestas massa ut sodales pellentesque. Aenean faucibus justo semper, porta eros at, porta mi. Vestibulum non fermentum elit.
              </p>
            </section>

            <section class="services__card">
              <div class="d-flex align-items-end">
                <img src="{{ asset('dist/images/service-icon.svg') }}" class="services__card__icon" alt="">
                <h6 class="services__card__title">Lorem ipsum dolor</h6>
              </div>

              <p>
                Mauris egestas massa ut sodales pellentesque. Aenean faucibus justo semper, porta eros at, porta mi. Vestibulum non fermentum elit.
              </p>
            </section>

          </div>
        </div>
      </div>

      <div class="col-5 services__image">
        <img src="{{ asset('dist/images/services.jpg') }}" alt="">
      </div>
    </div>
  </article>

  <aside class="container-fluid partners">
    <div class="row">
      <div class="col-12">
        <h6 class="intro">
          <small>Lorem ipsum dolor sit amet</small>
        </h6>
        <h4 class="title">Nunc ultricies ante eu lorem</h4>
      </div>

      <div class="col-12 d-flex partners__grid align-items-center justify-content-around">
        <aside class="partners__images">
          <img class="img-fluid" src="{{ asset('dist/images/cic-logo.png') }}" alt="Logotipo da CIC">
        </aside>

        <aside class="partners__images">
          <img class="img-fluid" src="{{ asset('dist/images/cic-logo.png') }}" alt="Logotipo da CIC">
        </aside>

        <aside class="partners__images">
          <img class="img-fluid" src="{{ asset('dist/images/cic-logo.png') }}" alt="Logotipo da CIC">
        </aside>

        <aside class="partners__images">
          <img class="img-fluid" src="{{ asset('dist/images/cic-logo.png') }}" alt="Logotipo da CIC">
        </aside>

        <aside class="partners__images">
          <img class="img-fluid" src="{{ asset('dist/images/cic-logo.png') }}" alt="Logotipo da CIC">
        </aside>
      </div>
    </div>
  </aside>

  <footer class="container-fluid">
    <div class="row">
      <div class="col-5">
        <div class="row">
          <div class="col-4">
            <h6></h6>
            <p></p>

            <h6></h6>
            <p></p>

            <h6></h6>
            <p></p>
          </div>

          <div class="col-8">
            <img src="" alt="">
          </div>
        </div>
      </div>

      <div class="col-7">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </footer>

</x-layout>
