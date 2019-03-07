<?php $title = 'Le billet';?>
<?php ob_start();?>


<div class="row">
	<div class="col">
		<div class="author"> 

			<div class="col">
				<div class="author"> 

					<div class="card">
						<img class="card-img-top" src="pictures/jfo.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">						
								Bienvenue, lecteur. <br/>
								Aujourd'hui, j'ai décidé de t'emmener avec moi. Que nous embarquions, toi et moi, à travers un long voyage. <br/>
								Tu es ici chez toi, dans ce roman que je complèterai petit à petit. Tu pourras ainsi le découvrir pas à pas et entammer une immersion particulière. <br/>
								Je te souhaite une bonne lecture. <br/>
								<div id="sign"> Jean Forteroche </div></p>
							</div>
						</div>

					</div>
				</div>
			</div>

			<?php $content = ob_get_clean();?>
			<?php include('../view/templates/template_index.php');?>