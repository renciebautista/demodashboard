
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Demo Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Demo Dashboard</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </div>

    <br>


    <div class="container">

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">

          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Devices</h1>
            </div>
            <a href="#" class="btn btn-success">Add Device</a>
            <div class="bs-component">
              <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>API Key</th>
                    <th>Device Name</th>
                    <th>Variables</th>
                    <th>API</th>
                  </tr>
                </thead>
                <tbody>
                  @if($devices->count() > 0)
                  @foreach($devices as $device)
                  <tr>
                    <td>{{ $device->token }}</td>
                    <td>{{ $device->name }}</td>
                    <td>
                      @foreach($device->variables as $var)
                      {{ $var->name }}
                      @endforeach
                    </td>
                    <td>{{ url('/api/device/update?key=') .'[API Key]&variables'  }}</td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="3">No devices found</td>
                  </tr>
                  @endif
                  
                </tbody>
              </table> 
            </div><!-- /example -->
          </div>
        </div>
      </div>



    </div>


    <script src="../../js/jquery-1.9.1.min.js"></script>    
    <script src="../../js/bootstrap.js"></script>
  
</html>
