<!DOCTYPE html>

<html>

<head>

    <title>Description</title>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 
</head>

<body>


<div class="container">

    <h3>Description</h3>

    <div class="row">

    <div class='list-group gallery'>


            @if($images->count())

                @foreach($images as $image)

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>

                    <a class="thumbnail fancybox" rel="ligthbox" >
                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div> <!-- text-center / end -->
                        <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />

                    </a>

                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->comment }}</small>
                        </div> <!-- text-center / end -->
                </div> <!-- col-6 / end -->

                @endforeach

            @endif


        </div> <!-- list-group / end -->

    </div> <!-- row / end -->

</div> <!-- container / end -->


</body>

</html>