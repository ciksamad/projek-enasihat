
<!doctype html>
<html lang="en">
 
@include('layouts.partials.head')
  <body>
    
@include('layouts.partials.adminnavigation')


<div class="container-fluid">
  <div class="row">
   
  @include('layouts.partials.adminsidebar')

    @yield('content')
  </div>
</div>
    @include('layouts.partials.scripts')
  </body>
</html>
