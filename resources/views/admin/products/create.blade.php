<div class="modal fade" data-backdrop="false" id="createProduct" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); text-align:left;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel" style="text-align:center;">Registrar nuevo producto</h4><hr>
      </div>
      <div class="modal-body">
        
        <form action="{{ Route('products.store') }}" method="post" >
          {{ csrf_field() }}

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del producto</label><br>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del producto</label><br>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price') }}">
              </div>
            </div>

          </div>

          <div class="form-group label-floating">
            <label class="control-label" style="text-align:left;" >Descripción corta del producto</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
          </div>

          <textarea name="long_description" class="form-control" placeholder="Descripción larga" rows="5">{{ old('long_description') }}</textarea>

          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary btn-simple">Registrar producto</button>
          </div>

        </form>

      </div>
      
    </div>
  </div>
</div>