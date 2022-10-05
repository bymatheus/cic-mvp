<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-5 modal__image"></div>

            <div class="col-7 modal__content">
              <h6 class="modal__content__title">Você deseja mesmo sair?</h6>

              <div class="d-flex">
                <div class="w-50">
                  <a href="" data-bs-dismiss="modal" class="btn btn--big btn--white btn--fluid me-1">Não</a>
                </div>
                <div class="w-50">
                  <a href="{{ route('home.index') }}" class="btn btn--big btn--mid-blue btn--fluid ms-1">Sim</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
