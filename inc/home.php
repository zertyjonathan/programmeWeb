
<div class="home">
    <div class="home-title">
            <h2>List of Users</h2>
    </div>

    <div class="home-content">
        <p class="notfoundUser">
            
        </p>

        <div class="table">
                <div class="table-user">
                     <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>DateBorn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($user->read() as $key=>$value)
                                    {
                                        $sexe=$value->gender=='F'?"Feminin":"Masculin";
                                        echo '<tr>'.
                                            '<td>'.$i.'</td>'.
                                            '<td>'.$value->name.'</td>'.
                                            '<td>'.$value->surname.'</td>'.
                                            '<td>'.$sexe.'</td>'.
                                            '<td>'.$value->datenaiss.'</td>';
                                            $i++;
                                    }                                     
                               
                                ?>
                            </tbody>
                     </table>
                     <?php if(!$user->read()){
                        ?>
                        <h3 style="text-align:center;">User not found</h3>
                        <?php }?>
                </div>
        </div>
    </div>
</div>
          
