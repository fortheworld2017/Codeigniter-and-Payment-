<?php //ob_start();
	//if (!session_id()) session_start();
	//if(!$_SESSION['adminid'] )
		//header("location:index.php");
	require_once('Includes/CommonIncludes.php');
	require_once('Controllers/StaticContentController.php');
	$StaticContentControllerObj	=	new StaticContentController();
	$show_id		=	1; // id = 1 for feature 
	/* if(isset($_GET['id']) && $_GET['id']!='')
		$show_id	=	$_GET['id']; */
	$staticcontent_detail	=	$StaticContentControllerObj->getContentdetail($show_id);
?>
<?php siteHeader(); ?>
	<div class="Bodycontent">
		<div class="Landing">
			<div class="static">
				<table align="center" cellpadding="0" cellspacing="0" border="0" width="95%">
					<?php if(is_array($staticcontent_detail)&& count($staticcontent_detail)>0)	{ 
						$staticcontent_detail	=	unEscapeSpecialCharacters((array)$staticcontent_detail[0]); ?>			
					<tr><td height="20"></td></tr>
					<tr><td class="landtitle" valign="top"><?php if($staticcontent_detail['heading'] != '') echo ucfirst($staticcontent_detail['heading']); ?></td></tr>
					<tr><td height="20"></td></tr>
					<tr><td>
						<p><?php if($staticcontent_detail['content'] != '') echo ucfirst($staticcontent_detail['content']); ?></p>
					</td></tr>
					 <?php } else {?>	
				 	<tr><td>
					 	<span>Oops! Page not found...</span>
					</td></tr>
					<?php } ?>			 
				</table>
			</div>
		</div>
	</div>
</div>
<?php siteFooter();?>
</div>
