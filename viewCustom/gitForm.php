<input 
            size="60"  
            value=""
            id = "commitMsg"
         />
         <input 
            disabled 
            readonly 
            id ="fileName"
            type="text"
            value="<?php echo "." . __DIR__ . $_SERVER['PHP_SELF']?>" />
         <!-- <button onclick="clipBoard('toGit')">Copiar</button> -->
         <button onclick="clipBoard()">Copiar</button>
         <button onclick="closePopUp()" class="close">Fechar terminal</button>
            
        </p>

          <!--Creates the popup content-->
            <div class="popup-content">
                <!-- <button>Fechar</button> -->
                <!-- <h2>Pop-Up</h2> -->
                <!-- <p> This is an example pop-up that you can make using jQuery.</p> -->
                    <div id='popuContent'></div>
                 </div>
            </div>