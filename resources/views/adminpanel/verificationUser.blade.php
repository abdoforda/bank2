<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Verification</h4>
    <div class="card">

        @if ($users->count() == 0)
        <div style="margin-bottom: -16px">
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <span class="alert-icon text-warning me-2">
                  <i class="ti ti-bell ti-xs"></i>
                </span>
                    @lang('There are no documents uploaded by the user.')
              </div>
        </div>

        @else

        <h5 class="card-header">Verification</h5>
        <div class="table-responsive text-nowrap d-table">

            

            <table class="table">
                <thead>
                    <tr>
                        
                        <th>User</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $item)
                    <tr>
                        <td>
                            <i class="far fa-address-book me-3"></i>
                            <strong>{{ $item->name }}</strong>
                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item routeClick noActive" href="javascript:void(0);" data-href="{{ route('admin.showProfile', [app()->getLocale(), $item]) }}">
                                        <i class="ti ti-pencil me-1"></i>
                                        View
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        

    </div>
</div>
