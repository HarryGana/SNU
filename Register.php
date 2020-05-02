<?php session_start();
  include_once ('Lib/header.php'); ?> 
  <p><strong>Welcome, Please Register </strong></p>
  <p> All fields are required</P>

   <form method = "POST" action = "processregister.php">
    <p>

      <?php
        if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
          echo "<span> styles= 'color:red'" . $_SESSION['message'] . "</span>";
        }
      ?>
      <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
          echo "<span style= 'color:red'>" . $_SESSION['error'] . "</span>";

             // destroy the session
            session_destroy(); 
        }
      ?>

    </p>
       <p>
         <label> First Name</label><br />

         <input 
         <?php
            if(isset($_SESSION['first_name'])){
               echo "Value=" . $_SESSION['first_name'];
             }
         ?>
         type="text" name="first_name" placeholder="First Name"  />         
       </p>
       <p>
         <label> Last Name</label><br />
         <input 
         <?php
            if(isset($_SESSION['last_name'])){
               echo "Value=" . $_SESSION['last_name'];
            }  
         ?>
         type="text" name="last_name" placeholder="Last Name"  />         
       </p>

       <p>
         <label> Email</label><br />
         <input 
         <?php
            if(isset($_SESSION['email'])){
               echo "Value=" . $_SESSION['email'];
              }  
         ?>   
        
         type="text" name="email" placeholder="Email"  />         
       </p>

       <p>
         <label> Password</label><br />
         <input type="password" name="password" placeholder="Password" />         
       </p>
   

       <p>
         <label> Gender</label><br />
         <select name = "gender"> 
         <?php
            if(isset($_SESSION['gender'])){
               echo "Value=" . $_SESSION['gender'];
              }  
         ?>   
             <option value="">  seclect one</option>
             <option
             <?php
               if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                echo "selected";
               }
              ?> 
             > Female</option>
             <option
             <?php
               if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                echo "selected";
               }
              ?> 
             > Male </option>
        </select>         
       </p>
       
       <p>
         <label> Designation</label><br />
         <select name = "designation" >
             <option value= "">  seclect one </option>
             <option> Staff[Academic] </option>
             <option> Staff[Non-Academic] </option>
             <option> Student </option>
         </select>         
       </p>

   
       <p>
         <label> Department</label><br />
         <input 
           <?php
              if(isset($_SESSION['department'])){
               echo "Value=" . $_SESSION['department'];
              }  
           ?> 
         
         types="text" name="department" placeholder="Department"  />       
       </p>
       <p>
         <button type = "submit">Register</button>       
       </p>
   </form>
<?php include_once ('Lib/footer.php');?>