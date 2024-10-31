<div class="wrap">
  <div id="icon-navegg" class="icon32"><br>
  </div>

  <h2>Navegg Analytics</h2>

  <div id="dashboard-widgets-wrap">
    <div id="dashboard-widgets" class="metabox-holder">
	

<div class="col">

      <div class="postbox-container" style="width:99%;">
        <div id="normal-sortables" class="meta-box-sortables ui-sortable">
          <div id="dashboard_right_now" class="postbox sobre">

            <h2 class="hndle"><span><?php echo getTextNvg('nvgMsgAdmInitAbout_1'); ?></span></h2>

            <div class="inside">
		
						<img src="<?php echo plugins_url( 'contents/navegg-analytics.png', __FILE__ ); ?>" id="logo" />

            	<h4><strong><?php echo getTextNvg('nvgMsgAdmInitAbout_2'); ?></strong></h4><br />
				
				
               	<p><?php echo getTextNvg('nvgMsgAdmInitAbout_3'); ?></p>
				
            	<p><strong><?php echo getTextNvg('nvgMsgAdmInitAbout_4'); ?></strong> <?php echo getTextNvg('nvgMsgAdmInitAbout_5'); ?></p>
				
            	<p><strong><?php echo getTextNvg('nvgMsgAdmInitAbout_6'); ?></strong> <?php echo getTextNvg('nvgMsgAdmInitAbout_7'); ?></p>
				
		<p><strong><?php echo getTextNvg('nvgMsgAdmInitAbout_8'); ?></strong> <?php echo getTextNvg('nvgMsgAdmInitAbout_9'); ?></p>
				
      <ul class="links nvg_lst">              
	      <h4 class="tlt"><?php echo getTextNvg('nvgMsgAdmInitAbout_10'); ?></h4>           

				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_11_link'); ?>" target="_blank">
					<span class="dashicons dashicons-book-alt"></span>
					<?php echo getTextNvg('nvgMsgAdmInitAbout_11'); ?>
				</a></li>

				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_12_link'); ?>" target="_blank">	
					<span class="dashicons dashicons-admin-tools"></span>
					<?php echo getTextNvg('nvgMsgAdmInitAbout_12'); ?>
				</a></li>
				  
				<?php if(getTextNvg('nvgMsgAdmInitAbout_13') != '!empy'){ ?>
				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_13_link'); ?>" target="_blank">
					<span class="dashicons dashicons-laptop"></span>
					<?php echo getTextNvg('nvgMsgAdmInitAbout_13'); ?>
				</a></li>
				<?php } ?>

				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_14_link'); ?>" target="_blank">
					<span class="dashicons dashicons-editor-help"></span>
				  <?php echo getTextNvg('nvgMsgAdmInitAbout_14'); ?>
				</a></li>

				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_15_link'); ?>" target="_blank">
					<span class="dashicons dashicons-admin-users"></span>
				  <?php echo getTextNvg('nvgMsgAdmInitAbout_15'); ?>
				</a></li>
				  
				<li><a href="<?php echo getTextNvg('nvgMsgAdmInitAbout_16_link'); ?>" target="_blank">
					<span class="dashicons dashicons-email-alt"></span>
					<?php echo getTextNvg('nvgMsgAdmInitAbout_16'); ?>
				</a></li>
      </ul>

               <div class="clearme"></div>
            </div>
          </div>
        </div>
      </div>
	<p style="font-size:11px; margin-left:10px; margin-top:0;">
		<a href="" onclick="lng_ptbr();">Português </a>|<a href="" onclick="lng_es();">Español </a>|<a href="" onclick="lng_en();">English</a>
	</p>
	
	<div class="clearme"></div>
</div>

<div class="col">

      <div class="postbox-container" style="width:99%;">
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox id_nvg" style="max-height: 315px;">
           <h2 class="hndle">
				   	<span><?php echo getTextNvg('nvgMsgAdmInitYourId'); ?></span>
				   	<div class="status <?php  echo NvgWp::getIdNvg() != ''?'on':'off'; ?>">
				   	   <span></span>
					   <?php  echo NvgWp::getIdNvg() != '' ? getTextNvg('nvgMsgAdmInitYourId_1') : getTextNvg('nvgMsgAdmInitYourId_2') ; ?>
		        </div>
				   </h2>
           
	   <div class="inside">
					
			<?php /* <p>Verifique sua conta do Navegg Analytics:</p> */ ?>


				<?php 
					//getInfo User
					global 	$current_user; 
					get_currentuserinfo();
				 ?>

				<?php /* <label for="idNvg" style="display: block; float: left; width: 70px; margin-right: 8px; padding-top: 7px; text-align: right;">ID Navegg:</label>*/ ?>
				<form method="post" action="" onSubmit ="return validaFormId()" > 
					<h4><b><?php echo getTextNvg('nvgMsgAdmInitYourId_5'); ?></b></h4>
					<p><?php echo getTextNvg('nvgMsgAdmInitYourId_3'); ?> <strong>ID</strong> <?php echo getTextNvg('nvgMsgAdmInitYourId_4'); ?> </p>
					<?php
						if( isset( $_POST['idNvg']) )
							$nvgId = $_POST['idNvg'];
						else if(NvgWp::getIdNvg() != ''){
							$nvgId =  NvgWp::getIdNvg();
						}
							
					?>
					<input type="text" name="idNvg" id="idNvg" value="<?php echo $nvgId; ?>" placeholder="<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>"/>

					<button class="button" title="<?php echo getTextNvg('nvgMsgAdmInitYourId_7'); ?>"><?php echo getTextNvg('nvgMsgAdmInitYourId_6'); ?></button>

			        	<?php if( isset( $_POST['idNvg']) ||  $msgPost['class'] == 'updtSucess'){ ?>
				        	<p class="<?php echo $msgPost['class']; ?>"><?php echo $msgPost['msg'];?></p>
					<?php } ?>					
				</form>

				
				<?php
					//verifição para saber se precisa opcao de criar conta ou buscar id
					 if( (!isset($msgPost['class']) &&  NvgWp::getIdNvg() == '')  || (isset($msgPost['class']) && $msgPost['class'] != 'updtSucess') ){ 
				?>

				<form method="post" action="" onSubmit ="return validaFormSearch()" <?php echo $msgPost['class'] == 'updtSucess' ? 'styledisplay:none' : ''; ?> > 

					<p><?php echo getTextNvg('nvgMsgAdmInitYourId_11'); ?></p>

					<input type="text" name="emNvg" id="emNvg" value="<?php echo isset($_POST['emNvg']) ? $_POST['emNvg'] : '';?>" style="width: 100%; max-width: 200px; background-image: none; font-size: 13px;" />
					<button class="button" title="<?php echo getTextNvg('nvgMsgAdmInitYourId_12'); ?>" >
						<?php echo getTextNvg('nvgMsgAdmInitYourId_12'); ?>
					</button>

				                    <?php if( isset( $_POST['emNvg']) ){ ?>
				                            <p style="clear:both;" class="<?php echo $msgPost['class']; ?>"><?php echo $msgPost['msg'];?></p>
						<br/>
				                    <?php } ?>


					<div class="sing-up nvg_lst" style="clear: both;">
						<?php 
							/* <li class="h">
						   		<a href="<?php echo getTextNvg('nvgMsgAdmInitYourId_8_link'); ?>"  target="_blank">
							     		<?php echo getTextNvg('nvgMsgAdmInitYourId_8'); ?>
						   		</a>
					        	</li> */ 
						?>

						<a href="javascript:void(0)" onClick="document.getElementById('containerNewAccount').style.display = 'block'" >
							<?php echo getTextNvg('nvgMsgAdmInitYourId_9'); ?> 
							<span><?php echo getTextNvg('nvgMsgAdmInitYourId_10'); ?></span>
						</a>
					</div>	

				</form>   

				<?php } ?>


		<div class="clearme"></div>

            </div>
          </div>
        </div>
      </div>
	 
 
<?php   
  if( (!isset($msgPost['class']) &&  NvgWp::getIdNvg() == '')  || (isset($msgPost['class']) && $msgPost['class'] != 'updtSucess') ){ 
	$inName 	= isset($_POST['nmNvg']) ? $_POST['nmNvg'] : ($current_user->user_nicename == 'admin' ? '' : $current_user->user_nicename);
	$inEmail 	= isset($_POST['nemNvg']) ? $_POST['nemNvg'] : $current_user->user_email;
	$inSite		= isset($_POST['stNvg']) ? $_POST['stNvg'] : get_bloginfo('name');
	$inUrl		= isset($_POST['urNvg']) ? $_POST['urNvg'] : get_bloginfo('url');
?>   	  
      <div id="containerNewAccount" class="postbox-container" <?php echo !isset($_POST['newNvg']) ? 'style="width:99%; display:none;"' : ''; ?>>
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox cnt_nvg">
           	<h2 class="hndle"><span><?php echo getTextNvg('nvgMsgAdmInitAccount_1'); ?></span></h2>

	   	<div class="inside sing-up">
		   <form method="post" action="" onSubmit ="return validaFormNew()" <?php echo $msgPost['class'] == 'updtSucess' ? 'styledisplay:none' : ''; ?> > 
			<input type="hidden" name="newNvg" value="true"/>	
			<p><?php echo getTextNvg('nvgMsgAdmInitAccount_2'); ?></p>


			<div class="campo clearfix inline">
				<label for="nmNvg">
					<?php echo '* '.getTextNvg('nvgMsgAdmInitAccount_3'); ?>
				</label>
				<input type="text" name="nmNvg" id="nmNvg" value="<?php echo $inName; ?>"/>
			</div>
					
			<div class="campo clearfix inline">
				<label for="nemNvg">
					<?php echo '* '.getTextNvg('nvgMsgAdmInitAccount_4'); ?>
				</label>
				<input type="text" name="nemNvg" id="nemNvg" value="<?php echo $inEmail; ?>"/>
			</div>
					
			<div class="campo clearfix">
				<label for="stNvg">
					<?php echo getTextNvg('nvgMsgAdmInitAccount_5'); ?>
				</label>
				<input type="text" name="stNvg" id="stNvg" value="<?php echo $inSite; ?>"/>
			</div>
			
			<div class="campo clearfix">
				<label for="urNvg">
					<?php echo getTextNvg('nvgMsgAdmInitAccount_6'); ?>
				</label>
				<input type="text" name="urNvg" id="urNvg" value="<?php echo $inUrl ?>" />
			</div>

			<button class="button" title="<?php echo getTextNvg('nvgMsgAdmInitAccount_1'); ?>" >
				<?php echo getTextNvg('nvgMsgAdmInitAccount_7'); ?>
			</button>

			<?php if( isset( $_POST['newNvg']) ){ ?>
				<p style="clear:both;" class="<?php echo $msgPost['class']; ?>"><?php echo $msgPost['msg'];?></p> <br/>
			<?php } ?>

		   </form>
	        </div>
          </div>
        </div>
      </div>
<?php } ?>	  


  
	  
      <div class="postbox-container" style="width:99%;">
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox pn_nvg">
           <h2 class="hndle"><span><?php echo getTextNvg('nvgMsgAdmInitPainel_3'); ?></span></h2>

	   		<div class="inside analytics-dash clearfix">
	   			<?php
						$pnUrl = getTextNvg('nvgMsgAdmInitPainel_1_link');
						if(NvgWp::getAutoInNvg() != '')
							$pnUrl = 'http://panel.navegg.com/account/loginPartner.php?loginkey='.NvgWp::getAutoInNvg();
					?>

					<a href="<?php echo $pnUrl; ?>" target="_blank" class="dash">
		   			<img src="<?php echo plugins_url( 'contents/dashboard.png', __FILE__ ); ?>">
		   		</a>

					<div class="texto">						
						<h3>Navegg Analytics</h3>
						<p>
							<a href="<?php echo $pnUrl; ?>" target="_blank">
								<?php echo getTextNvg('nvgMsgAdmInitPainel_1'); ?>
							</a> 
							<?php echo getTextNvg('nvgMsgAdmInitPainel_2'); ?>
						</p>
					</div>

	        </div>

          </div>
        </div>
      </div>

<div class="clearme"></div>
</div>

   <div class="clear"></div>

  </div>
  
</div>
<script type="text/javascript">

function validaFormId(){

  if(document.getElementById('idNvg').value == '' ||  document.getElementById('idNvg').value == '<?php echo getTextNvg('nvgMsgAdmInitYourId_5');?>'){
	alert("<?php echo getTextNvg('nvgMsgAdmInitYourIdAlert_1'); ?>");
	return false;
  }
   return true;
}

function validaFormNew(){

	if(document.getElementById('nmNvg').value == '' ){
        	alert("<?php echo getTextNvg('nvgMsgAdmInitError_3');?>");
		document.getElementById('nmNvg').focus();		
        	return false;
	}		

	if(!validaEmail('nemNvg'))
		return false;

	return true;
}
function validaFormSearch(){
   return validaEmail('emNvg');
}

function validaEmail(id){
  if(document.getElementById(id).value == '' ){
        alert("<?php echo getTextNvg('nvgMsgAdmInitError_4');?>");
	document.getElementById(id).focus();		
        return false;
  }else
        if(!checkMail(document.getElementById(id).value)){
                alert("<?php echo getTextNvg('nvgMsgAdmInitError_5');?>");
		document.getElementById(id).focus();		
                return false;
        }
        
   return true;
}
function checkMail(mail){
	var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
	if(typeof(mail) == "string")
		if(er.test(mail)) return true; 
	else if(typeof(mail) == "object"){
		if(er.test(mail.value))	return true;
	}else	return false;
}

function lng_ptbr(){
	document.cookie = 'idioma_nvg=br';
}
function lng_en(){
	document.cookie = 'idioma_nvg=en';
}
function lng_es(){
	document.cookie = 'idioma_nvg=es';
}
</script>

