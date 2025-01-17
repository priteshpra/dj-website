<?php foreach ($data_array as $data) { ?>
    <tr class="gradeX" id="row_<?php echo $data->ID; ?>">
        <td>

            <?php echo $data->Name; ?>
        </td>
        <td>

            <?php echo $data->Email; ?>
        </td>
        <td>

            <?php echo $data->Contact; ?>
        </td>
        <td>

            <?php echo $data->EventDate; ?>
        </td>
        <td>

            <?php echo $data->Message; ?>
        </td>

    </tr>
<?php } ?>