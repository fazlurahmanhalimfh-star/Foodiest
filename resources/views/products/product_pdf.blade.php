<html>
    <head>
        <title>Laporan Produk Foodiest</title>
        <style>
            body{
                font-size: 12px;
                color: #2f0381;
            }
            .header{
                text-align: center;
                margin-bottom: 25px;
                border-bottom: 3px solid grey;
                padding-bottom: 10px;
            }
            .title{
                font-size: 10px;
                font-weight: bold;
            }
            .text-center{
                text-align: center;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            thead{
                background-color: #f2f2f2;
                font-weight: bold;
                border: 1px solid #ddd;
                padding: 8px;
            }
            td{
                border: 1px solid #ddd;
                padding: 8px;
            }
        </style>
        <body>
            <div class="header">
                <div class="title">LAPORAN DATA PRODUK FOODIEST</div>
                <p>Dicetak secara otomatis oleh sistem</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $p)
                        <tr>
                            <td class="text-center">{{ $key+1 }}</td>
                            <td>{{ $p->nama_produk }}</td>
                            <td>Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </body>
    </head>
</html>