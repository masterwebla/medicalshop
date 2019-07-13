<div class="modal" id="impExcel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">IMPORTAR ARCHIVO EXCEL</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-center">
       	<form action="{{ route('productos-impexcel') }}" method="post" enctype="multipart/form-data">
    			@csrf				
    			<input name="archivo" type="file" >
    			<button class="btn btn-success">Subir</button>
			  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>