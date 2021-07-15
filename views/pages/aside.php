<?php
print_r($_SESSION);
?>
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="view/dist/img/avatar5.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p> <?=$_SESSION['name']?> </p>
				<a href="#"><i class="fa fa-circle text-success"></i> En servicio</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">PERFIL: <?=mb_strtoupper($_SESSION['perfil'],'utf-8')?></li>
			<?php if ( $_SESSION['nivel'] == 'SUBDIRECTOR' && $_SESSION['perfil'] == 'UAA'): ?>
			<li id="option_1" class=" treeview">
				<a href="#">
					<i class="fa fa-list"></i> <span>PERSONAL</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li id="option_1_1" class=""><a href="index.php?menu=add_personal"><i class="fa fa-circle-o"></i> Alta  </a></li>
					<li id="option_1_2"><a href="index.php?menu=list_personal"><i class="fa fa-circle-o"></i> Listado </a></li>
					<li id="option_1_3"><a href="index.php?menu=niveles"><i class="fa fa-circle-o"></i> Niveles-Rangos </a></li>
					<li id="option_1_4"><a href="index.php?menu=plazas"><i class="fa fa-circle-o"></i> Plazas </a></li>
				</ul>				
			</li>
			<li id="option_2" class=" treeview">
				<a href="#">
					<i class="fa fa-check-square-o"></i> <span>ASISTENCIA</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li id="option_2_1" class=""><a href="index.php?menu=asistencia"><i class="fa fa-pencil"></i> Registro  </a></li>
					<li id="option_2_4" class=""><a href="index.php?menu=ver_asistencia"><i class="fa fa-list"></i> Ver listado  </a></li>
					
					<!-- <li id="option_2_2"><a href="index.php?menu=retardos"><i class="fa fa-clock-o"></i> Retardos </a></li>
					<li id="option_2_3"><a href="index.php?menu=h_asistencia"><i class="fa fa-history"></i> Historico </a></li> -->
				</ul>				
			</li>
			<li id="option_3" class=" treeview">
				<a href="#">
					<i class="fa fa-dollar"></i> <span>NÓMINA</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li id="option_3_1" class=""><a href="index.php?menu=pagar"><i class="fa fa-money"></i> Pagar  </a></li>
					<li id="option_3_2" class=""><a href="index.php?menu=add_pd"><i class="fa fa-plus"></i> Alta Percep./Deduc.  </a></li>
					<li id="option_3_3" class=""><a href="index.php?menu=add_regla"><i class="fa fa-star"></i> Aplicar reglas  </a></li>
					<li id="option_3_4" class=""><a href="index.php?menu=quincenas_p"><i class="fa fa-cc-visa"></i> Quincenas pagadas  </a></li>
					<li id="option_3_5" class=""><a href="index.php?menu=tabulador"><i class="fa fa-table"></i> Tabulador de ISR  </a></li>
				</ul>				
			</li>
			<li id="option_4" class=" treeview">
				<a href="#">
					<i class="fa fa-file"></i> <span>REPORTES</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li id="option_4_1" class=""><a href="index.php?menu=r_criterio"><i class="fa fa-dollar"></i> Reporte por criterio  </a></li>
					<li id="option_4_2" class=""><a href="index.php?menu=comprobante_sp"><i class="fa fa-user-o"></i> Comprobante por persona  </a></li>
				</ul>				
			</li>
			<li id="option_5" class=" treeview">
				<a href="#">
					<i class="fa fa-money"></i> <span>FINANZAS</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li id="option_5_1" class=""><a href="index.php?menu=timbre"><i class="fa fa-ticket"></i> Timbrado</a></li>
					<li id="option_5_2" class=""><a href="index.php?menu=osfem"><i class="fa fa-building-o"></i> OSFEM </a></li>
					<li id="option_5_3" class=""><a href="index.php?menu=dispersion"><i class="fa fa-object-ungroup"></i> Dispersión  </a></li>
				</ul>				
			</li>
			<?php elseif( $_SESSION['nivel'] == 'OPERATIVO' && $_SESSION['perfil'] == 'UAA' ): ?>
			<li id="option_1" class=" treeview">
				<a href="#">
					<i class="fa fa-list"></i> <span>PERSONAL</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
			</li>
			<?php elseif($_SESSION['perfil'] == 'SISTEMAS' ): ?>
			<li id="option_1">
				<a href="index.php?menu=general">
					<i class="fa fa-list"></i> <span>Quincenas pagadas</span>
					
				</a>
			</li>
			<?php endif ?>
		</ul>
	</section>
</aside>