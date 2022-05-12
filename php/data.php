<?php
// Dans ce date on vois bien les messages qui part même dans la BBD 
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="Pas message dispo";
        (strlen($result) > 27) ? $msg =  substr($result, 0, 27) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
          //  Içi "Toi" a cote de chat se basse sur presence quand l'utisesateur se connect vois ca devant lui 
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Toi: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Pas Disponible") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '.$offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>