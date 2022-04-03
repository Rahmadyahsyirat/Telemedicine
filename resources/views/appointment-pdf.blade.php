<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <h1 class="h3 mb-3 fw-normal text-center">Appointments data</h1>
    </div>
    <table>
        <tr>
            <th scope="col">No. </th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Gender</th>
            <th scope="col">Type of Diseases</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
            <?php $appointment = "1" ?>
            @foreach($appointments as $a)
            <tr>
                <td>{{ $appointment++ }}</td>
                <td>{{ $a->Name }}</td>
                <td>{{ $a->Email }}</td>
                <td>{{ $a->Phone }}</td>
                <td>{{ $a->appointment_date }}</td>
                <td>{{ $a->gender }}</td>
                <td>{{ $a->Type_of_disease }}</td>
                <td>{{ $a->Message }}</td>
            </tr>
            @endforeach
    </table>

</body>

</html>