
			<?php $this->inc('elements/header.php'); ?>
			<!-- Slide -->
			<div class="containerLarge" id=slide>
				
				<div class="pure-u-1" >
					<div class="container" >
						<div class="pure-u-1" >
							<!--<img src="themes/themearendre/assets/images/banner.png" alt="bannière" width="960px" height="300px" > -->	
							<?php		          
							$a= new Area('Contenu');
							$a->display($c);
				?>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="container">
				<div class="pure-u-1" ></br></br></br></br>
				<center><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p><center/></br>
				<center><img src="themes/themearendre/assets/images/bar.png" alt="bar"></center></br>
				</div>
				<!-- col123 -->	
					<div class="pure-u-1-3">
						<p>Perfect Logic</br>
						<?php		          
						$a= new Area('Col1');
						$a->display($c);
						?>
						<!--all you want your website to do</p>
						<img src="themes/themearendre/assets/images/col1.png" alt="col1>" id="ic">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
						<img src="themes/themearendre/assets/images/learnm.png" alt="learnm" id="learn">-->
					</div>

					<div class="pure-u-1-3">
						<p>Complete solution</br>
						<?php		          
						$a= new Area('Col2');
						$a->display($c);
						?>
						<!--a tool everything and anything you can think</p>
						<img src="themes/themearendre/assets/images/col2.png" alt="col2" id="ic">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciun tdolore magnam aliquam quaerat voluptatem.</p>
						<img src="themes/themearendre/assets/images/learnm.png" alt="learnm" id="learn">-->
					</div>

					<div class="pure-u-1-3">
						<p>Uber culture</br>
						<?php		          
						$a= new Area('Col3');
						$a->display($c);
						?>
						<!--Fresh.Modern and ready for the future</p>
						<img src="themes/themearendre/assets/images/col3.png" alt="col3" id="ic">
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<img src="themes/themearendre/assets/images/learnm.png" alt="learnm" id="learn">-->
					</div>				
				<!--col123-->
				</br></br></br><center><img src="themes/themearendre/assets/images/bar.png" alt="bar"></center></br>
			</div>
			
			<div class="container">
				<!-- colsocial -->			
					<div class="pure-u-1-3">
						<p>  Social Connections</p>
						<center><img src="themes/themearendre/assets/images/tibar.png" alt="tibar" class="tb"></center></br>
						<?php		          
						$a= new Area('Social');
						$a->display($c);
						?>
						<!-- colsocial <p>at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
						<div class="listimg">
							<ul>
								<li><img src="themes/themearendre/assets/images/social1.png" alt="social"></li>
								<li><img src="themes/themearendre/assets/images/social2.png" alt="social"></li>
								<li><img src="themes/themearendre/assets/images/social3.png" alt="social"></li>
								<li><img src="themes/themearendre/assets/images/social4.png" alt="social"></li>
								<li><img src="themes/themearendre/assets/images/social5.png" alt="social"></li>
							</ul>
						</div>
						<p>  Newsletter</p>
						<center><img src="themes/themearendre/assets/images/tibar.png" alt="tibar" class="tb"></center></br>
						<p>at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
						<input type="text" name="input" value="your email adress" class="formcol" height="200px">
						<img src="themes/themearendre/assets/images/suscribe.png" alt="suscribe" id=suscribe>-->
					</div>

					<div class="pure-u-1-3">
						<p>  Contact</p>
						<center><img src="themes/themearendre/assets/images/tibar.png" alt="tibar" class="tb"></center></br>
						<?php		          
						$a= new Area('contact');
						$a->display($c);
						?>
						<!--
						<FORM>
						<input type="text" name="input" value="your name" class="formcol"></br></br></br>
						<input type="text" name="input" value="your email adress" class="formcol"></br></br></br>
						<TEXTAREA name="input" rows=11 cols=40 width="90%">message</TEXTAREA>
						</FORM>
						<img src="themes/themearendre/assets/images/sendit.png" alt="sendit" id=suscribe>-->
					</div>

					<div class="pure-u-1-3">
						<p>  News Updates</p>
						<center><img src="themes/themearendre/assets/images/tibar.png" alt="tibar" class="tb"></center></br></br>
						<?php		          
						$a= new Area('actualités');
						$a->display($c);
						?>
						

						<!--<table>
						<tr>
						<td><img src="themes/themearendre/assets/images/news1.png" alt="news" class="imgnews"></td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</td>
						</tr>
						<tr>
						<td><img src="themes/themearendre/assets/images/news2.png" alt="news" class="imgnews"></td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</td>
						</tr>
						<tr>
						<td><img src="themes/themearendre/assets/images/news3.png" alt="news" class="imgnews"></td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</td>
						</tr>
						</table>
						<img src="themes/themearendre/assets/images/visitblog.png" alt="visitblog" id=visitblog >-->
					</div></br></br></br>				
				<!--colsocial-->
			</div>
			<?php $this->inc('elements/footer.php'); ?> 
			
