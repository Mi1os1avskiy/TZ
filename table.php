<?php
    $id =  $row->id;
    echo '<tr><th class="blue">#' . $row->id . '</th>';
    echo '<th class="blue">' . $row->email . '</th>';
    if ($row->vip) {
        echo '<th><a href="profile.php?id=' . $id . '">' . $row->first . ' ' . $row->last . '<img src="img/Subtract.png"></a></th>';
    }
    else {
        echo '<th><a href="profile.php?id=' . $id . '">' . $row->first . ' ' . $row->last . '</a></th>';
    }
    if ($row->active) {
        echo '<th><button class="active_clients">Active</button></th>';
    }
    else {
        echo '<th><button class="inactive_clients">Inactive</button></th>';
    }
    echo '<th class="fw400">' . $row->time . '</th></tr>';