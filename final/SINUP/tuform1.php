<!doctype html>
<html>
<head>
       <meta charset="utf-8">
       <title>TUTOR FORM</title>
       <link rel="stylesheet" media="screen" href="styles.css" >
 <style>

        body{
                background-image: url("s.jpg");
                  background-size: 1380px 1000px;
                  background-repeat: no-repeat;
                   color:#FFFFFF;
			        font: 18px/28px  Arial, Helvetica, sans-serif;}


					.tuitor_form label {font-family:Georgia, Times, "Times New Roman", serif;}
					.form_hint, .required_notification {font-size: 15px;}
		
					.required_notification {
									    color:#d45252; 
									    margin:5px 0 0 0; 
									    display:inline;
									    float:left;
      									}
      		.tuitor_form label {
								    width:70px;
								    margin-top: 1px;
								    display:inline-block;
								    float:center;
								    padding:5px;
								    color:#FFFFFF;
								    font: 18px/28px  Arial, Helvetica, sans-serif;
								}

					.tuitor_form input {
										    height:30px; 
										    width:300px;
										    padding:4px 12px;
										}
					.tuitor_form textarea { padding:8px; width:300px;}
					.tuitor_form button {margin-left:10px;}
					h2{
					     text-align: center ;
                         /*background-color: #000000;*/
                         padding: 10px 60px 10px 90px;
                        font-family:"Arial Black", Gadget,sans-serif;
                        /*margin-bottom: 10px;*/
                         margin: 10px;
					    background-color: #000000;
					    border: 1px solid black;
					    opacity: 0.6;
					    filter: alpha(opacity=60); 
					   /* border-bottom: 5px solid black;
					     border-bottom-width: thick;*/
					}
		    
		    							 .tuitor_form textarea { 

									    border:1px solid #aaa;
									    box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
									    border-radius:2px;
									}
					.tuitor_form input:focus, .tuitor_form textarea:focus {
					    background:#8FB2B2;  
					}
					/* Button Style */
					button.submit {
					    background-color: #68b12f;
					    background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
					    background: -webkit-linear-gradient(top, #68b12f, #50911e);
					    background: -moz-linear-gradient(top, #68b12f, #50911e);
					    background: -ms-linear-gradient(top, #68b12f, #50911e);
					    background: -o-linear-gradient(top, #68b12f, #50911e);
					    background: linear-gradient(top, #68b12f, #50911e);
					    border: 1px solid #509111;
					    border-bottom: 1px solid #5b992b;
					    border-radius: 3px;
					    -webkit-border-radius: 3px;
					    -moz-border-radius: 3px;
					    -ms-border-radius: 3px;
					    -o-border-radius: 3px;
					    box-shadow: inset 0 1px 0 0 #9fd574;
					    -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
					    -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
					    -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
					    -o-box-shadow: 0 1px 0 0 #9fd574 inset;
					    color: white;
					    font-weight: bold;
					    padding: 6px 20px;
					    text-align: center;
					    text-shadow: 0 -1px 0 #396715;
					}
					button.submit:hover {
					    opacity:.85;
					    cursor: pointer; 
					}
					button.submit:active {
					    border: 1px solid #20911e;
					    box-shadow: 0 0 10px 5px #356b0b inset; 
					    -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
					    -moz-box-shadow: 0 0 10px 5px #356b0b inset;
					    -ms-box-shadow: 0 0 10px 5px #356b0b inset;
					    -o-box-shadow: 0 0 10px 5px #356b0b inset;
					     
					}
</style>
</head>
<body>
<h2>TUTOR INFORMATION</h2>
<form class="tuitor_form" action="" method="post" name="tuitor_form">
	 <span class="required_notification">*</span>
     <lable for="Name"> Name :</lable></br>
       <input type="text" name="Name" placeholder="shaini soni" /></br></br>


        <span class="required_notification">*</span>
	    <label for="email">Email :</label></br>
	     <input type="text" name="email" placeholder="shaini@example.com" /></br></br>

            <span class="required_notification">*</span>
            <lable for="contact_no">Contact No. :</lable></br>
             <input type="text" id="contact_no" name=" "></br></br>


                  <label>Home Tutor</label>            
				          <input type = "radio"
				                 name = "radSize"
				                 id = "home_t"
				                 value = "small"
				                 checked = "checked" ></br></br>

	                <label>Institute Owner</label>            
				          <input type = "radio"
				                 name = "radSize"
				                 id = "inst_t"
				                 value = "small"
				                 checked = "checked" /><br><br>

		

	                       <lable for="street_no">Street No :</lable></br>
	                         <input type="text" name="street_no" placeholder="112-E" /></br>
	                          <lable for="area">Area :</lable></br>
	                         <input type="text" name="area" placeholder="Rajendra Nagar" /></br>
	                          <lable for="city">City :</lable></br>
	                         <input type="text" name="city" placeholder="Indore" /></br>
	                          <lable for="state">State :</lable></br>
	                         <input type="text" name="state" placeholder="MP" /></br>

	                          <lable for="pin">PIN No. :</lable></br>
	                          <input type="text" name="pin" placeholder="142012"/></br></br>
	                          <button class="submit" type="submit">Submit Form </button>
	                           <button class="submit" type="submit">next </button>
	                          <a href="subject.php">next---</a>
	                          
	                          						
</form>
</body>
</html> 
