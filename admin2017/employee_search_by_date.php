<div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3 style="font-weight: 900;"></h3>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="data-align-right">
                                        <div class="tbl-action-toolbar">
                                            
                                                    <a href="export_by_date.php?fromdate=<?php echo $_POST['fromdate'] ?>&todate=<?php echo $_POST['to'] ?>&status=<?php echo $_POST['status'] ?>" class="btn btn-info " ><i class="zmdi zmdi-archive"></i> Export Excel</a>
                                                    
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                          <table id="exportable-tbl" class="table foo-data-table-filterable" data-filter="#filter" data-filter-text-only="true" data-page-size="8" data-limit-navigation="3">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true">
                                    S.No
                                </th>
								<th  data-hide="phone">
                                   Complaint Number
                                </th>
                                <th  data-hide="phone">
                                   Customer Name
                                </th>
                                <th  data-hide="phone">
                              Complaint <br>
							  Date
                                </th>
								<th  data-hide="phone">
                             <br>
							  Attending <br>
							  date
                                </th>
								<th  data-hide="phone">
                             <br>
							  Closing <br>
							  date
                                </th>
                               
                                <th>
                                   Status
                                </th>
								<th  data-hide="phone">
                                    Details
                                </th>
                                <th  data-sort-ignore="true" data-hide="phone"></th>
                            </tr>
                            </thead>
                            <tbody>
							
							 <?php 
include ("db/db_connect.php");

$from=$_POST['fromdate'];
$status=$_POST['status'];
$to=$_POST['to'];
if($from==''){
$from='2000-01-01';
}
if($to==''){
$to=date('Y-m-d');
}
$from=date('Y-m-d', strtotime($from));

$to=date('Y-m-d',strtotime($to));
if($status==1){

$sql = "SELECT * FROM complaints_2017 where complaint_date between '$from' and '$to' order by complaint_no ";}
else{
$sql = "SELECT * FROM complaints_2017 where complaint_date between '$from' and '$to' and status='$status' order by complaint_no ";}



$result = mysql_query($sql);
$sl=0;
while($query = mysql_fetch_array($result)){
	$sl++;
?>
                            <tr>
							 <td><?php echo $sl; ?></td>
                                <td><?php echo $query['complaint_no']; ?></td>
                                <td><?php echo $query['customer']; ?></td>
                                <td><?php echo $query['complaint_date']; ?></td>
                                <td><?php echo $query['comp_attending_date']; ?></td>
                                <td><?php echo $query['comp_closing_date']; ?></td>
                           
								     <td data-value="1"><a class="label label-info"  title="Active"><?php echo $query['status']; ?></span></a>
									 </td>  
									 <td data-value="1"><a class="label label-success"  title="Active" href="complaint_details.php?id=<?php echo $query['id']; ?>">Details</span></a></td>
                              

							
								</td>
<?php } ?>
                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="6" class="footable-visible">
                                    <div class="pagination pagination-centered"></div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>