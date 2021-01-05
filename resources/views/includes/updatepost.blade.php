<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="col-12" method="POST" action="{{ route('post.update', $post['id']) }}">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <input type="hidden" id="owner" name="owner" value="{{ Auth::user()->name }}">
                <div class="form-group col-md-6 float-left">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="platform">Platform Name</label>
                    <select class="form-control" id="platform" name="platform" required>
                        <option value="">--Select a Platform--</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="web">Web</option>
                        <option value="app">App</option>
                        <option value="instore">In Store</option>
                        <option value="takeaway">Takeaway</option>
                    </select>
                </div>
                <input type="hidden" id="created_by" name="created_by" value="{{ Auth::user()->email }}">
                <div class="form-group col-md-6 float-left">
                    <label for="discount">Discount Amount</label>
                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount Amount" required>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="type">Discount Amount Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="inpercent">%(Percent)</option>
                        <option value="value">Taka</option>
                    </select>
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="discount_validity">Validity</label>
                    <input type="text" class="form-control" id="discount_validity" name="discount_validity" placeholder="Select a Date">
                </div>
                <div class="form-group col-md-6 float-left">
                    <label for="discount_code">Discount Code</label>
                    <input type="text" class="form-control" id="discount_code" name="discount_code" placeholder="Discount Code">
                </div>

                <div class="form-group col-md-12 float-left">
                    <label for="refer_link">Link to Promotion</label>
                    <input type="text" class="form-control" id="refer_link" name="refer_link" placeholder="https://www.example.com/" required>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success ">Save Changes</button>
            </form>
        </div>
        <div class="modal-footer">


        </div>
    </div>
</div>