<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Categories</a></li>
      <li class="breadcrumb-item active" aria-current="page">all category</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Date - Time</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @forelse ($categories as $category)
                    <tr>
                    <td>{{ $category->category_name}}</td>
                    @if($category->status == 0)
                        <td>
                            <span class="badge badge-success">Active</span>
                        </td>
                    @endif
                    <td>{{ $category->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                        <a href="#" class="inline-block btn btn-outline-success btn-sm">view</a>
                        <a href="#" class="inline-block btn btn-outline-danger btn-sm">dalete</a>
                    </td>
                    </tr>
                  @empty
                    <p>no categories</p>
                  @endforelse

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
