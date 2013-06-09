<article class="module width_full" style="overflow-x: scroll;">
					<header><h3>&nbsp;&nbsp;CHECK LIST </h3></header>
					<div class="module_content"> 
						<table width="0" border="0" align="left" cellpadding="4" cellspacing="3" background="../../images/latar.jpg">    
							<td> &nbsp;&nbsp;</td>
								
								<b>PROSENTASE KONDISI S / B (%)</b>
								<tr>
								</tr>
								
								<?php foreach( $komponen as $kom ): ?>
								
								<tr>
									<td> <strong><?php echo $kom->nama_part ?></strong></td>
									<td> 
										<input type="radio" name="part-<?php echo $kom->id_part ?>" value="check" />
										<label>Check</label>
										<input type="radio" name="part-<?php echo $kom->id_part ?>" value="cleaning" /> 
										<label>Cleaning</label>
										<input type="radio" name="part-<?php echo $kom->id_part ?>" value="inspection" /> 
										<label>Inspection</label>
									</td>
								</tr>
								
								<?php endforeach ?>
								
								<div class="clear"></div>
								
						</table>
					</div>
				</article><!-- end of stats article -->
				
				<div class="clear"></div>