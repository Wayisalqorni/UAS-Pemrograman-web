<?= $this->include('template/header'); ?> 
 
<?php if($Warga): foreach($Warga as $row): ?> 
<article class="entry">     
    <h2<a href="<?= base_url('/Warga/' . $row['nik']);?>"><?= $row['nama']; ?></a> </h2>     
    <img src="<?= base_url('/Warga/' . $row['alamat']);?>" alt="<?= $row['no_rumah']; ?>">     
    <p><?= substr($row['status'], 0, 200); ?></p> 
</article> 
<hr class="divider" /> 
<?php  endforeach; else: ?> 
<article class="entry">     
    <h2>Belum ada data.</h2> 
</article> 
<?php endif; ?> 
 
<?= $this->include('template/footer'); ?> 