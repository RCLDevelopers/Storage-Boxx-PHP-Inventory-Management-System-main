<div class="title mb">DELIVERY ORDER</div>

<!-- (A) HEADER -->
<div class="flex mb">
  <!-- (A2) FROM & TO -->
  <div class="grow box">
    <div class="subtitle">DELIVER FROM</div>
    <div><?=CO_NAME?></div>
    <div><?=nl2br(CO_ADDRESS)?></div>
    <div>
      T: <?=CO_TEL?>
      E: <?=CO_EMAIL?>
    </div>
    <br>

    <div class="subtitle">DELIVER TO</div>
    <div><?=$order["d_name"]?></div>
    <div><?=nl2br($order["d_address"])?></div>
    <div>
      T: <?=$order["d_tel"]?>
      E: <?=$order["d_email"]?>
    </div>
  </div>

  <!-- (A3) ORDER ID, DATE, STATUS -->
  <div>
    <div class="box">
      <div class="subtitle">ORDER #</div>
      <?=$order["d_id"]?>
    </div>
    <div class="box">
      <div class="subtitle">DELIVERY DATE</div>
      <?=$order["d_date"]?>
    </div>
    <div class="box">
      <div class="subtitle">STATUS</div>
      <?=DELIVER_STAT[$order["d_status"]]?>
    </div>
  </div>
</div>

<!-- (B) ORDER ITEMS -->
<table class="list mb">
  <thead><tr>
    <th>Qty</th>
    <th>Item</th>
    <th>Unit Price</th>
    <th>Amount</th>
  </tr></thead>
  <tbody><?php foreach ($order["items"] as $i) { ?>
  <tr>
    <td><?=$i[3]?> <?=$i[2]?></td>
    <td>[<?=$i[0]?>] <?=$i[1]?></td>
    <td><?=$i[4]?></td>
    <td><?=$i[3] * $i[4]?></td>
  </tr>
  <?php } ?></tbody>
</table>

<!-- (C) NOTES -->
<div class="box">
  <div class="subtitle">NOTES</div>
  <?=nl2br($order["d_notes"])?>
</div>

<script>
window.addEventListener("load", window.print);
</script>