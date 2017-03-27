 <?php 
 use yii\helpers\Html;
 ?>
 <div class="row">
 <div class="leftcolumn col-md-6">
    <div class="chatbox col-md-12">
        <div class="botchat"><span class="label label-info">helloMAN</span> </div>  
    
        <div class="humanchat"><span class="label label-success">helloBOT</span> </div>
        <hr>
    </div>
    <div class="col-md-12 msgbox">
    <br>
    <div class="col-md-10">
    <?=Html::textInput('msg','',['class'=>'form-control'])?>
    </div>
    <div class="col-md-2">
    <?=Html::button('send',['class'=>'btn btn-success btn-block btnsend'])?>
    </div>
    </div>
</div>
<div class="col-md-6"> </div>
 </div>
