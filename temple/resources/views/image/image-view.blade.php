<!DOCTYPE html>
<html lang="en">
    <head>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
        <title>Shree Adhya Shakti Mataji</title>
        <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> -->
        <style type="text/css">
          html, body {
                background-color: #e9b6bb;
                color: #636b6f;
                font-family: 'Lobster', cursive;
                /* font-weight: bold; */
                margin: 0;
                /* letter-spacing: 0.1em; */
            }
            
            .main-section{
                margin:0 auto;
                padding: 20px;
                margin-top: 100px;
                background-color: #fff;
                box-shadow: 10px 10px 10px #c1c1c1;
            }

        </style>
    </head>
    <body>
        <!-- Navigation -->
        @include('master.nav')

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-11 main-section">
                    <h1 class="text-center text-danger">Add Images</h1><br>                
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="file-loading">
                                <input id="fileImg" type="file" name="file" multiple class="file" 
                                    data-overwrite-initial="false" data-min-file-count="2">
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        @include('master.footer')
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


        <script type="text/javascript">
            $("#fileImg").fileinput({
                theme: 'fa',
                uploadUrl: "/image-view",
                uploadExtraData: function() {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                maxFileSize:2000,
                maxFilesNum: 10,
                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
        </script>
    </body>
</html>