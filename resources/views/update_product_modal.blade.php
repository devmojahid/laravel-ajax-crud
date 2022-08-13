
  <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateproductform">
      @csrf
      <input type="hidden" name="up_id" id="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="errMsgCOntainer">

              </div>
               <div class="form-group">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="up_name" id="up_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                        <input type="text" class="form-control" name="up_price" id="up_price">
                    </div>
                </div>
               </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary up_product">Update Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>