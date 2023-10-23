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
<p>بسم الله الرحمن الرحيم</p>
<p>مركز صحي قرية ود غلوقة</p>
<p style="text-align: right">السيدة / مديرة الشؤون الصحية بمحلية رفاعة شرق الجزيرة</p>
<p>الموضوع: فحوصات طبية للمركز</p>
<p>مرفق كشف تحليلي للفحوصات الطبية التي أجريت بمختبر المركز الصحة بقرية ود غلوقة<br> عن الفترة من   {{ $start_date }} إلى  {{ $end_date }}</p>
<table>
    <tr>
        <th>نوع الفحص</th>
        <th>العدد الكلي</th>
        <th> P</th>
        <th>N</th>
    </tr>

    <tbody>
        @foreach ($diseases as $disease)
            <tr>
                <td>{{ $disease->disease_name->name }}</td>
                <td>{{ $disease->total_positive + $disease->total_negative }}</td>
                <td>{{ $disease->total_positive }}</td>
                <td>{{ $disease->total_negative }}</td>

            </tr>
        @endforeach
        <tr>
            <td><b>المجموع</b></td>
            <td><b>{{ $diseases->sum('total_positive') + $diseases->sum('total_negative') }}</b></td>
            <td><b>{{ $diseases->sum('total_positive') }}</b></td>
            <td><b>{{ $diseases->sum('total_negative') }}</b></td>
        </tr>
        </tbody>

</table>

<p style="text-align: right">المختبر : مريم عوض
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    المدير : عباس محمد</p>

</body>
</html>
