

<nav class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-burger">
          <nav class="sidebar-menu">
            <div class="pdp" style="margin: 8px; box-sizing:border-box; width:fit-content ;display:flex;justify-content:center;align-items:center; gap:4px" >
              <img src="<?php
              
                if(isset($_SESSION["image"])){
                  echo $_SESSION["image"];
                }else{
                  echo"../imgs/hamza.png";
                }
              
              ?>" style="width: 60px; height: 60px; border-radius: 50%;" />
              
                <a href="..\UserPage\profile.php" style="text-decoration: none; color: aliceblue"><span><?php
                
                if (isset($_SESSION["name"])) {
                  echo $_SESSION["name"];
                }else{
                  echo "user";
                }
                ?></span></a>
              
              </div>

            <button type="button">
              <i class="fa-solid fa-eye"></i>
              <span><a href="..\Home\nothome.php" style="text-decoration: none; color: aliceblue">home</a></span>
            </button>
            <button type="button">
              <i class="fa-solid fa-book"></i>
              <span><a href="..\Search\search.php" style="text-decoration: none; color: aliceblue">search</a></span>
            </button>
            <?php
            if(isset($_SESSION["id"])){
              echo'<button type="button">
              <i class="fa-solid fa-user-group"></i>
              <span><a href="..\sign_up\index.php" style="text-decoration: none; color: aliceblue">Log out</a></span>
            </button>';
            }else{
              echo '<button type="button">
              <i class="fa-solid fa-circle-check"></i>
              <span><a href="..\log_in\index.php" style="text-decoration: none; color: aliceblue">log In</a></span>
            </button>
            <button type="button">
              <i class="fa-solid fa-user-group"></i>
              <span><a href="..\sign_up\index.php" style="text-decoration: none; color: aliceblue">Sign Up</a></span>
            </button>';
            }
            ?>
            <?php
            if (isset($_SESSION["role"])&&$_SESSION["role"]=="instructor") {
             echo'<button type="button">
             <i class="fa-solid fa-file"></i>
             <span><a href="..\submit\submit.php" style="text-decoration: none; color: aliceblue">Submission</a></span>
           </button>';
            }
            
            ?>
            <button type="button" class="has-border">
              <i class="fa-solid fa-gear"></i>
              <span>Settings</span>
            </button>
            <button type="button">
              <i class="fa-solid fa-lock"></i>
              <span><a href="http://localhost/PFA%20V0/PFA%202/APP/LoginAdmin/LoginAdmin.php" style="text-decoration: none; color: white;">Admin</a></span>

            </button>
          </nav>
        </div>
      </div>
    </nav>