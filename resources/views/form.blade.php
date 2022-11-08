<!doctype html>
<html lang="en">

<head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
    <form action="">
        <div class="m-5">
            <input type="checkbox" class="me-2" name="checkbox" id="checkBox" value="1">
            <input type="url" name="url" id="url">
        </div>
        <div class="ms-5">
            <input type="submit" class="ms-4" value="Submit">
        </div>
    </form>
    
    <script>
        $(document).ready(function() {
            $('#checkBox').on('click', function () {
                var box = $('[name="checkbox"]');
                if (box.is(':checked')) {
                    $("#url").prop('required',true);
                } else {
                    $("#url").prop('required',false);
                }
            });
        });
    </script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
