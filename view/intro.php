<?php $title = 'Le billet';?>
<?php ob_start();?>


<main>
	<div class="row">
		<div class="col-md-12"> 
			<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
				<div class="col-md-12 px-0">
					<h1 class="display-4 text-center">Billet simple pour l'Alaska</h1>
					<p class="lead my-3 text-center">
						Accompagnez Mylo dans ses aventures, lui qui, du jour au lendemain, a décidé de quitter sa cité d'Aquapolis et tous ses proches suite à un incroyable burn-out. Il pensait partir seul, mais non. Pas cette fois. 
					</br>
					Angoisses, suspence, mais aussi rencontres inoubliables et aventure incoutournable. Êtes-vous prêt?
				</p>
			</div>
		</div>
	</div>
</div>

<div class="jumbotron"><div data-component-video=""  style="min-height:240px;min-width:240px;position:relative"><iframe frameborder="0"  src="../../assets/pictures/160712_071_Maps_Alaska_1080p.mp4" style="width:100%;height:100%;position:absolute;left:0px;pointer-events:none"></iframe></div>
<p class="lead">J'en ai assez. Tout le temps, c'est la course. Métro-boulot-dodo, comme qui dirait. Et puis, à quoi bon? Tout est trouble en ce moment, ma femme, mes gosses, mon job. J'y arrive plus. Je ne respire plus. Il est temps de faire une pause, non? Temps de prendre du recul, m'isoler me permettra sans doute de me retrouver. Et puis, là au moins personne ne décidera à ma place. Mais est-ce bien raisonnable? ... Tant pis. Je fonce. "Non, attends!"...</p>
<p><a class="btn btn-lg btn-light" href="#" role="button">Suite</a></p>
</div>

</main>
<?php $content = ob_get_clean();?>
<?php include('../view/templates/template_index.php');?>