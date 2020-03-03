<div class="modal fade" data-backdrop="false" id="editProduct{{$product->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edita el producto</h4>
      </div>
      <div class="modal-body">
        
        <form action="{{ Route('products.update',['id'=>$product->id]) }}" method="post" class="text-left">
            {{ csrf_field() }}
            {{ method_field("PUT") }} <!--// esto va por default para cuando entra al metodo de Update -->

            <div class="row">

              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Nombre del producto</label><br>
                  <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group label-floating">
                  <label class="control-label">Precio del producto</label><br>
                  <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}">
                </div>
              </div>

            </div>

            <div class="form-group label-floating">
              <label class="control-label" style="text-align:left;" >Descripción corta del producto</label>
              <input type="text" class="form-control" name="description" value="{{ $product->description }}">
            </div>

            <textarea name="long_description" class="form-control" placeholder="Descripción larga" rows="5">{{ $product->long_description}}</textarea>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Actualizar producto</button>
            </div>

          </form>

      </div>
      
    </div>
  </div>
</div>