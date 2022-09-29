<x-layout title="Bem vindo(a) ao CIC" key="0" dashboard="0">
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

  <footer class="container-fluid contact">
    <div class="row align-items-center">
      <div class="col-5 contact__grid">
        <div class="row align-items-center">
          <div class="col-4 contact__content">
            <div class="contact__content__card">
              <h6 class="contact__content__title">Telefones</h6>
              <p>0800 000 0000</p>
              <p>+55 11 3000-000</p>
              <p>+55 11 3000-000</p>
            </div>

            <div class="contact__content__card">
              <h6 class="contact__content__title">E-mails</h6>
              <p>sac@cic.com.br</p>
              <p>contato@cic.com.br</p>
            </div>

            <div class="contact__content__card">
              <h6 class="contact__content__title">Endereço</h6>
              <p>R. Nome da rua</p>
              <p>10, Conjunto 00</p>
              <p>Bairro, cidade - UF</p>
              <p>CEP: 00000-040</p>
            </div>
          </div>

          <div class="col-8 contact__map">
            <img src="{{ asset('dist/images/map.png') }}" alt="Localização CIC">
          </div>
        </div>
      </div>

      <div class="col-7 contact__form">
        <h6 class="intro">
          <small>Lorem ipsum dolor sit amet</small>
        </h6>
        <h4 class="title">Nunc ultricies</h4>

        <form>
          <div class="form-floating mb-1">
            <input type="text" class="form-control" id="name" placeholder="Nome">
            <label for="name">Nome</label>
          </div>

          <div class="form-floating mb-1">
            <input type="email" class="form-control" id="email" placeholder="E-mail">
            <label for="email">E-mail</label>
          </div>

          <div class="form-floating mb-1">
            <input type="text" class="form-control" id="cell" placeholder="Celular">
            <label for="cell">Celular</label>
          </div>

          <div class="form-floating mb-1">
            <input type="text" class="form-control" id="subject" placeholder="Assunto">
            <label for="subject">Assunto</label>
          </div>

          <div class="form-floating mb-3">
            <textarea class="form-control" rows="4" placeholder="Deixe sua mensagem aqui" style="height: 80px" id="message"></textarea>
            <label for="message">Mensagem</label>
          </div>

          <button type="submit" class="btn btn--xbig btn--blue">Enviar</button>
        </form>
      </div>
    </div>
  </footer>

</x-layout>
