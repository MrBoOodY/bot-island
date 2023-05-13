@extends('dashboard.layouts.app')
@section('body')
<div class="min-height-300 bg-primary position-absolute w-100"></div>

<main class="main-content position-relative border-radius-lg ">

  <div class="container-fluid py-4" style="
  background-color: white;
">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <a href="{{ route('services.create') }}" class="btn btn-primary" style="margin-left: 10px;color:white">Add Service</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Word</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Color</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Icon</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service )
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $service->id }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                        <h6 class="mb-0 text-sm">{{ $service->word }}</h6>
                    </td>

                    <td>
                        <div class="mb-0 text-sm" style="background-color:{{ $service->color }};width:100px;height:60px;"></div>
                    </td>

                    <td>
                        <i class="{{$service->icon}}"></i>

                    </td>

                    <td class="align-middle">
                        <a href="{{ route('services.edit',$service->id) }}" class="btn btn-success" data-toggle="tooltip">
                            Edit
                          </a>
                      <a href="{{ route('services.destroy',$service->id) }}" class="btn btn-danger" data-toggle="tooltip">
                        Delete
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div style="margin-left: 480px;">
                {!! $services->appends(\Request::except('page'))->render() !!}
              </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
</main>
@endsection
@section('script')
<!--   Core JS Files   -->
<script src="{{asset('assets/admin_assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/admin_assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
@endsection
</body>

</html>
