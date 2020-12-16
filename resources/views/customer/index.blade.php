<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Customer</title>
</head>
<body>
<h3 align="center">Customer Searching</h3>
<h3 align="center">Total Data: <span id="total_data"></span></h3>
<br>
<input type="text" id="search" name="search" placeholder="Searching a customer" class="form-control">
<br>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    </thead>

    <tbody>

    </tbody>
</table>

<script>
    fetch_customer_data();
    function fetch_customer_data(query = '') {
                $.ajax({
                    url: "{{route('customer.search')}}",
                    method: 'get',
                    data: {query: query},
                    dataType: 'json',
                    success: function (data) {
                        $('tbody').html(data.table_data);
                        $('#total_data').text(data.total_data);
                    }
                });
    }

    $(document).on('keyup','#search', function () {
        let query = $(this).val();
        fetch_customer_data(query);
    });
</script>
</body>
</html>
