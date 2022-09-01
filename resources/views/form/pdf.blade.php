<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          {{$viewData['transaksi']->getNamaPembeli()}}
        </td>
        <td>
          {{$viewData['transaksi']->getMotif()}}
        </td>
      </tr>
      <tr>
        <td>
          {{$viewData['transaksi']->getNamaProduk()}}
        </td>
      </tr>
    </table>
  </body>
</html>