<div class="adduser">


    <div class="adduser-form">

        <div class="title">
            <h2>Create New User</h2>
        </div>
        <form action="<?=Link::linkComposer($app)?>" method="POST">
           <div>
                <label >Name</label>
                <input type="text" id="fname" name="name" required>

                <label >Surname</label>
                <input type="text" id="lname" name="surname" required>

                <label >Gender</label>
                <select  name="gender" required>
                    <option value="F">Feminin</option>
                    <option value="M">Masculin</option>
                </select>
                <label >Date born</label>
                <input type="date"  name="dateborn" required>
                 <div class="btnform">
                     <button type="submit" class="submit">Submit</button>
                    <a href="<?=_HTTP_PATH_BASE_.'/?app=home'?>"><button type="button" class="cancel">Cancel</button></a>
                    
                </div>
           </div>
          
            
        </form>
    </div>
</div>
