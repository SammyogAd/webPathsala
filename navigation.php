<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Course Sewa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
            <a href="#tab5Id" class="nav-link">Videos</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link disabled">Contact us</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
    </div>
</body>
</html>