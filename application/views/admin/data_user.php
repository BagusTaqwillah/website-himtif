<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<div class="card mb-4 mt-5">
    <div class="card-header">
         <i class="fas fa-table me-1"></i>
            Data user yang daftar
        </div>
            <div class="card-body">
                 <table id="datatablesSimple">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>  
                            <th>Status</th>             
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($user as $us) :?>
                            <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$us['nama']?></td>
                                            <td><?=$us['email']?></td>
                                            <td><?php $status = $us['role_id'];
                                                if ($status ==1) {
                                                    echo"admin";
                                                }else{
                                                    echo"member";
                                                }
                                            ?></td>
                            </tr>
                            <?php endforeach;?>
                       </tbody>
                </table>
        </div>
    </div>
</div>
</main>