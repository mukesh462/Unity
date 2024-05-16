<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
</head>

<body>
    <div class="">
        <div style="display:flex; flex-direction: row; justify-content: space-between;" class="mt-5 mb-4">
            <h1>Inventory List</h1>


        </div>
        <table border="1" cellpadding='2' cellspacing='2'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Inventory Name</th>
                    <th>Description</th>
                    <th>Price ( ₹ )</th>
                    <th>Quantity</th>
                    <th>Date </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity_in_stock }}</td>
                        <td>{{ $item->created_at->format('Y-m-d') }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
