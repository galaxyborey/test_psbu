							<tr class='status-item'>
                                                        <td> <input type="checkbox" name="item_index[]" class="mt-checkbox mt-checkbox-outline"> </td>
                                                        <td>
                                                        	<select name="stStatus[]" class="form-control">
                                                        	{{\App\Helpers\Helpers::getProducts()}}	
                                                        	</select>
								</td>
                                                        <td>
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                        	<div class="col-md-5">
                                                        		<input id="pheights" type="text" class="form-control" name="pheights[]" value="" placeholder="Heiht">
                                                        	</div>
                                                        	<div class="col-md-2"><strong> X </strong></div>
                                                        	<div class="col-md-5">
                                                        		<input id="pweights" type="text" class="form-control" name="pweights[]" value="" placeholder="Weight">
                                                        	</div></td>
                                                        <td> 
                                                        	<input id="unitprices" type="text" class="form-control" name="unitprices[]" value="" placeholder="unit prices"> </td>
                                                        <td>
                                                        	<input id="amount" type="text" class="form-control" name="amount[]" value="" placeholder=""> </td>
                                                 </tr>