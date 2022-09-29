<x-layout title="Login" key="1" dashboard="0">
  <main class="container-fluid login">
    <div class="row height-100 align-items-center justify-content-center">
      <section class="col-4">
        <aside class="login__grid">
          <h1 class="mb-5 text-center">
            Login
          </h1>

          <form>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmail" placeholder="nome@exemplo.com.br">
              <label for="floatingEmail">E-mail</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Senha</label>
              <div id="emailHelp" class="form-text">
                <a href="">Esqueceu a senha?</a>
              </div>
            </div>

            <div class="mb-1 mt-3">
              <a href="{{ route('home.index') }}#contato">Não tenho conta</a>
            </div>

            <button type="submit" class="mt-5 btn btn--dark-blue btn--big btn--fluid">Acessar</button>
          </form>
        </aside>
      </section>
    </div>
  </main>
</x-layout>
