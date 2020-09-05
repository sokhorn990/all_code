<div class="col-2"></div>
<div class="col-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Province</th>
                <th>Gender</th>
            </tr>
        </thead>
        <?php

if(isset($data['data_family'])){
    foreach ($data['data_family'] as $info){
        ?>


<tbody>

<th>
    <td><?php echo $info['id']; ?></td>
    <td><?php echo $info['name']; ?></td>
    <td><?php echo $info['province']; ?></td>
    <td><?php echo $info['gender']; ?></td>
</th>
</tbody>
        <?php
    }
}
?>
    </table>
</div>
<div class="col-2"></div>