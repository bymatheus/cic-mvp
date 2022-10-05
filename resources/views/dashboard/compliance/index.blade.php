<x-layout title="Bem vindo(a) ao CIC" key="0" dashboard="1">
  <div class="row compliance">
    <div class="col-12 mb-3 d-flex">
      <button type="button" class="ms-auto btn btn--mid-blue btn--small">
        + filtros
      </button>
    </div>

    <div class="col-7">
      <div class="row">
        <div class="col-4"><a href="" class="btn btn--white btn--mid btn--fluid">PER/DCOMP x e-CAC</a></div>
        <div class="col-4"><a href="" class="btn btn--white btn--mid btn--fluid">PER/DCOMP x DCTF</a></div>
        <div class="col-4"><a href="" class="btn btn--white btn--mid btn--fluid">PER/DCOMP x e-CAC - Teste</a></div>
      </div>
    </div>

    <div class="col-5">
      <form>
        <div class="col-12 d-flex">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Pesquise...</label>
          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Pesquise...">
          <button type="submit" class="btn btn--text btn--form">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>

    <div class="col-12 mt-4 mb-2">
      <div class="col-12 table__header">
        <div class="row">
          <div class="col-2"><h6 class="table__header__title">CNPJ</h6></div>
          <div class="col-3"><h6 class="table__header__title">PER/DCOMP</h6></div>
          <div class="col-2"><h6 class="table__header__title">Data transmissão</h6></div>
          <div class="col-2"><h6 class="table__header__title">Tipo documento</h6></div>
          <div class="col-2"><h6 class="table__header__title">Tipo crédito</h6></div>
        </div>
      </div>
    </div>

    <div class="col-12">

      <div class="accordion" id="accordionOne">
        <div class="accordion-item">
          <div class="row accordion__header align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="col-2 d-flex align-items-center">
              <div class="accordion__header__button">
                <div class="dropdown">
                  <a class="btn btn--text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-self-center accordion__header__content">
                <h6 class="accordion__header__title">11.111.111/00001-00</h6>
              </div>
            </div>
            <div class="col-3"><h6 class="accordion__header__title">16148498849849849494949498498494</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">26/11/2018</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Declaração de compensação</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Ressarcimento de IPI</h6></div>
          </div>

          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
            <div class="accordion-body">
              <div class="row">
                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação e-CAC</h6>

                  <p>
                    Homologado
                  </p>
                </div>

                <div class="col-3 accordion-body__content">
                  <h6 class="accordion-body__content__title">Divergencia</h6>

                  <p class="alert-danger">
                    PER/DCOMP não consta no
                    repositório da CIC
                  </p>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </div>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Repositório CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion mt-2" id="accordionTwo">
        <div class="accordion-item">
          <div class="row accordion__header align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
            <div class="col-2 d-flex align-items-center">
              <div class="accordion__header__button">
                <div class="dropdown">
                  <a class="btn btn--text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-self-center accordion__header__content">
                <h6 class="accordion__header__title">11.111.111/00001-00</h6>
              </div>
            </div>
            <div class="col-3"><h6 class="accordion__header__title">16148498849849849494949498498494</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">26/11/2018</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Declaração de compensação</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Ressarcimento de IPI</h6></div>
          </div>

          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionTwo">
            <div class="accordion-body">
              <div class="row">
                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação e-CAC</h6>

                  <p>
                    Homologado
                  </p>
                </div>

                <div class="col-3 accordion-body__content">
                  <h6 class="accordion-body__content__title">Divergencia</h6>

                  <p class="alert-danger">
                    PER/DCOMP não consta no
                    repositório da CIC
                  </p>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </div>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Repositório CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion mt-2" id="accordionThree">
        <div class="accordion-item">
          <div class="row accordion__header align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
            <div class="col-2 d-flex align-items-center">
              <div class="accordion__header__button">
                <div class="dropdown">
                  <a class="btn btn--text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-self-center accordion__header__content">
                <h6 class="accordion__header__title">11.111.111/00001-00</h6>
              </div>
            </div>
            <div class="col-3"><h6 class="accordion__header__title">16148498849849849494949498498494</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">26/11/2018</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Declaração de compensação</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Ressarcimento de IPI</h6></div>
          </div>

          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionThree">
            <div class="accordion-body">
              <div class="row">
                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação e-CAC</h6>

                  <p>
                    Homologado
                  </p>
                </div>

                <div class="col-3 accordion-body__content">
                  <h6 class="accordion-body__content__title">Divergencia</h6>

                  <p class="alert-danger">
                    PER/DCOMP não consta no
                    repositório da CIC
                  </p>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </div>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Repositório CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion mt-2" id="accordionFour">
        <div class="accordion-item">
          <div class="row accordion__header align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
            <div class="col-2 d-flex align-items-center">
              <div class="accordion__header__button">
                <div class="dropdown">
                  <a class="btn btn--text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-self-center accordion__header__content">
                <h6 class="accordion__header__title">11.111.111/00001-00</h6>
              </div>
            </div>
            <div class="col-3"><h6 class="accordion__header__title">16148498849849849494949498498494</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">26/11/2018</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Declaração de compensação</h6></div>
            <div class="col-2"><h6 class="accordion__header__title">Ressarcimento de IPI</h6></div>
          </div>

          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFour">
            <div class="accordion-body">
              <div class="row">
                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação e-CAC</h6>

                  <p>
                    Homologado
                  </p>
                </div>

                <div class="col-3 accordion-body__content">
                  <h6 class="accordion-body__content__title">Divergencia</h6>

                  <p class="alert-danger">
                    PER/DCOMP não consta no
                    repositório da CIC
                  </p>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Situação CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </div>
                </div>

                <div class="col-2 accordion-body__content">
                  <h6 class="accordion-body__content__title">Repositório CIC</h6>

                  <div class="accordion-body__content__alert accordion-body__content__alert--red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</x-layout>
