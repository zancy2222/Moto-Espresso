<html>
<head>
    <title>Inventory</title>
    <meta http-equiv="Cache-control" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="stockstyle.css">
	<link rel="stylesheet" a href="stockstyleboxes.css">
    <link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
    <link rel="stylesheet" a href="stocknav.css">
    <div class="alexa">
        <a class="button" href="supervisor.php">
            <b> M O T O   E S P R E S S O </b>
        </a>
    </div>
	<div class="topnav">
        <b><a href="supervisor.php">BACK</a></b>
		<b><a href="#cardsmallg">SODA SERIES</a></b>
		<b><a href="#cardsmallf">HOT DRINKS</a></b>
		<b><a href="#cardsmalle">COFFEE</a></b>
		<b><a href="#cardsmalld">ICED COFFEE</a></b>
		<b><a href="#cardsmallc">COLD DRINKS</a></b>
		<b><a href="#cardsmallb">NON-CAFFEINE</a></b>
		<b><a href="#cardsmalla">FRAPPE</a></b>
		
    </div>
	<center>
	<div class="container-wrapper">
	<div class="container">
	
	<!--CARD A-->
		<div class="cardsmalla" id="cardsmalla"><h1>FRAPPE</h1></div>
	<div class="box">
		<form method="POST" action="stocks.php">
					
    <div class="card">
        <h5>Vanilla</h5>
        <div class="itmcard">
            <img src="images/drinks/frappevanilla.jpg" align="right" alt="Vanilla" width="75" height="75">
			<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
			<tr>
                <th><b>Size:</b></th><br>
                <th>
                    <input type="radio" name="size" value="99" id="sizeSmall">16 oz(P99)<br>
                    <input type="radio" name="size" value="119" id="sizeLarge">22 oz(P119)
                </th>
            </tr>
            <br>
            <tr>
                <th><b>Add-Ons:</b></th>
            </tr>
            <tr>
                <th>
				<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
				<br>
                    <input type="checkbox" name="addon1" value="20">Espresso Shots(P20)<br>
                    <input type="checkbox" name="addon2" value="25">Flavored Syrup(P25)<br>
                    <input type="checkbox" name="addon3" value="20">Whip Cream(P20)<br>
					
                </th>
            </tr>
            <br>
            <tr>
                <th colspan="2">
                    <input type="submit" name="addvanilla" value="Add Drink">
                </th>
            </tr>
        </div>
    </div>
</form>

		
		<form method="POST" action="stocks.php">
		<div class="card"><h5 name="FWCCaramel">Caramel</h5>
			<div class="itmcard">
				<img src="images/drinks/caramel.jpg" align="right" alt="Caramel" width="75" height="75">
				<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
				<tr>
				<th><b>Size:</b></th><br>
				<th>
				<input type="radio" name="size" value="99">16 oz(P99)</input><br>
				<input type="radio" name="size" value="119">22 oz(P119)</input>
				</th>
				</tr>
				<br>
				<tr><th><b>Add-Ons:</b></th></tr>
				<tr>
				<th>
				<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
				<br>
				<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
				<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
				<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
				</th></tr>
				<br>
				<br>
				<tr><th colspan=2>
				<input type="submit" name="addcaramel" value="Add Drink">
				</th></tr>
			</div>
		</div>
		</form>
		
		<form method="POST" action="stocks.php">
		<div class="card"><h5>Dark Mocha</h5>
			<div class="itmcard">
				<img src="images/drinks/mocha.jpg" align="right" alt="Dark Mocha" width="75" height="75">
				<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
				<tr>
				<th><b>Size:</b></th><br>
				<th>
				<input type="radio" name="size" value="109">16 oz(P109)</input><br>
				<input type="radio" name="size" value="129">22 oz(P129)</input>
				</th>
				</tr>
				<br>
				<tr><th><b>Add-Ons:</b></th></tr>
				<tr>
				<th>
				<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
				<br>
				<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
				<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
				<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
				</th></tr>
				<br>
				<br>
				<tr><th colspan=2>
				<input type="submit" name="adddarkmocha" value="Add Drink">
				</th></tr>
			</div>
		</div>
		</form>
		
		<form method="POST" action="stocks.php">
		<div class="card"><h5>Java Chips</h5>
			<div class="itmcard">
				<img src="images/drinks/javachips.jpg" align="right" alt="Java Chips" width="75" height="75">
				<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
				<tr>
				<th><b>Size:</b></th><br>
				<th>
				<input type="radio" name="size" value="109">16 oz(P109)</input><br>
				<input type="radio" name="size" value="129">22 oz(P129)</input>
				</th>
				</tr>
				<br>
				<tr><th><b>Add-Ons:</b></th></tr>
				<tr>
				<th>
				<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
				<br>
				<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
				<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
				<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
				</th></tr>
				<br>
				<br>
				<tr><th colspan=2>
				<input type="submit" name="addjavachips" value="Add Drink">
				</th></tr>
			</div>
		</div>
		</form>
	</div>
	
	<!--CARD B-->
	<div class="cardsmallb" id="cardsmallb"><h1>NO CAFFEINE FRAPPE</h1></div>
	<div class="box">
	
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Chocolate</h5>
				<div class="itmcard">
					<img src="images/drinks/nonfrappechoco.jpg" align="right" alt="Chocolate" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="89">16 oz(P89)</input><br>
					<input type="radio" name="size" value="99">22 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addnonfrappechoco" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Matcha Frappe</h5>
				<div class="itmcard">
					<img src="images/drinks/nonfrappematcha.jpg" align="right" alt="Matcha" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="99">16 oz(P99)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addnonfrappematcha" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Oreo</h5>
				<div class="itmcard">
					<img src="images/drinks/oreo.jpg" align="right" alt="Oreo" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="109">16 oz(P109)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addoreo" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>White Chocolate</h5>
				<div class="itmcard">
					<img src="images/drinks/whitechoco.jpg" align="right" alt="White Chocolate" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="109">16 oz(P109)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addwchoco" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	
	<!--CARD C-->
	<div class="cardsmallc" id="cardsmallc"><h1>COLD DRINKS</h1></div>
	<div class="box">
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Matcha</h5>
				<div class="itmcard">
					<img src="images/drinks/iced matcha.jpg" align="right" alt="Matcha" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">16 oz(P79)</input><br>
					<input type="radio" name="size" value="99">22 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addcoldmatcha" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Chocolate</h5>
				<div class="itmcard">
					<img src="images/drinks/choccoffee.jpg" align="right" alt="Chocolate" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="89">16 oz(P89)</input><br>
					<input type="radio" name="size" value="109">22 oz(P109)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addchcold" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Pink Drink</h5>
				<div class="itmcard">
					<img src="images/drinks/pinkdrink.jpg" align="right" alt="Pink Drink" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="109">16 oz(P109)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addpinkdrink" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	
	<!--CARD D-->
	<div class="cardsmalld" id="cardsmalld"><h1>ICED COFFEE</h1></div>
	<div class="box">
	
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Espresso Amerikano</h5>
				<div class="itmcard">
					<img src="images/drinks/amerikano.jpg" align="right" alt="Espresso Amerikano" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">16 oz(P59)</input><br>
					<input type="radio" name="size" value="79">22 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addamerikano" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>	
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Caramel Latte</h5>
				<div class="itmcard">
					<img src="images/drinks/caramellatte.jpeg" align="right" alt="Caramel Latte" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="69">16 oz(P59)</input><br>
					<input type="radio" name="size" value="89">22 oz(P89)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addclatte" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>French Vanilla</h5>
				<div class="itmcard">
					<img src="images/drinks/frvanilla.jpg" align="right" alt="French Vanilla" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
				</tr>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">16 oz(P79)</input><br>
					<input type="radio" name="size" value="99">22 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addfrvanilla" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Matcha Latte</h5>
				<div class="itmcard">
					<img src="images/drinks/matchacoffee.jpg" align="right" alt="Matcha Latte" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">16 oz(P79)</input><br>
					<input type="radio" name="size" value="99">22 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addmlatte" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5> Spanish Latte</h5>
				<div class="itmcard">
					<img src="images/drinks/splatte.jpg" align="right" alt="Spanish Latte" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="99">16 oz(P79)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addsplatte" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Caramel Macchiato</h5>
				<div class="itmcard">
					<img src="images/drinks/cmacchiato.jpg" align="right" alt="Caramel Macchiato" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>
					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="99">16 oz(P99)</input><br>
					<input type="radio" name="size" value="119">22 oz(P119)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addcmacchiato" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>W. Chocolate Mocha</h5>
				<div class="itmcard">
					<img src="images/drinks/whmocha.jpg" align="right" alt="White Chocolate Mocha" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="99">16 oz(P99)</input><br>
					<input type="radio" name="size" value="199">22 oz(P199)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addwhmocha" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Caffe Mocha</h5>
				<div class="itmcard">
					<img src="images/drinks/caffemocha.jpg" align="right" alt="Caffe Mocha" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="109">16 oz(P109)</input><br>
					<input type="radio" name="size" value="129">22 oz(P129)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addcaffemocha" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	
	<!--CARD E-->
	<div class="cardsmalle" id="cardsmalle"><h1>COFFEE</h1></div>
	<div class="box">
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Barako</h5>
				<div class="itmcard">
					<img src="images/drinks/barako.jpg" align="right" alt="Barako" width="75" height="105">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addbarako" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Macchiato</h5>
				<div class="itmcard">
					<img src="images/drinks/cofmacchiato.jpg" align="right" alt="Macchiato" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">18 oz(P79)</input><br>
					<input type="radio" name="size" value="99">12 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addmachiatohot" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Cappuccino</h5>
				<div class="itmcard">
					<img src="images/drinks/cappuccino.jpg" align="right" alt="Cappuccino Hot" width="75" height="95">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">18 oz(P79)</input><br>
					<input type="radio" name="size" value="99">12 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th><tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addcappuhot" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Mochaccino</h5>
				<div class="itmcard">
					<img src="images/drinks/mochaccino.jpg" align="right" alt="Mochaccino" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="79">18 oz(P79)</input><br>
					<input type="radio" name="size" value="99">12 oz(P99)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addmochaccino" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	
	<!--CARD F-->
	<div class="cardsmallf" id="cardsmallf"><h1>HOT DRINKS</h1></div>
	<div class="box">
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Sagada</h5>
				<div class="itmcard">
					<img src="images/drinks/sagada.png" align="right" alt="Sagada" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addsagada" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Kalinga</h5>
				<div class="itmcard">
					<img src="images/drinks/kalinga.jpg" align="right" alt="Kalinga" width="75" height="95">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addkalinga" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Chocolate</h5>
				<div class="itmcard">
					<img src="images/drinks/coffeetsoko.jpg" align="right" alt="Kalinga" width="75" height="95">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addhotchoco" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Vanilla</h5>
				<div class="itmcard">
					<img src="images/drinks/Vanillahot.jpg" align="right" alt="VanillaHot" width="75" height="95">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="69">18 oz(P69)</input><br>
					<input type="radio" name="size" value="89">12 oz(P89)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Espresso Shots(P20)<br>
					<input type=checkbox name=addon2 value=25>Flavored Syrup(P25)<br>
					<input type=checkbox name=addon3 value=20>Whip Cream(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addhotvan" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	
	<!--CARD G-->
	<div class="cardsmallg" id="cardsmallg"><h1>SODA SERIES</h1></div>
	<div class="box">
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Green Apple</h5>
				<div class="itmcard">
					<img src="images/drinks/greenapple.jpg" align="right" alt="Green Apple" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr5">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Nata Crystals(P20)<br>
					<input type=checkbox name=addon2 value=25>Boba Pearls(P25)<br>
					<input type=checkbox name=addon3 value=20>Jelly Gummies(P20)
					<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addgrnapp" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Strawberry</h5>
				<div class="itmcard">
					<img src="images/drinks/strawberry.jpg" align="right" alt="Strawberry" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Nata Crystals(P20)<br>
					<input type=checkbox name=addon2 value=25>Boba Pearls(P25)<br>
					<input type=checkbox name=addon3 value=20>Jelly Gummies(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addstrberry" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Kiwi</h5>
				<div class="itmcard">
					<img src="images/drinks/kiwi.jpg" align="right" alt="Kiwi" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level:</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Nata Crystals(P20)<br>
					<input type=checkbox name=addon2 value=25>Boba Pearls(P25)<br>
					<input type=checkbox name=addon3 value=20>Jelly Gummies(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addkiwi" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
		
		<form method="POST" action="stocks.php">
			<div class="card"><h5>Blueberry</h5>
				<div class="itmcard">
					<img src="images/drinks/blueberry.jpg" align="right" alt="Blueberry" width="75" height="75">
					<tr>
                <th><b>Customer Name:</b></th>
                <td><textarea name="customer_name" rows="1"></textarea></td>
            </tr>
			<br>

					<tr>
					<th><b>Size:</b></th><br>
					<th>
					<th>
					<input type="radio" name="size" value="59">18 oz(P59)</input><br>
					<input type="radio" name="size" value="79">12 oz(P79)</input>
					</th>
					</tr>
					<br>
					<tr><th><b>Add-Ons:</b></th></tr>
					<tr>
					<th>
					<tr><br>
					<th>Sugar Level :</th>
					<td>
					<select name="eshot">
								<option value="No Sugar">No Sugar</option>
								<option value="sgr25">25%</option>
                                <option value="sgr50">50%</option>
                                <option value="sgr75">75%</option>
                                <option value="sgr100">100%</option>
                    </select>
					</td>
					</tr>
					<br>
					<input type=checkbox name=addon1 value=20>Nata Crystals(P20)<br>
					<input type=checkbox name=addon2 value=25>Boba Pearls(P25)<br>
					<input type=checkbox name=addon3 value=20>Jelly Gummies(P20)<br>
					</th></tr>
					<br>
					<br>
					<tr><th colspan=2>
					<input type="submit" name="addbberry" value="Add Drink">
					</th></tr>
				</div>
			</div>
		</form>
	</div>
	</div>
	
	<div class="container2" id="container2">
		<div class="box">
			<div class="card2">
			<h3><b>Customer Details:</b><h3><br>
			<h5><b>Total Value:</b> <div id="totalValue">P0.00</div></h5><br>
			<div id="currentOrder"></div><br>
			</div>
		
		</div>
	
	</div>
	</div>
	</center>
	</body>
</html>
<!--FRAPPE VANILLA-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addvanilla'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;
	
    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Frappe Vanilla";
    $total = $add;
	

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
    echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
	
	
	
}
?>

<!--FRAPPE CARAMEL-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addcaramel'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Frappe Caramel";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
    echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--FRAPPE DARK MOCHA-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['adddarkmocha'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 129) {
            $sizes = "Large";
            $sz = 129;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Dark Mocha";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--FRAPPE JAVA CHIPS-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addjavachips'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 129) {
            $sizes = "Large";
            $sz = 129;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Frappe Java Chips";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD B-->

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addnonfrappechoco'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 89) {
            $sizes = "Small";
            $sz = 89;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Non Frappe Chocolate";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addnonfrappematcha'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Matcha Frappe";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addoreo'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Non Frappe Oreo";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addwchoco'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Non Frappe White Chocolate";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD C-->

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addcoldmatcha'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Cold Matcha";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addchcold'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 89) {
            $sizes = "Small";
            $sz = 89;
        } elseif ($_POST['size'] == 109) {
            $sizes = "Large";
            $sz = 109;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Cold Chocolate";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addpinkdrink'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Pink Drink";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD D-->

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addamerikano'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    } else {
        echo "<script>alert('Size Not Selected.');</script>";
        exit();
    }

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Espresso Amerikano";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
    
    echo "<script>";
    echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";	
    echo "</script>";
}
?>


<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addclatte'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 69) {
            $sizes = "Small";
            $sz = 69;
        } elseif ($_POST['size'] == 89) {
            $sizes = "Large";
            $sz = 89;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Caramel Latte";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addfrvanilla'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "French Vanilla";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addmlatte'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Matcha Latte";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addsplatte'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Spanish Latte";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addcmacchiato'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 119) {
            $sizes = "Large";
            $sz = 119;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Caramel Macchiato";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addwhmocha'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 99) {
            $sizes = "Small";
            $sz = 99;
        } elseif ($_POST['size'] == 199) {
            $sizes = "Large";
            $sz = 199;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "White Chocolate Mocha";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addcaffemocha'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 109) {
            $sizes = "Small";
            $sz = 109;
        } elseif ($_POST['size'] == 129) {
            $sizes = "Large";
            $sz = 129;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "Not Available for this drink";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Caffe Mocha";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD E-->

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addbarako'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Barako";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addmachiatohot'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Macchiato";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addcappuhot'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Cappuccino";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addmochaccino'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 79) {
            $sizes = "Small";
            $sz = 79;
        } elseif ($_POST['size'] == 99) {
            $sizes = "Large";
            $sz = 99;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Mochaccino";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD F-->

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addsagada'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Sagada";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addkalinga'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Kalinga";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addhotchoco'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 69) {
            $sizes = "Small";
            $sz = 69;
        } elseif ($_POST['size'] == 89) {
            $sizes = "Large";
            $sz = 89;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Hot Chocolate";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addhotvan'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 69) {
            $sizes = "Small";
            $sz = 69;
        } elseif ($_POST['size'] == 89) {
            $sizes = "Large";
            $sz = 89;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Espresso Shots" : "No Espresso Shots";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Flavored Syrup" : "No Flavored Syrup";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Whip Cream" : "No Whip Cream";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Hot Vanilla";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--CARD E-->
<!--GREEN APPLE-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addgrnapp'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Nata Crystals" : "No Nata Crystals";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Boba Pearls" : "No Boba Pearls";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Jelly Gummies" : "No Jelly Gummies";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Green Apple Soda";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--STRAWBERRY-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addstrberry'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Nata Crystals" : "No Nata Crystals";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Boba Pearls" : "No Boba Pearls";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Jelly Gummies" : "No Jelly Gummies";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Strawberry Soda";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

        $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
        $updateStockResult = $conn->query($updateStockSql);
    
        if ($updateStockResult === TRUE) {
            echo "Order added successfully.";
        } else {
            echo "Error updating stock: " . $conn->error;
        }
    } else {
        echo "Error adding order: " . $conn->error;
    }
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--KIWI-->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addkiwi'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Nata Crystals" : "No Nata Crystals";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Boba Pearls" : "No Boba Pearls";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Jelly Gummies" : "No Jelly Gummies";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Kiwi Soda";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

if ($insert === TRUE) {

    $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
    $updateStockResult = $conn->query($updateStockSql);

    if ($updateStockResult === TRUE) {
        echo "Order added successfully.";
    } else {
        echo "Error updating stock: " . $conn->error;
    }
} else {
    echo "Error adding order: " . $conn->error;
}
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>

<!--BLUE BERRY -->
<?php
include "connection.php";

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

if (isset($_POST['addbberry'])) {
	$customerName =$_POST['customer_name'];
    $sizes = NULL;
    $sz = 0;

    if (isset($_POST['size'])) {
        if ($_POST['size'] == 59) {
            $sizes = "Small";
            $sz = 59;
        } elseif ($_POST['size'] == 79) {
            $sizes = "Large";
            $sz = 79;
        }
    }else{
		echo "<script>alert('Size Not Selected.');</script>";
		exit();
	}

    $addons = array();
    $add = $sz; // Initialize with the size value

    $sugarLevel = isset($_POST['eshot']) ? $_POST['eshot'] : "No Sugar";
    $sugarLevelValue = 0;
    switch ($sugarLevel) {
		case "No Sugar":
			$sugarLevelValue = 0;
			break;
        case "25%":
            $sugarLevelValue = 5;
            break;
        case "50%":
            $sugarLevelValue = 10;
            break;
        case "75%":
            $sugarLevelValue = 15;
            break;
        case "100%":
            $sugarLevelValue = 20;
            break;
    }

    $add += $sugarLevelValue;

    $addon1 = isset($_POST['addon1']) ? "Nata Crystals" : "No Nata Crystals";
    $a1 = isset($_POST['addon1']) ? 20 : 0;
    $add += $a1;
    $addons[] = $addon1;

    $addon2 = isset($_POST['addon2']) ? "Boba Pearls" : "No Boba Pearls";
    $a2 = isset($_POST['addon2']) ? 25 : 0;
    $add += $a2;
    $addons[] = $addon2;

    $addon3 = isset($_POST['addon3']) ? "Jelly Gummies" : "No Jelly Gummies";
    $a3 = isset($_POST['addon3']) ? 20 : 0;
    $add += $a3;
    $addons[] = $addon3;

    $drink = "Blueberry Soda";
    $total = $add;

    $sql = "INSERT INTO tbl_orders (drink_name,customer_name, size, sugar_level, addon_1, addon_2, addon_3, total_value) 
            VALUES ('$drink', '$customerName', '$sizes', '$sugarLevel', '$addon1', '$addon2', '$addon3', '$total')";
    
    $insert = $conn->query($sql);

    if ($insert === TRUE) {

    $updateStockSql = "UPDATE tbl_stocks SET PRODUCTSTOCK = PRODUCTSTOCK - 1 WHERE STOCK_ID = 1";
    $updateStockResult = $conn->query($updateStockSql);

    if ($updateStockResult === TRUE) {
        echo "Order added successfully.";
    } else {
        echo "Error updating stock: " . $conn->error;
    }
} else {
    echo "Error adding order: " . $conn->error;
}
	
	echo "<script>";
echo "document.getElementById('currentOrder').innerHTML = '<h3><b>Customer Name:</b></h3><h5> $customerName </h5><h3><br><b>Current Order:</b></h3><h5>$drink<br><br><b>Size:</b> $sizes <br><br><b>Sugar Level:<br></b> $sugarLevel <br><br><b>Add-ons:</br> " . implode(', ', $addons) . "</h5>';";
    echo "document.getElementById('totalValue').innerHTML = 'P$total';";
    echo "</script>";
}
?>