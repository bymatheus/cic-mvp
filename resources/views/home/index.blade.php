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

  <aside class="container-fluid">
    <div class="row">
      <section class="col-6">
        <small></small>
        <h5></h5>
        <p></p>
        <p></p>
      </section>

      <section class="col-6">
        <div class="ratio ratio-16x9">

        </div>
      </section>
    </div>
  </aside>

  <article class="container-fluid">
    <div class="row">
      <div class="col-7">
        <div class="row">
          <section class="col-12">
            <small></small>
            <h2></h2>
          </section>

          <section class="col-6">
            <div class="d-flex">
              <img src="" alt="">
              <h6></h6>
            </div>

            <p>

            </p>
          </section>

          <section class="col-6">
            <div class="d-flex">
              <img src="" alt="">
              <h6></h6>
            </div>

            <p>

            </p>
          </section>

          <section class="col-6">
            <div class="d-flex">
              <img src="" alt="">
              <h6></h6>
            </div>

            <p>

            </p>
          </section>

          <section class="col-6">
            <div class="d-flex">
              <img src="" alt="">
              <h6></h6>
            </div>

            <p>

            </p>
          </section>
        </div>
      </div>

      <div class="col-5">
        <img src="" alt="">
      </div>
    </div>
  </article>

  <aside class="container-fluid">
    <div class="row">
      <div class="col-12">
        <small></small>
        <h5></h5>
      </div>

      <div class="col-12 d-flex">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
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
