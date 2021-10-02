@push('plugin-styles')
    <link href="{{ asset('admin-assets/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

<!-- Modal -->
<div class="modal fade" id="addfood" tabindex="-1" role="dialog" aria-labelledby="addfoodLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add food</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="category-name">Product Name</label>
                        <input type="text" class="form-control" id="category-name" autocomplete="off"
                            placeholder="food name">
                    </div>
                    <div class="form-group">
                        <label for="category-name">Product Name</label>
                        <input type="text" class="form-control" id="category-name" autocomplete="off"
                            placeholder="food name">
                    </div>
                    <div class="form-group">
                        <label for="category-name">Product Name</label>
                        <input type="text" class="form-control" id="category-name" autocomplete="off"
                            placeholder="food name">
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
