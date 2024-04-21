<h2>List of products</h2>
<a href="<?php echo site_url('mahasiswa/create'); ?>" class="btn btnprimary">Create a new product</a>
<br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Alamat</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mahasiswa_item): ?>
        <tr>
            <td><?php echo $mahasiswa_item['nim']; ?></td>
            <td><?php echo $mahasiswa_item['nama']; ?></td>
            <td><?php echo $mahasiswa_item['alamat']; ?></td>
            <td>
                <a href="<?php echo site_url('mahasiswa/view/'.$mahasiswa_item['nim']);
                ?>" class="btn btn-info">View</a>
                <a href="<?php echo
                site_url('mahasiswa/update/'.$mahasiswa_item['nim']); ?>" class="btn btnwarning">Update</a>
                <a href="<?php echo site_url('mahasiswa/delete/'.$mahasiswa_item['nim']);
                ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this mahasiswa?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
 </table>