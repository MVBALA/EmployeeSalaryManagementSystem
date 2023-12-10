<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 30px;
        }

        .container {
            margin-left: 100px;
            margin-right: 100px;
        }

        .para {
            margin-top: 50px;
        }

        .details {
            display: flex;
            justify-content: space-between;
        }

        .details p {
            flex: 1;
            margin: 0;
        }

        .table {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 8px;
            border: 1px solid #dddddd;
        }

        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #dddddd;
        }

        .regards {
            text-align: right;
        }

    </style>
</head>
<body>
<h1>Payslip</h1>
<div class="container">
    @foreach($employee as $emp)
        <div class="details">
            <p><strong>Employee Id:{{$emp->id}}</strong></p>
        </div>
        <div class="details">
            <p class="para"><strong>Name:{{$emp->name}}</strong></p>
        </div>
        <div class="details">
            <p><strong>Email:{{$emp->email}}</strong></p>
        </div>
        <div class="details">
            <p><strong>Phone no:{{$emp->phone_number}}</strong></p>
        </div>
        <div class="details">
            <p><strong>Designation:{{$emp->job_title}}</strong></p>
        </div>
    @endforeach
    @foreach ($salary as $sal)
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>Earnings</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Basic Pay</td>
                    <td>{{$sal->basic_pay}}</td>
                </tr>
                <tr>
                    <td>House-Rent Allowance</td>
                    <td>{{$sal->house_rent_allowance}}</td>
                </tr>
                <tr>
                    <td>Special Allowance</td>
                    <td>{{$sal->special_allowance}}</td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th>Deduction</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PF</td>
                    <td>{{$sal->pf}}</td>
                </tr>
                <tr>
                    <td>Health insurance</td>
                    <td>{{$sal->health_insurance}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <p><strong>NetPay:{{$sal->total}}</strong></p>
    @endforeach
    <div class="regards">
        <p><strong>Regards,</strong></p>
        <p>ABC Company</p>
    </div>
</div>
</body>
</html>
