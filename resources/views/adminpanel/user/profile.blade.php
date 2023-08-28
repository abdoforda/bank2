<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User / View /</span> Account</h4>

    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
          <!-- User Card -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="user-avatar-section">
                <div class="d-flex align-items-center flex-column">
                  <img class="img-fluid rounded mb-3 pt-1 mt-4" 
                  src="{{asset('assets_panel/img/avatars/15.png')}}" height="100" width="100"
                   alt="User avatar">
                  <div class="user-info text-center">
                    <h4 class="mb-2">{{ $user->name }}</h4>
                    <span class="badge bg-label-secondary mt-1">@lang('Live Account')</span>
                  </div>
                </div>
              </div>
              <p class="mt-4 small text-uppercase text-muted">Details</p>
              <div class="info-container">
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <span class="fw-semibold me-1">Username:</span>
                    <span>{{ $user->username }}</span>
                  </li>
                  <li class="mb-2 pt-1">
                    <span class="fw-semibold me-1">Email:</span>
                    <span>{{ $user->email }}</span>
                  </li>
                  <li class="mb-2 pt-1">
                    <span class="fw-semibold me-1">Status:</span>
                    <span class="badge bg-label-success">
                        @if ($user->doc_profile == 2)
                            @lang('Active')
                        @else
                            @lang('Pending')
                        @endif
                    </span>
                  </li>
                  <li class="mb-2 pt-1">
                    <span class="fw-semibold me-1">Contact:</span>
                    <span>{{ $user->code_phone }} {{ $user->phone }}</span>
                  </li>
                  <li class="pt-1">
                    <span class="fw-semibold me-1">Country:</span>
                    <span>Comming</span>
                  </li>
                </ul>
                <div class="d-flex justify-content-center">
                  <a href="javascript:;" onclick="confirmProfile({{$user->id}})" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" 
                  data-bs-toggle="modal">@lang('Activation')</a>
                  <a data-href="javascript:;" 
                  onclick="cancelProfile({{$user->id}})" class="btn btn-label-danger suspend-user waves-effect">@lang('Cancel')</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /User Card -->
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            

            @php
                $files = ['passport','emirates_id','driving_license','bank_statement','utility_bill','other_documents'];
            @endphp

            @foreach ($files as $file)
                <div class="card mb-4">
                    <h5 class="card-header">@lang(ucfirst(str_replace('_',' ',$file)))</h5>
                    <div class="card-body">
                        @if ($user->$file)
                                <img src="{{ asset('documents/'.$user->$file) }}" class="img-fluid" alt="">
                        @endif
                    </div>
                </div>
            @endforeach

          
        </div>
        <!--/ User Content -->
      </div>

</div>