
  <!-- Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">

    <form action="" method="post" id="addproductform">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="AddModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="errMsgCOntainer">

              </div>
               <div class="form-group">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="price">
                    </div>
                </div>
               </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Save Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>