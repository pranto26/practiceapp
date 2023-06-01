html>
    <head>
        <title>Register Form</title>
    </head>
    <body>
        <h2>Login Form </h2>
        

       <fieldset>
        <label>Name</label><br>
        <input type="text" placeholder="Enter Your Name"/> <br>

        <label>Email</label><br>
        <input type="email" placeholder="Enter Your Email"/> <br>

        
        <label>Password</label><br>
        <input type="password" placeholder="Enter Your Password"/> <br>

         <label>Age</label><br>
        <input type="number"/> <br>

        <label>Male</label>
        <input type="radio"/>
        <label>Female</label>
        <input type="radio"/><br><br>

        <select>
            <option>Choose City</option>
             <option>Dhaka</option>
              <option>Rangpur</option>
               <option>Cumilla</option>
        </select><br><br>

        <label>Country</label>
        <input name="country" list="country-list">
        <datalist id="country-list">
            <option>Bangladesh</option>
            <option>India</option>
            <option>Brazil</option>
            <option>Indonesia</option>
        </datalist>


       </fieldset><br>

       <button> <style>button{color: blue};</style> Submit</button>
    </body>
</html>