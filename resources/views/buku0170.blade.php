<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
<center><h1>Daftar Buku</h1>
<style>
table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px ;
            text-decoration: none;
            }
    </style>
<div style="overflow-x:auto;">
    <center>
    <a href="/buku/export">Export</a>
    <h1></h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Tahun Terbit</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $id=1; ?>
            @foreach ($buku as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->judul }}</td>
                <td>{{ $a->tahun_terbit }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>