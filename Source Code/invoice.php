<?php
include("include/check.php");
include("include/connect.php");
include("include/header.php");

if(isset($_GET['pid'])){
  $id=$_GET['pid'];
}
$sql="select * from users where  id=$id";
$re = $conn->query($sql)->fetch_assoc();
?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Invoice</h1>
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Currency</b>
                            </div>
                                <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <select class="form-control" id="currency">
                                            <option value="$">
                                              USD
                                            </option>
                                            <option value="$">
                                              CAD
                                            </option>
                                            <option value="€">
                                              EUR
                                            </option>
                                            <option value="د.إ.">
                                              AED
                                            </option>
                                            <option value="؋ ">
                                              AFN
                                            </option>
                                            <option value="Lek">
                                              ALL
                                            </option>
                                            <option value="դր.">
                                              AMD
                                            </option>
                                            <option value="$">
                                              ARS
                                            </option>
                                            <option value="$">
                                              AUD
                                            </option>
                                            <option value="ман.">
                                              AZN
                                            </option>
                                            <option value="KM">
                                              BAM
                                            </option>
                                            <option value="৳">
                                              BDT
                                            </option>
                                            <option value="лв.">
                                              BGN
                                            </option>
                                            <option value="د.ب. ">
                                              BHD
                                            </option>
                                            <option value="FBu">
                                              BIF
                                            </option>
                                            <option value="$">
                                              BND
                                            </option>
                                            <option value="Bs">
                                              BOB
                                            </option>
                                            <option value="R$">
                                              BRL
                                            </option>
                                            <option value="P">
                                              BWP
                                            </option>
                                            <option value="BYR">
                                              BYR
                                            </option>
                                            <option value="$">
                                              BZD
                                            </option>
                                            <option value="FrCD">
                                              CDF
                                            </option>
                                            <option value="CHF">
                                              CHF
                                            </option>
                                            <option value="$">
                                              CLP
                                            </option>
                                            <option value="CN¥">
                                              CNY
                                            </option>
                                            <option value="$">
                                              COP
                                            </option>
                                            <option value="₡">
                                              CRC
                                            </option>
                                            <option value="CV">
                                              CVE
                                            </option>
                                            <option value="Kč">
                                              CZK
                                            </option>
                                            <option value="Fdj">
                                              DJF
                                            </option>
                                            <option value="kr">
                                              DKK
                                            </option>
                                            <option value="RD">
                                              DOP
                                            </option>
                                            <option value="د.ج. ">
                                              DZD
                                            </option>
                                            <option value="kr">
                                              EEK
                                            </option>
                                            <option value="ج.م. ">
                                              EGP
                                            </option>
                                            <option value="Nfk">
                                              ERN
                                            </option>
                                            <option value="Br">
                                              ETB
                                            </option>
                                            <option value="£">
                                              GBP
                                            </option>
                                            <option value="GEL">
                                              GEL
                                            </option>
                                            <option value="GH₵">
                                              GHS
                                            </option>
                                            <option value="FG">
                                              GNF
                                            </option>
                                            <option value="Q">
                                              GTQ
                                            </option>
                                            <option value="$">
                                              HKD
                                            </option>
                                            <option value="L">
                                              HNL
                                            </option>
                                            <option value="kn">
                                              HRK
                                            </option>
                                            <option value="Ft">
                                              HUF
                                            </option>
                                            <option value="Rp">
                                              IDR
                                            </option>
                                            <option value="₪">
                                              ILS
                                            </option>
                                            <option value="₹">
                                              INR
                                            </option>
                                            <option value="د.ع.">
                                              IQD
                                            </option>
                                            <option value="﷼   ">
                                              IRR
                                            </option>
                                            <option value="kr">
                                              ISK
                                            </option>
                                            <option value="$">
                                              JMD
                                            </option>
                                            <option value="د.أ.">
                                              JOD
                                            </option>
                                            <option value="￥">
                                              JPY
                                            </option>
                                            <option value="Ksh">
                                              KES
                                            </option>
                                            <option value="៛">
                                              KHR
                                            </option>
                                            <option value="FC">
                                              KMF
                                            </option>
                                            <option value="₩">
                                              KRW
                                            </option>
                                            <option value="د.ك. ">
                                              KWD
                                            </option>
                                            <option value="тңг.">
                                              KZT
                                            </option>
                                            <option value="ل.ل. ">
                                              LBP
                                            </option>
                                            <option value="SL Re">
                                              LKR
                                            </option>
                                            <option value="Lt">
                                              LTL
                                            </option>
                                            <option value="Ls">
                                              LVL
                                            </option>
                                            <option value="د.ل. ">
                                              LYD
                                            </option>
                                            <option value="د.م. ">
                                              MAD
                                            </option>
                                            <option value="MDL">
                                              MDL
                                            </option>
                                            <option value="MGA">
                                              MGA
                                            </option>
                                            <option value="MKD">
                                              MKD
                                            </option>
                                            <option value="K">
                                              MMK
                                            </option>
                                            <option value="MOP">
                                              MOP
                                            </option>
                                            <option value="MURs">
                                              MUR
                                            </option>
                                            <option value="$">
                                              MXN
                                            </option>
                                            <option value="RM">
                                              MYR
                                            </option>
                                            <option value="MTn">
                                              MZN
                                            </option>
                                            <option value="N$">
                                              NAD
                                            </option>
                                            <option value="₦">
                                              NGN
                                            </option>
                                            <option value="C$">
                                              NIO
                                            </option>
                                            <option value="kr">
                                              NOK
                                            </option>
                                            <option value="नेरू">
                                              NPR
                                            </option>
                                            <option value="$">
                                              NZD
                                            </option>
                                            <option value="ر.ع. ">
                                              OMR
                                            </option>
                                            <option value="B/.">
                                              PAB
                                            </option>
                                            <option value="S/.">
                                              PEN
                                            </option>
                                            <option value="₱">
                                              PHP
                                            </option>
                                            <option value="Rs">
                                              PKR
                                            </option>
                                            <option value="zł">
                                              PLN
                                            </option>
                                            <option value="₲">
                                              PYG
                                            </option>
                                            <option value="ر.ق. ">
                                              QAR
                                            </option>
                                            <option value="RON">
                                              RON
                                            </option>
                                            <option value="дин.">
                                              RSD
                                            </option>
                                            <option value="ру">
                                              RUB
                                            </option>
                                            <option value="FR">
                                              RWF
                                            </option>
                                            <option value="ر.س. ">
                                              SAR
                                            </option>
                                            <option value="SDG">
                                              SDG
                                            </option>
                                            <option value="kr">
                                              SEK
                                            </option>
                                            <option value="$">
                                              SGD
                                            </option>
                                            <option value="Ssh">
                                              SOS
                                            </option>
                                            <option value="ل.س. ">
                                              SYP
                                            </option>
                                            <option value="฿">
                                              THB
                                            </option>
                                            <option value="د.ت. ">
                                              TND
                                            </option>
                                            <option value="T$">
                                              TOP
                                            </option>
                                            <option value="TL">
                                              TRY
                                            </option>
                                            <option value="$">
                                              TTD
                                            </option>
                                            <option value="NT$">
                                              TWD
                                            </option>
                                            <option value="TSh">
                                              TZS
                                            </option>
                                            <option value="₴">
                                              UAH
                                            </option>
                                            <option value="USh">
                                              UGX
                                            </option>
                                            <option value="$">
                                              UYU
                                            </option>
                                            <option value="UZS">
                                              UZS
                                            </option>
                                            <option value="Bs.F.">
                                              VEF
                                            </option>
                                            <option value="₫ ">
                                              VND
                                            </option>
                                            <option value="FCFA">
                                              XAF
                                            </option>
                                            <option value="CFA">
                                              XOF
                                            </option>
                                            <option value="ر.ي. ">
                                              YER
                                            </option>
                                            <option value="R">
                                              ZAR
                                            </option>
                                            <option value="ZK">
                                              ZMK
                                            </option>
                                            <option value="uBTC">
                                              uBTC
                                            </option>
                                            <option value="BTC">
                                              BTC
                                            </option>
                                        </select>
                                            
                                    </div>

                                    <div class="form-group">
                                        <label><input type="checkbox" id="curr_check">&nbsp;&nbsp;<b>Unambiguous currency.</b></label>
                                    </div>
                                </div>                                    
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Discount</b>
                            </div>
                                <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <select class="form-control" id="discount">
                                            <option value="flat_discount">
                                                Flat Discount
                                            </option>
                                            <option value="%discount">
                                                % Discount
                                            </option>
                                            <option value="off">
                                                Off
                                            </option>
                                        </select>
                                            
                                    </div>

                                </div>                                    
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Shipping</b>
                            </div>
                                <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <select class="form-control" id="shipping">
                                            <option value="on">
                                                On
                                            </option>
                                            <option value="off">
                                                Off
                                            </option>
                                        </select>
                                            
                                    </div>

                                </div>                                    
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Tax</b>
                            </div>
                                <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <select class="form-control" id="tax">
                                            <option value="vat">
                                                VAT
                                            </option>
                                            <option value="flat_tax">
                                                Flat Tax
                                            </option>
                                            <option value="%tax">
                                                % Tax
                                            </option>
                                            <option value="off">
                                                Off
                                            </option>
                                        </select>
                                    </div>
                                </div>                                    
                            </div>
                        </div>

                    </div>



                    <div class="col-sm-9" id="GFG">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="padding: 0px 30px;">
                                <br>
                                <div style="float:right;">
                                    <h2>INVOICE</h2>
                                </div>
                                
                                <h4><b>From</b></h4>
                                <h5> <span>Techweirdo</span> <br>
                                <span>India</span> <br>
                                </h5>

                                <br>
                                <div style="float:right;">
                                    <span><b>Invoice#:</b></span><?php echo("TW/".date("Y")."/".date("m")."/".$id); ?> <br>
                                    <span><b>Invoice Date:</b></span><?php echo(date("d-m-Y")); ?> <br>
                                    <!-- <span><b>Due Date:</b></span> <br> -->
                                </div>
                                
                                <h4><b>To</b></h4>
                                <h5> <span>Name: </span><?php echo($re['name']); ?> <br>
                                <span>Address: </span><?php echo($re['address']); ?> <br>
                                <span>Country: </span><?php echo($re['country']); ?> <br>
                                <span>Applicable Tax: </span><?php echo($re['gst']); ?> <br></h5>
                                
                            </div>
                                <!-- /.panel-heading -->
                                <form class="form-valide" method="POST" name="userform" > 
                            <div class="panel-body" style="padding: 30px;">
                                <div class="table-responsive">
                                    <div class="col-sm-12">
                                        <label class="col-sm-4">
                                            <b>Product Name</b>
                                            </label>
                                            
                                            <label class="col-sm-2">
                                            <b>Quantity</b>
                                            </label>
                                            <label class="col-sm-2">
                                            <b>Sale Price</b>
                                            </label>
                                            <label class="col-sm-2">
                                            <b>Total Price</b>
                                            </label>
                                            <label class="col-sm-2">                                         
                                            </label>
                                        </div>
                                        <div class="form-group row control-group after-add-more">
                                            <div class="col-sm-4">
                                            <input name="product_id[]" class="form-control product_id" required>
                                                
                                            </div>

                                            <div class="col-sm-2">
                                            <input type="number" name="quantity[]" class="form-control quantity" min="1" placeholder="Quantity" required>
                                            </div>
                                            <div class="col-sm-2">
                                            <input type="text" name="sale_price[]" class="form-control sale_price" min="1" placeholder="Price" required >
                                            </div>
                                            <div class="col-sm-2">
                                            <input type="number" name="subtotal[]" class="form-control subtotal" min="1" placeholder="subtotal" required>
                                            </div>
                                            <div class="col-sm-2">
                                           <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                            </div>
                                          </div>

                              <!-- edit -->

                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example tbl_id">
                                        <div class="col-sm-6">
                                            <div id="dataTables-example_filter" class="dataTables_filter">
                                                <thead>
                                                    <tr>
                                                        <th width="50%">Item</th> 
                                                        <th>HRS/QTY</th>
                                                        <th>Rate</th>
                                                        <th class='vat_col'>VAT</th>
                                                        <th>Amount</th>
</tr>
                                                </thead>
                                                
                                                <tbody id="tbl">   
                                                     <tr>              
                                                        <td data-name="TAG_NUMBER"><input name="item_name[]" placeholder="Item" onchange="show(this);" style="border: 0;background-color: transparent;"></td>
                                                        <td><span class="curr_syn">$</span><input name="item_qty[]" placeholder="0" onchange="show(this);" style="border: 0;background-color: transparent;width: 30px;"></td>
                                                        <td><span class="curr_syn">$</span><input name="item_rate[]" placeholder="0.00" onchange="show(this);" style="border: 0;background-color: transparent;width: 30px;"></td>
                                                        <td class='vat_col'><span class="curr_syn">$</span>0.00</td>
                                                        <td><span class="curr_syn">$</span>0.00</td>
                                                    </tr> 

                                                     

                                                </tbody>
                                                
                                            </div>
                                        </div>                                     
                                    </table>

                                  <!-- edit -->

                                    <div>
                                        <button class="btn btn-primary" id="add_item">+ Add Item</button>
                                    </div>

                                    <div>
                                        <table align="right" width="40%">
                                            <tr id='subtotal_row'>
                                                <th width="50%">Subtotal :</th>
                                                <td><span class="curr_syn">$</span><span id="subtotal_val">0.00</span></td>
                                            </tr>

                                            <tr id='discount_row'>
                                                <th width="50%">Discount :</th>
                                                <td><span class="curr_syn">$</span id="discount_val">0.00<span></span></td>
                                            </tr>

                                            <tr id='shipping_row'>
                                                <th width="50%">Shipping :</th>
                                                <td><span class="curr_syn">$</span><span id="shipping_val">0.00</span></td>
                                            </tr>

                                            <tr id='tax_row'>
                                                <th width="50%" id="tax_text">VAT :</th>
                                                <td><span class="curr_syn_tax"></span><span id="tax_val">0%</span></td>
                                            </tr>

                                            <tr id='total_row'>
                                                <th width="50%">Total :</th>
                                                <td><span class="curr_syn">$</span><span id="total_val">0.00</span><span id='cur_val'></span></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div> <br>    

                                <div class="form-group">
                                    <label>Notes</label>
                                    <textarea class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Terms</label>
                                    <textarea class="form-control"></textarea>
                                </div>                               

                            </div>
                        </form>
                        </div>
                           
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
                    <!-- /.row -->
                    <div id="editor"></div>
                    <button id="cmd" class="btn btn-primary" onclick="printDiv()">Print</button><br><br>
            </div>
                <!-- /.panel -->
        </div>

          <div class="copy hide">
             <div class="form-group control-group row">
             <div class="col-sm-4">
            <input name="product_id[]" class="form-control product_id" required>
            </div>

            <div class="col-sm-2">
            <input type="number" name="quantity[]" class="form-control quantity" min="1" placeholder="Quantity" required>
            </div>
            <div class="col-sm-2">
            <input type="text" name="sale_price[]" class="form-control sale_price" min="1" placeholder="Price" required >
            </div>
            <div class="col-sm-2">
            <input type="number" name="subtotal[]" class="form-control subtotal" min="1" placeholder="subtotal" required>
            </div>
            <div class="col-sm-2">
           <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
          </div>

<br><br>
  
<?php
    include("include/footer.php");
?>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

<script type="text/javascript">
    $('#discount').change(function(){
        if($('#discount').val() == '%discount'){
            $('#discount_row').css('display','block');
            $('#discount_val').html('0%');
            $('#discount_val').css('text-align','right');
        }else if($('#discount').val() == 'flat_discount'){
            $('#discount_row').css('display','block');
            $('#discount_val').html('$0.00');
            $('#discount_val').css('text-align','right');
        }else if($('#discount').val() == 'off'){
            $('#discount_row').css('display','none');
            $('#discount_val').html('');
        }
    });

    $('#shipping').change(function(){
        if($('#shipping').val() == 'on'){
            $('#shipping_row').css('display','block');
            $('#shipping_val').html('$0.00');
            $('#shipping_val').css('text-align','right');
        }else if($('#shipping').val() == 'off'){
            $('#shipping_row').css('display','none');
            $('#shipping_val').html('');
        }
    });

    $('#tax').change(function(){
        if($('#tax').val() == 'flat_tax'){
            $('#tax_row').css('display','block');
            $('#tax_text').html('Tax :');
            $('.curr_syn_tax').html($('#currency option:selected').val());
            $('#tax_val').html('0.00');
            $('.vat_col').css('display','none');
            $('#tax_val').css('text-align','right');
        }else if($('#tax').val() == 'vat'){
            $('#tax_row').css('display','block');
            $('#tax_text').html('VAT :');
            $('.curr_syn_tax').html('');
            $('#tax_val').html('0%');
            $('.vat_col').css('display','block');
            $('#tax_val').css('text-align','right');
        }else if($('#tax').val() == '%tax'){
            $('#tax_row').css('display','block');
            $('#tax_text').html('Tax :');
            $('.curr_syn_tax').html('');
            $('#tax_val').html('0%');
            $('.vat_col').css('display','none');
            $('#tax_val').css('text-align','right');
        }else if($('#tax').val() == 'off'){
            $('#tax_row').css('display','none');
            $('#tax_val').html('');
        }
    });

    $('#curr_check').click(function(){
        if($("#curr_check").prop('checked') == true){
            $('#cur_val').html(' ('+$('#currency option:selected').html()+')');
        }else{
            $('#cur_val').html('');
        }
    });

    $('#currency').change(function(){
        if($("#curr_check").prop('checked') == true){
            $('#cur_val').html(' ('+$('#currency option:selected').html()+')');
        }else{
            $('#cur_val').html('');
        }

        $('.curr_syn').html($('#currency option:selected').val());
        if($('#tax').val() == 'flat_tax'){
            $('.curr_syn_tax').html($('#currency option:selected').val());
        }

    });

   

 $(document).ready(function(){
      
         $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $('input').attr('required',true);
          $(".after-add-more").after(html);
      });  
       $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
          $('input').attr('required',false);
          calculate();
      });
      });

     $('.form-valide').on("keyup",'input[name^="quantity"]',function(event){
        //var sale_price=data1['product'].sale_price; 
        var quantity=$(this).val();
            var currentRow=$(this).parent(".control-group").closest("div");
            var sale_price=currentRow.find('input[name^="sale_price"]').val();
            var subtotal=parseInt(sale_price)*parseInt(quantity);
            currentRow.find('input[name^="subtotal"]').val(subtotal);
            // calculate();
            //alert(sale_price);
        currentRow.find('input[name^="quantity"]').attr('max','10');
        currentRow.find('input[name^="sale_price"]').val('10');

              var sum = 0;
            $('.subtotal').each(function() {
                sum += Number($(this).val());
            });
        $('#final_total').val(sum);
        $('#received_amount').val(sum);
    });

// edit   

    /*var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#cmd').click(function () {
        doc.fromHTML($('#content').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });*/

  // edit  
        function printDiv() { 
            var divContents = document.getElementById("GFG").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body >'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        }  

</script>
