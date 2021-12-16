		<div id="imageHeader" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');"></div>
		<div id="mainContentContainer">
			<div id="containerLV1">
                <?php foreach($property as $pt): ?>
				<div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD <?php echo $pt['harga_properti']; ?></div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b><?php echo $pt['judul_properti']; ?></b></div>
                        <div class="descriptionContent">
                            <?php echo $pt['deskripsi_properti'] ?>
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo $pt['luas_properti']; ?> Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo $pt['mobil_parkir']; ?> Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo $pt['jml_kamar']; ?> Room</div>
                        </div>
                    </div>
				</div>
                <?php endforeach; ?>
                <!-- <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>
                <div class="content">
					<div class="imageContent" style="background-image: url('<?php echo base_url();?>/assets/images/modular-house.jpg');">
                        <div class="price">USD 176,889</div>
                    </div>
					<div class="textContent">
                        <div class="tittleContent"><b>STUNNING NEW 3 BEDROOM MUST SE VILLA IN BRAWA</b></div>
                        <div class="descriptionContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate, sapien sit amet semper egestas, 
								dolor quam mattis lacus, vitae egestas nisi neque eu justo. Duis arcu neque, sagittis ac nisi et, 
								lobortis maximus mi.
                        </div>
                        <div class="fiturContent">
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>100 Sf</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>2 Car</div><div class="vl"></div>
                            <div class="fiturC"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>3 Room</div>
                        </div>
                    </div>
				</div>	 -->
                <div id="paginationing">
                    <div id="leftPage"><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></div>
					<div id="numberPage"><b><a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a></b></div>
					<div id="rightPage"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
				</div>		
			</div>
			<div id="containerLV2">			
				<div id="choiceFilter">
					<div class="detailChoice">
						<i class="fa fa-home" aria-hidden="true"></i>
						<p>FOR SALE</p>
					</div>
					<div class="detailChoice">
						<i class="fa fa-home" aria-hidden="true"></i>
						<p>FOR RENT</p>
					</div>
				</div>	
				<div id="filtering">					
					<div>
                        <form action="#" id="formInput">
							<label for="#" class="labelForm"><b>PROPERTY LOCATION</b></label>
                            <select name="country">
								<option value="" disabled selected>Enter Location</option>								
								<option value="australia">Australia</option>
								<option value="canada">Canada</option>
								<option value="usa">USA</option>
							</select>
							<label for="#" class="labelForm"><b>PROPERTY STATUS</b></label>
                            <select name="status">
								<option value="" disabled selected>All Status</option>	
								<option value="sold">Sold</option>
								<option value="sell">Sell</option>
								<option value="book">Book</option>
							</select>
							<label for="#" class="labelForm"><b>PROPERTY TYPE</b></label>
                            <select name="type">
								<option value="" disabled selected>Type</option>	
								<option value="sold">Apartement</option>
								<option value="sell">Hotel</option>
								<option value="book">House</option>
							</select>
							<label for="#" class="labelForm"><b>BATH ROOM</b></label>
                            <select name="bath">
								<option value="" disabled selected>Quantity</option>	
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							<label for="#" class="labelForm"><b>SQUARE FEET</b></label>
							<div class="slidecontainer">
								<input type="range" min="1" max="250" value="150" class="slider" id="myRange">
							</div>

							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>                            
                        </form>
                    </div>
				</div>
				<div id="contactAgen">
					<div class="tittleContainer">
						<h4>CONTACT OUR AGENT</h4>
					</div>
					<div id="containerContact">
						<img src="<?php echo base_url();?>/assets/images/modular-house.jpg">
						<p><b>Jhon Doel</b></p>
						<div id="contactMedia">
							<div class="detailContact"><i class="fa fa-envelope-o" aria-hidden="true"></i></i>Helo@tonjoo.com</div><div class="v2"></div>
							<div class="detailContact"><i class="fa fa-phone" aria-hidden="true"></i>(+62) 274 21678</div>
						</div>
					</div>
				</div>
				<div id="message">
					<div class="tittleContainer">
						<h4>LEAVE MESSAGE</h4>
					</div>
					<div>
                        <form action="#" id="formInput">
                            <input type="text" id="fname" name="name" placeholder="Name">
                            <input type="email" id="femail" name="email" placeholder="Email">
                            <input type="text" id="fmessage" name="message" placeholder="Message">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
				</div>
			</div>
		</div>