<?php 	
	get_header(); 
?>
	<div class="blockBody">
		<div class="blockContent">
			
			<div class="contentLeft">

				<div class="filterFerst">
					<div class="filter-title">
						<div>
							<h2>Filter</h2>
						</div>
						<div>
							<button type="button" class="button-clear">Clear Filter</button>
						</div>
					</div>
						<p>YOU SHOOSED</p>
						<div class="youShoosed"></div>
				</div>

				<div class="filterTwo">
					<h3>PRACING</h3>
					<form class="form-horizontal" method="post" id="form">
						<div class="form-group">
							
								<input class="form-control" name="price" id="price">
								<div id="slider-range"></div>
							
						</div>
					</form>
				</div>

				<div class="filterThree">
					<h3>GENDER</h3>

					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheck1"/>
						<label class="form-check-label" for="defaultCheck1">For all</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheck2"/>
						<label class="form-check-label" for="defaultCheck2">For men</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheck3"/>
						<label class="form-check-label" for="defaultCheck3">For woomen</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheck4"/>
						<label class="form-check-label" for="defaultCheck4">For children</label>
  					</div>
				</div>

				

				<div class="filterFor">
					<h3>PECULIARITIES</h3>

					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec1"/>
						<label class="form-check-label" for="defaultCheckPec1">Outdor shoes</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec2"/>
						<label class="form-check-label" for="defaultCheckPec2">Classic shoes</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec3"/>
						<label class="form-check-label" for="defaultCheckPec3">Sport shoes</label>
  					</div>
					<div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec4"/>
						<label class="form-check-label" for="defaultCheckPec4">Casual shoes</label>
  					</div>
					  <div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec5"/>
						<label class="form-check-label" for="defaultCheckPec5">Run shoes</label>
  					</div>
					  <div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec6"/>
						<label class="form-check-label" for="defaultCheckPec6">Football shoes</label>
  					</div>
					  <div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec7"/>
						<label class="form-check-label" for="defaultCheckPec7">Tennis shoes</label>
  					</div>
					  <div class="form-check">
						<input class="input-che" type="checkbox" value="" id="defaultCheckPec8"/>
						<label class="form-check-label" for="defaultCheckPec8">Skateboard shoes</label>
  					</div>
				</div>

				<div class="filterFive">
					<h3>COLORS</h3>
					<div class="fiveColor">
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor1"/>
							<label class="label-color" for="defaultCheckColor1" id="lab-color1"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor2"/>
							<label class="label-color" for="defaultCheckColor2" id="lab-color2"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor3"/>
							<label class="label-color" for="defaultCheckColor3" id="lab-color3"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor4"/>
							<label class="label-color" for="defaultCheckColor4" id="lab-color4"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor5"/>
							<label class="label-color" for="defaultCheckColor5" id="lab-color5"></label>
						</div>
					</div>

					<div class="fiveColorTwo">
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor6"/>
							<label class="label-color" for="defaultCheckColor6" id="lab-color6"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor7"/>
							<label class="label-color" for="defaultCheckColor7" id="lab-color7"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor8"/>
							<label class="label-color" for="defaultCheckColor8" id="lab-color8"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor9"/>
							<label class="label-color" for="defaultCheckColor9" id="lab-color9"></label>
						</div>
						<div class="form-check-color">
							<input class="input-color" type="checkbox" value="" id="defaultCheckColor10"/>
							<label class="label-color" for="defaultCheckColor10" id="lab-color10"></label>
						</div>
					</div>
				</div>

				<div class="filterSex">
					
					<h3>SIZE</h3>

					<div class="button-size">
						<div>
							<button type="button" class="button-country">UA</button>
						</div>
						<div>
							<button type="button" class="button-country">EU</button>
						</div>
						<div>
							<button type="button" class="button-country">UK</button>
						</div>
					</div>

					<div class="button-size-number">
						<div class="size-number">
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="22" id="defaultCheckSize1"/>
								<label class="label-size" for="defaultCheckSize1" id="size22"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="22.5" id="defaultCheckSize2"/>
								<label class="label-size" for="defaultCheckSize2" id="size225"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="23" id="defaultCheckSize3"/>
								<label class="label-size" for="defaultCheckSize3" id="size23"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="23.5" id="defaultCheckSize4"/>
								<label class="label-size" for="defaultCheckSize4" id="size235"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="24" id="defaultCheckSize5"/>
								<label class="label-size" for="defaultCheckSize5" id="size24"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="24.5" id="defaultCheckSize6"/>
								<label class="label-size" for="defaultCheckSize6" id="size245"></label>
							</div>
					
						</div>
						<div class="size-number">
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="25" id="defaultCheckSize7"/>
								<label class="label-size" for="defaultCheckSize7" id="size25"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="25.5" id="defaultCheckSize8"/>
								<label class="label-size" for="defaultCheckSize8" id="size255"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="26" id="defaultCheckSize9"/>
								<label class="label-size" for="defaultCheckSize9" id="size26"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="26.5" id="defaultCheckSize10"/>
								<label class="label-size" for="defaultCheckSize10" id="size265"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="27" id="defaultCheckSize11"/>
								<label class="label-size" for="defaultCheckSize11" id="size27"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="27.5" id="defaultCheckSize12"/>
								<label class="label-size" for="defaultCheckSize12" id="size275"></label>
							</div>
					
						</div>
						<div class="size-number">
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="28" id="defaultCheckSize13"/>
								<label class="label-size" for="defaultCheckSize13" id="size28"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="28.5" id="defaultCheckSize14"/>
								<label class="label-size" for="defaultCheckSize14" id="size285"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="29" id="defaultCheckSize15"/>
								<label class="label-size" for="defaultCheckSize15" id="size29"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="29.5" id="defaultCheckSize16"/>
								<label class="label-size" for="defaultCheckSize16" id="size295"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="30" id="defaultCheckSize17"/>
								<label class="label-size" for="defaultCheckSize17" id="size30"></label>
							</div>
							<div class="form-check-size">
								<input class="input-size" type="checkbox" value="30.5" id="defaultCheckSize18"/>
								<label class="label-size" for="defaultCheckSize18" id="size305"></label>
							</div>
					
						</div>
					</div>

				</div>

				<div class="filterSeven">
					<div class="button-nove_sale">
						<div>
							<button type="button" class="button-novelties">Novelties</button>
						</div>
						<div>
							<button type="button" class="button-sale">Seven</button>
						</div>
					</div>
				</div>
			</div>
			<!--На данный момент вывод карточек товара статично, а в дальнейшем динамично через while-->
			<div class="contentRight">
				<div>

					<div class="buttonSort">
						<form name="formSort">
							<select class="sort" name="color" required="required">
								<option value="">Sort by</option>
								<option value="1">Синий</option>
								<option value="2">Зеленый</option>
							</select>
						</form>
					</div>

					<div class="rightBlockOne">
						
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes1.png" alt="Nike 1">
							</div>
							<div class="titelTovar">
								
								<p class="titleTovarName">Nike Air Force 1 Medium Blue</p>
								<p class="titleTovarPrice">$77.98</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes2.png" alt="Nike 2">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">New Balance 574 classic</p>
								<p class="titleTovarPrice">$80.34</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes3.png" alt="Nike 3">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Nike Air Max 97</p>
								<p class="titleTovarPrice">$120.00</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes4.png" alt="Nike 4">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">nike air JORDAN 4 RETRO THUNDER</p>
								<p class="titleTovarPrice">$104.26</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
					</div>

					<div class="rightBlockOne">
						
						<div class="cardTovar">
							
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes5.png" alt="Nike 5">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Adidas Gazelle Burgundy</p>
								<p class="titleTovarPrice">$80.90</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes6.png" alt="Nike 6">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Adidas Yeezy Boost 700 Wave Runner</p>
								<p class="titleTovarPrice">$176.00</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes7.png" alt="Nike 7">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Nike Air Huarache red </p>
								<p class="titleTovarPrice">$108.00</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
						
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes8.png" alt="Nike 8">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Reebok Classic Leather</p>
								<p class="titleTovarPrice">$125.70</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
					</div>
				
					<div class="rightBlockOne">
						
						<div class="cardTovar">
							
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes9.png" alt="Nike 9">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Nike LeBron 14 CAVS PE ALTERNATE</p>
								<p class="titleTovarPrice">$140.16</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
						
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes10.png" alt="Nike 10">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">ADIDAS NMD_XR1 PRIMEKNIT BB2376</p>
								<p class="titleTovarPrice">$110.26</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes11.png" alt="Nike 11">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Jordan 1 Retro Black Royal Blue</p>
								<p class="titleTovarPrice">$170.50</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
				
						<div class="cardTovar">
							<div class="blockTovarImage">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shoes12.png" alt="Nike 12">
							</div>
							<div class="titelTovar">
								<p class="titleTovarName">Nike Zoom KD 9 Mic Drop</p>
								<p class="titleTovarPrice">$90.35</p>
							</div>
							<div class="buttonCardTovar">
								<div>
									<button type="button" class="button-item">View item</button>
								</div>
								<div>
									<button type="button" class="button-vector"></button>
								</div>
							</div>

						</div>
					</div>
				
						<div class="pagin">	
							<button type="button" class="button-pagin">1</button>
							<button type="button" class="button-pagin">2</button>
							<button type="button" class="button-pagin">3</button>
							<button type="button" class="button-pagin">....</button>
							<button type="button" class="button-pagin">16</button>	
						</div>
				
				
				</div>
						
			
			
			</div>

			

		</div>

</div>
		
		





	

<?php
	get_footer();
?>