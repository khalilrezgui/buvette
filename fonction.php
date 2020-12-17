<?php
function affichematch($row){
    while ($row = mysqli_fetch_array($result)){
        $req_nbv="SELECT count(*)
        from `match` m, `est_present` ep
        where m.idm= ep.idm
        and m.idm=". $row['mid'] ;
        $res = mysqli_query($idConnexion, $req_nbv);
        $nbv = mysqli_fetch_array($res);
    echo"
    <tr>
     <td>".
     $row['date'].
     "</td>

     <td><img src=\"".$row['drapeauA']."\" alt=\"".$row['paysA']."\" height=\"50px\"/></td>
     <td><img src=\"".$row['drapeauB']."\" alt=\"".$row['paysB']."\" height=\"50px\"/></td>
     <td>".$row['scoreA']." - " .$row['scoreB']."</td>
     <td>".$row['nb_bo']."</td>
     <td>".$nbv[0]."</td>
     
     </tr>
    ";
}
?>