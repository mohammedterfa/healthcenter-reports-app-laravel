<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body{
    text-align: center;
}
table, td, th {
    border: 1px solid;
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
}
</style>
<body>
<h2>تقرير</h2>
<p style="text-align: right;">التاريخ : 1/9/2023 إلى 30/9/2023 </p>
<table>
    <tr>
        <th>المرض</th>
        <th>الحالة</th>
        <th>عدد الحالات</th>
        <th>التاريخ</th>
    </tr>

    <tbody>
        @foreach ($diseases as $disease)
            <tr>
                <td>{{ $disease->disease_name->name }}</td>
                <td>
                    @if($disease->examination == 1)
                        موجبة
                    @else
                        سالبة
                    @endif
                </td>
                <td>{{ $disease->cases_number }}</td>
                <td>{{ $disease->date->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>
