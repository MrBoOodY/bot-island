@extends('dashboard.layouts.app')
@section('body')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <a href="{{ route('categories.index') }}" class="btn btn-primary" style="margin-left: 10px;color:white">All Categories</a>
          </div>
<form method="POST" action="{{route('categories.update','test')}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group" style="margin-left: 10px;">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="word" value="{{ $category->icon }}">
    </div>
    <div class="form-group" style="margin-left: 10px;">
        <label for="exampleInputEmail1">Description</label>
        <textarea type="text" class="form-control" name="desc" value="{{ $category->desc }}" >
            {{ $category->desc }}   </textarea>
      </div>
      <div class="form-group" style="margin-left: 10px;">
        <label for="exampleInputEmail1">Icon</label>
        <input type="text" class="form-control" name="icon" value="{{ $category->icon }}">
      </div>
      <input type="hidden" class="form-control" name="id" value="{{ $category->id }}">
    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
  </form>
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
