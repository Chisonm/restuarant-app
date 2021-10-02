@push('plugin-styles')
  <link href="{{ asset('admin-assets/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

  <!-- Modal -->
  <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="addcategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a new food category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add.categories') }}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                  <label for="category-name">Category Name</label>
                  <input name="category_name" type="text" class="form-control" id="category-name" autocomplete="off" placeholder="category name">
                  @error('category_name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="float-right mr-2 btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>

  @push('plugin-scripts')
  <script src="{{ asset('admin-assets/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin-assets/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush
